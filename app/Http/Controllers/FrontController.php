<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Products;

class FrontController extends Controller
{
    public static function getIndex()
    {
        $data['products'] = Products::getAll();

        return view('front.index',$data);
    }
}