<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailTestController extends Controller
{

  public function validationEmail(Request $request)
  {
    $validated = $request->validate([
      'email' => 'email:rfc,dns'
    ]);

    dd($validated);

  }

}
