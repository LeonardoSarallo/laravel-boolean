<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
  public function privacyPolicy()
  {
    return view('privacyPolicy');
  }
  public function lavoraConNoi()
  {
    return view('lavoraConNoi');
  }
}
