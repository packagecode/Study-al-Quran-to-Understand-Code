<?php

namespace App\Http\Controllers;

use App\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class RegistrationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except'=>['create','store']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['results'] = Registration::orderByDesc('id')->get();
        $data['pageTitle'] = 'Registration List';
        return View::make('admin.registration.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('public.registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'classname' => 'required|string',
            'name' => 'required|string',
            'fathername' => 'nullable|string',
            'education' => 'nullable|string',
            'professiondesignation' => 'nullable|string',
            'presentaddress' => 'nullable|string',
            'permanentaddress' => 'nullable|string',
            'telephonemobile' => 'nullable|string',
            'email' => 'nullable|string',
            'yearofjoin' => 'nullable|string',
            'photo ' => 'nullable|image'
        ]);

        $data = $request->all();
       
        if ($request->hasFile('photo')) {
            $file = fileUpload($data['photo'], 'P');
            $data['photo'] = $file;

        }

        Registration::create($data);
        return redirect()->back()->with('success', 'Added Successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(Registration $registration)
    {
        //

         $data['registration'] = $registration;
        $data['pageTitle'] = 'Registration Show';
        return View::make('admin.registration.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(Registration $registration)
    {
        //

        $data['registration'] = $registration;
        $data['pageTitle'] = 'Registration Edit';
        return View::make('admin.registration.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registration $registration)
    {
        //

        $this->validate($request, [
            'classname' => 'required|string',
            'name' => 'required|string',
            'fathername' => 'nullable|string',
            'education' => 'nullable|string',
            'professiondesignation' => 'nullable|string',
            'presentaddress' => 'nullable|string',
            'permanentaddress' => 'nullable|string',
            'telephonemobile' => 'nullable|string',
            'email' => 'nullable|string',
            'yearofjoin' => 'nullable|string',
            'photo ' => 'nullable|image'
        ]);

        $data = $request->all();
       
        if ($request->hasFile('photo')) {
            $file = fileUpload($data['photo'], 'P');
            $data['photo'] = $file;

        }

        $registration->fill($data)->save();
        return redirect()->route('registration.index')->with('success', 'Update Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registration $registration)
    {
        //

        $registration->delete();
        return redirect()->route('registration.index')->with('success', 'Delete Successfully !');
    }
}
