<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EventsController extends Controller
{
  /**
   * Display the password reset view.
   */
  public function index(Request $request): View
  {
    return view('auth.dashboard.eventos', ['request' => $request]);
  }
}
