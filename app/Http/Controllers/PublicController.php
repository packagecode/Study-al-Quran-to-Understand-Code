<?php

namespace App\Http\Controllers;

use App\Contact;
use App\LiveClass;
use App\Publication;
use App\QuranClass;
use App\ImportantLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PublicController extends Controller
{

    public function index()
    {
        $data['quranClass'] = QuranClass::orderBy('priority')->get();
        return View::make('public.index', $data);
    }

    public function about()
    {
        return redirect('/');
    }

    public function contact(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'name' => 'required|string',
                'phone' => 'required|string',
                'email' => 'required|email',
                'message' => 'required|string'
            ]);
            $data = $request->all();
            $data['ip'] = $request->ip();
            Contact::create($data);
            return redirect()->back()->with('success', 'Message Sent Successfully !');
        }
        return View::make('public.contact');
    }

    public function registation(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'name' => 'required|string',
                'phone' => 'required|string',
                'email' => 'required|email',
                'message' => 'required|string'
            ]);
            $data = $request->all();
            $data['ip'] = $request->ip();
            Contact::create($data);
            return redirect()->back()->with('success', 'Message Sent Successfully !');
        }
        return View::make('public.registation');
    }

    public function publication()
    {
        $data['results'] = Publication::orderBy('priority')->get();
        return View::make('public.publication', $data);
    }

    public function gallery()
    {
        return View::make('public.gallery');
    }

    public function liveclass()
    {
        $data['videos'] = LiveClass::whereIn('type', explode(',', '1,3'))->get();
        return View::make('public.liveclass', $data);
    }

    public function importantIink()
    {
        $data['impLinks'] = ImportantLink::orderBy('priority')->get();
        return View::make('public.importantlink', $data);
    }
}
