<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
  public function privacyPolicy()
  {
    return view('privacy_policy');
  }
  public function lavoraConNoi()
  {
    return view('lavora_con_noi');
  }
}
