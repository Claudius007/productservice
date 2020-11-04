<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //index method. 
    public function index()
    {
        return ('This is the index ');
    }

    public function store()
    {
        return ('This is store function');
    }
    public function update()
    {
        return ('This is update function');
    }

}
