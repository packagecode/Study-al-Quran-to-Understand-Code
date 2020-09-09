<?php

namespace App\Http\Controllers;

use App\ImportantLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class ImportantLinkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      $data['results'] = ImportantLink::all();
      $data['pageTitle'] = 'ImportantLink List';
      return View::make('admin.implink.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return View::make('admin.implink.create')->with('pageTitle', 'ImportantLink Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
          'title' => 'required|string',
          'url' => 'required|string|url',
          'priority' => 'required|numeric'
      ]);
      $data = $request->all();
      ImportantLink::create($data);
      return redirect()->back()->with('success', 'Added Successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ImportantLink  $importantLink
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ImportantLink  $importantLink
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $impLink = ImportantLink::findOrFail($id);
      if (is_null($impLink))
          return redirect()->back();
      $data['impLink'] = $impLink;
      $data['pageTitle'] = 'ImportantLink Edit';
      return View::make('admin.impLink.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ImportantLink  $importantLink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
          'title' => 'required|string',
          'url' => 'required|string|url',
          'priority' => 'required|numeric'
      ]);
      $data = $request->all();
      $impLink = ImportantLink::findOrFail($id);
      if (is_null($impLink))
          return redirect()->back();
      $impLink->fill($data)->save();
      return redirect()->back()->with('success', 'Update Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ImportantLink  $importantLink
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $impLink = ImportantLink::findOrFail($id);
      if (is_null($impLink))
          return redirect()->back();
      $impLink->delete();
      return redirect()->back()->with('success', 'Delete Successfully !');
    }
}
