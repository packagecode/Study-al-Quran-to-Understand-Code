<?php

namespace App\Http\Controllers;

use App\QuranClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class QuranClassController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['results'] = QuranClass::all();
        $data['pageTitle'] = 'Quran Class List';
        return View::make('admin.quranclass.index', $data);
    }

    public function create()
    {
        return View::make('admin.quranclass.create')->with('pageTitle', 'Quran Class Create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'day' => 'required|string',
            'time' => 'required|string',
            'place' => 'nullable|string',
            'priority' => 'required|int'
        ]);
        $data = $request->all();
        QuranClass::create($data);
        return redirect()->back()->with('success', 'Added Successfully !');
    }

    public function show(QuranClass $quranClass)
    {
        return redirect()->back();
    }

    public function edit($id)
    {
        $quranClass = QuranClass::findOrFail($id);
        if (is_null($quranClass)) {
            return redirect()->back();
        }
        $data['quranClass'] = $quranClass;
        $data['pageTitle'] = 'Quran Class Edit';
        return View::make('admin.quranclass.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $quranClass = QuranClass::findOrFail($id);
        if (is_null($quranClass)) {
            return redirect()->back();
        }
        $this->validate($request, [
            'day' => 'required|string',
            'time' => 'required|string',
            'place' => 'nullable|string',
            'priority' => 'required|int'
        ]);
        $data = $request->all();
        $quranClass->fill($data)->save();
        return redirect()->back()->with('success', 'Update Successfully !');
    }

    public function destroy($id)
    {
        $quranClass = QuranClass::findOrFail($id);
        if (is_null($quranClass)) {
            return redirect()->back();
        }
        $quranClass->delete();
        return redirect()->back()->with('success', 'Delete Successfully !');
    }
}
