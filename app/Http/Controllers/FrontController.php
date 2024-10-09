<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index()
    {
        return view('main.home');
    }
public function contacts()
{
    return view('main.contacts');
}
public function news()
{
    return view('main.news');
}public function about()
{
    return view('main.about');
}public function faq()
{
    return view('main.faq');
}public function work()
{
    return view('main.how_it_work');
}

public function staking()
{
    return view('main.staking');
}
public function tasks()
{
    return view('main.tasks');
}
public function partners()
{
    return view('main.partners');
}
public function accelerators()
{
    return view('main.accelerators');
}




}
