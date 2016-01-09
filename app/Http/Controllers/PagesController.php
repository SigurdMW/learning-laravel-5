<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /*
     * HOME PAGE
     */
    public function getIndex()
    {
        return view('pages.home');
    }

    /*
     * CONTACT PAGE
     */
    public function getContact()
    {
        return view('pages.contact');
    }
    
    /*
     * ABOUT PAGE
     */
    public function getAbout()
    {
        $name = "John";
        $isUserRegistred = false;
        $users = array("John","Alf","Bernad");
        return view('pages.about')
            ->with('name', $name)
            ->with('isUserRegistred', $isUserRegistred)
            ->with('users',$users);
    }
}
