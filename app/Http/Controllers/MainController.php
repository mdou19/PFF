<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use App\Models\Lieux;
use App\Models\Reservation_Event;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function list()
    {
        return view('evenement',[
            'evenements'=> Evenement::all(),
        ]);
    }

    public function onelist($id)
    {
        $evenement=Evenement::where('id',$id)->firstOrfail();
        return view('evenements',[
            'evenement'=> $evenement
        ]);
    }

    public function listlieux()
    {
        $lieuxes=Lieux::all();
        return view('lieux',[
            'lieuxes'=>$lieuxes
    ]);
    }

    public function contact()
    {
        return view('contact');
    }
    }



// public function evenement()
// {
//     $data['evenement'] = Evenement::orderBy('id','desc');
//     return view('evenement', $data);
// }

