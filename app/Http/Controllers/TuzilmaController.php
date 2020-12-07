<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Dekan;
Use App\Models\Zamdekan;

class TuzilmaController extends Controller
{
  public function index($id, $olam)
  {
    $zamInfo = Zamdekan::All();
    $dekanInfo = Dekan::All();
    return view('tuzilma.fakultet', compact('dekanInfo','zamInfo', 'id', 'olam'));
  }

}
