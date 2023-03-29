<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationEvenementFormRequest;
use App\Models\Evenement;
use App\Models\Reservation_Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationEvenementController extends Controller
{
    public function create()
    {
        return view('evenements.reserver');
    }

    public function store(ReservationEvenementFormRequest $request, Evenement $evenement)
    {
        Reservation_Event::create([
            'id_evenement'=> $evenement->id,
            'prenom'      => $request->prenom,
            'nom'         => $request->nom,
            'email'       => $request->email,
            'telephone'   => $request->telephone,
        ]);

        return back()->withSuccess('Réservation envoyée.');
    }
}
