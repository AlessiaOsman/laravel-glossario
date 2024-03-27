<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use App\Models\Word;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function __invoke()
   {
   $words = Word::all();
    return view('guest.home', compact('words'));
   }
}
