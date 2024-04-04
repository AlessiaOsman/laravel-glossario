<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use App\Models\Word;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function __invoke(Request $request)
   {
      $search = $request->query('search');
      if (!$search) {
         $words = Word::all();
      } else {
         $words = Word::where('title', 'LIKE', "$search%")->get();
      }

      return view('guest.home', compact('words', 'search'));
   }
}
