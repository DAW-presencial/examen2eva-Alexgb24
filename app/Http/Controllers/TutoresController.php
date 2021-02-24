<?php

namespace App\Http\Controllers;

use App\Http\Requests\TutoresRequest;
use Illuminate\Http\Request;

class TutoresController extends Controller
{
    public function index() {

        return view("tutor");

    }

    public function store(TutoresRequest $request) {

        dd($request);

    }
}
