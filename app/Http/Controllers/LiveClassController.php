<?php

namespace App\Http\Controllers;

use App\LiveClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class LiveClassController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['results'] = LiveClass::all();
        $data['pageTitle'] = 'Live Video List';
        return View::make('admin.liveclass.index', $data);
    }

    public function create()
    {
        return View::make('admin.liveclass.create')->with('pageTitle', 'Live Class Create');

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'type' => 'required|int',
            'url' => 'required|string'
        ]);
        if ($request->type == '3' || $request->type == '4')
        {
          $blacklistArray = array('youtu.be');
          $matches = array();
          $typeMatchFound = preg_match_all("/\b(" . implode($blacklistArray, "|") . ")\b/i", $request->url, $matches);

          if ($typeMatchFound)
            $url = str_replace('youtu.be', 'www.youtube.com/embed', $request->url);
          else {
            $url = str_replace('watch?v=', 'embed/', $request->url);
          }
        } else
            $url = $request->url ;
            
        $data = array('type' => $request->type, 'url' => $url);
        LiveClass::create($data);
        return redirect()->back()->with('success', 'Added Successfully !');
    }

    public function show($id)
    {
        return redirect()->back();
    }

    public function edit($id)
    {
        $liveClass = LiveClass::findOrFail($id);
        if (is_null($liveClass))
            return redirect()->back();
        $data['liveClass'] = $liveClass;
        $data['pageTitle'] = 'Live Class Edit';
        return View::make('admin.liveclass.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'type' => 'required|int',
            'url' => 'required|string'
        ]);
        $liveClass = LiveClass::findOrFail($id);
        if (is_null($liveClass))
            return redirect()->back();
        if ($request->type == '3' || $request->type == '4')
            $url = str_replace('watch?v=', 'embed/', $request->url);
        else
            $url = $request->url;
        $data = array('type' => $request->type, 'url' => $url);
        $liveClass->fill($data)->save();
        return redirect()->back()->with('success', 'Update Successfully !');
    }

    public function destroy($id)
    {
        $liveClass = LiveClass::findOrFail($id);
        if (is_null($liveClass))
            return redirect()->back();
        $liveClass->delete();
        return redirect()->back()->with('success', 'Delete Successfully !');
    }
}
