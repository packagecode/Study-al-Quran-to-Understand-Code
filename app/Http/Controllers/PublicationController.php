<?php

namespace App\Http\Controllers;

use App\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PublicationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['results'] = Publication::orderByDesc('id')->get();
        $data['pageTitle'] = 'Publication List';
        return View::make('admin.publication.index', $data);
    }

    public function create()
    {
        return View::make('admin.publication.create')->with('pageTitle', 'Publication Create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'date' => 'required|string',
            'vlink' => 'nullable|string',
            'dlink' => 'nullable|string',
            'cover_pic' => 'nullable|image',
            'status' => 'required|int'
        ]);
        $data = $request->all();
        if ($request->hasFile('cover_pic')) {
            $file = fileUpload($data['cover_pic'], 'CP');
            $data['cover_pic'] = $file;
        }
        Publication::create($data);
        return redirect()->back()->with('success', 'Added Successfully !');
    }

    public function show(Publication $publication)
    {
        return redirect()->back();
    }

    public function edit(Publication $publication)
    {
        $data['publication'] = $publication;
        $data['pageTitle'] = 'Publication Edit';
        return View::make('admin.publication.edit', $data);
    }

    public function update(Request $request, Publication $publication)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'date' => 'required|string',
            'vlink' => 'nullable|string',
            'dlink' => 'nullable|string', 
            'status' => 'required|int'
        ]);
        $data = $request->all();
        if ($request->hasFile('cover_pic')) {
            $file = fileUpload($data['cover_pic'], 'CP');
            $data['cover_pic'] = $file;
        }
        $publication->fill($data)->save();
        return redirect()->back()->with('success', 'Update Successfully !');
    }

    public function destroy(Publication $publication)
    {
        $publication->delete();
        return redirect()->back()->with('success', 'Delete Successfully !');
    }
}
