<?php

namespace App\Http\Controllers;


class PromoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('promo');

        return view('promo.index');
    }
}
