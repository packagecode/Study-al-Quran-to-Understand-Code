<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['results'] = Gallery::all()->sortBy('create_at');
        $data['pageTitle'] = 'Gallery List';
        return view('admin.gallery.index', $data);
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'type' => 'required|integer',
            'url' => 'required|string',
            'status' => 'nullable|integer'
        ]);
        $data = $request->all();
        $blacklistArray = array('youtu.be');
        $matches = array();
        $typeMatchFound = preg_match_all("/\b(" . implode($blacklistArray, "|") . ")\b/i", $request->url, $matches);

        if ($typeMatchFound)
            $url = str_replace('youtu.be', 'www.youtube.com/embed', $request->url);
        else {
            $url = str_replace('watch?v=', 'embed/', $request->url);
        }
        $data['url'] = $url;
        Gallery::create($data);
        return redirect()->back()->with('success', 'Added Successfully !');
    }


    public function show($id)
    {
        return back();
    }


    public function edit($id)
    {
        $data['gallery'] = Gallery::find($id);
        return view('admin.gallery.edit', $data);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'type' => 'required|integer',
            'url' => 'required|string',
            'status' => 'nullable|integer'
        ]);
        $gallery = Gallery::find($id);
        if (is_null($gallery))
            return back();
        $data = $request->all();
        $blacklistArray = array('youtu.be');
        $matches = array();
        $typeMatchFound = preg_match_all("/\b(" . implode($blacklistArray, "|") . ")\b/i", $request->url, $matches);

        if ($typeMatchFound)
            $url = str_replace('youtu.be', 'www.youtube.com/embed', $request->url);
        else {
            $url = str_replace('watch?v=', 'embed/', $request->url);
        }
        $data['url'] = $url;
        $gallery->fill($data)->save();
        return redirect()->back()->with('success', 'Added Successfully !');

    }

    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        if (is_null($gallery))
            return back();
        $gallery->delete();
        return redirect()->back()->with('success', 'Delete Successfully !');
    }
}
