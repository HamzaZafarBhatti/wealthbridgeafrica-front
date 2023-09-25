<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index()
    {
        return view('frontend.index');
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function howitworks()
    {
        return view('frontend.howitworks');
    }
    public function investment()
    {
        return view('frontend.investment');
    }
    public function certification()
    {
        return view('frontend.certification');
    }
    public function paymentproofs()
    {
        return view('frontend.payment-proofs');
    }
    public function terms()
    {
        return view('frontend.terms');
    }
    public function privacy()
    {
        return view('frontend.privacy');
    }
    public function cookies()
    {
        return view('frontend.cookies');
    }
    public function contactus()
    {
        return view('frontend.contactus');
    }
}
