<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    //
    public function index()
    {
        return view('frontend.index');
    }
    public function about()
    {
        $page = DB::table('pages')->where('type', 'aboutus')->first();
        return view('frontend.about', compact('page'));
    }
    public function howitworks()
    {
        $page = DB::table('pages')->where('type', 'howitworks')->first();
        return view('frontend.howitworks', compact('page'));
    }
    public function investment()
    {
        $page = DB::table('pages')->where('type', 'arbitrage_investment')->first();
        return view('frontend.investment', compact('page'));
    }
    public function certification()
    {
        $page = DB::table('pages')->where('type', 'certification')->first();
        return view('frontend.certification', compact('page'));
    }
    public function paymentproofs()
    {
        // $proofs = DB::table('payment_proofs as pp')
        //     ->select('pp.id', 'pp.image', 'pp.caption', 'u.name', 'u.trading_desk_number')
        //     ->join('users as u', 'pp.user_id', '=', 'u.id')
        //     ->where('status', 1)->latest('id')->get();
        // return $proofs;
        return view('frontend.payment-proofs');
    }
    public function terms()
    {
        $page = DB::table('pages')->where('type', 'terms')->first();
        return view('frontend.terms', compact('page'));
    }
    public function privacy()
    {
        $page = DB::table('pages')->where('type', 'privacy')->first();
        return view('frontend.privacy', compact('page'));
    }
    public function cookies()
    {
        $page = DB::table('pages')->where('type', 'cookies')->first();
        return view('frontend.cookies', compact('page'));
    }
    public function contactus()
    {
        return view('frontend.contactus');
    }
}
