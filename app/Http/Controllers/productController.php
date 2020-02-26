<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
  //index
  function index(){
  //  echo"hello";
  return view('product/index');
  }


    //END
}
