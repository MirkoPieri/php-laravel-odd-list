<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function getNum() {
      $numDisp = [];

      for ($i=10; $i < 100 ; $i++) {
        if ($i % 2 != 0) {
          $numDisp[] = $i;
        }
      }
      return view('list', compact('numDisp'));
    }
}
