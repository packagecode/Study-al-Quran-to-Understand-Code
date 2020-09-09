<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['results'] = Slider::all();
        $data['pageTitle'] = 'Slider List';
        return View::make('admin.slider.index', $data);
    }

    public function create()
    {
        return View::make('admin.slider.create')->with('pageTitle', 'Slider Create');

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|image',
            'priority' => 'required|int'
        ]);
        $file = fileUpload($request->file('file'), 'S');
        $data = array('file' => $file, 'priority' => $request->priority);
        Slider::create($data);
        return redirect()->back()->with('success', 'Added Successfully !');
    }

    public function show(Slider $slider)
    {
        return redirect()->back();
    }

    public function edit(Slider $slider)
    {
        $data['slider'] = $slider;
        $data['pageTitle'] = 'Slider Edit';
        return View::make('admin.slider.edit', $data);
    }

    public function update(Request $request, Slider $slider)
    {
        $this->validate($request, [
            'file' => 'nullable|image',
            'priority' => 'required|int'
        ]);
        if ($request->hasFile('file')) {
            $file = fileUpload($request->file('file'), 'S');
            $data = array('file' => $file, 'priority' => $request->priority);
        } else
            $data = array('priority' => $request->priority);
        $slider->fill($data)->save();
        return redirect()->back()->with('success', 'Update Successfully !');
    }

    public function destroy(Slider $slider)
    {
        @unlink(('storage/slider/') . str_replace('/storage/slider/', '', $slider->file));
        $slider->delete();
        return redirect()->back()->with('success', 'Delete Successfully !');
    }
}
