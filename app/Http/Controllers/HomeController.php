<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * @return View
     */
    public function __invoke()
    {
        return view('pages.home.index');
    }
}
