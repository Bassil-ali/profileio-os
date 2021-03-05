<?php

namespace App\Http\Controllers;
use App\About;
use App\Contact;
use App\Footer;
use App\Header;
use App\Ourwork;
use App\Service;

use Illuminate\Http\Request;

class homePageController extends Controller
{
    public function index() {

       $abouts =  About::get();
       $contacts =  Contact::get();
       $footers =  Footer::get();
      // dd($footers);
       $headers =  Header::get();
       $ourworks =  Ourwork::get();
       $services =  Service::get();

       return view('homepage-2', compact('abouts','contacts','footers','headers','ourworks','services'));


    }
}
