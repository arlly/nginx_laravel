<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * @Controller(prefix="annotation")
 */
class AnnotationController extends Controller
{
    /**
     * @Get("/", as="annotation.index")
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('home');
    }

    /**
     * @Get("/welcome", as="annotation.welcome")
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function welcome()
    {
        return view('welcome');
    }
}
