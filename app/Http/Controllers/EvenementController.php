<?php

namespace App\Http\Controllers;

use App\Http\Requests\EvenementFormRequest;
use Illuminate\Http\Request;
use App\Models\Evenement;
use App\Models\Reservation_Event;
use App\Models\Lieux;
use App\Models\User;
use Exception;
use Illuminate\Support\Arr;

class EvenementController extends Controller
{
    public function index()
    {
        $evenements = Evenement::where('user_id', auth()->id())->get();

        return view('evenements.index', compact('evenements'));
    }

    public function show(Evenement $evenement)
    {
        return view('evenements.show', compact('evenement'));
    }

    public function create()
    {
        $lieux = Lieux::all();
        $users = User::all();

        return view('evenements.create', compact('lieux', 'users'));
    }

    public function store(EvenementFormRequest $request)
    {
        try {
            /** @var Evenement $evenement */
            $evenement = Evenement::create(Arr::except($request->validated(), 'images'));

            if($file = $request->file('images')) {
                $evenement->saveFile($file);
            }

        } catch(Exception $e) {
            dd($e->getMessage());
        }


        return redirect()->route('evenements.index')->with('success', 'Reservation envoyee');
    }

     public function saveResevation(Request $request)
{
    $reservation = new Reservation_Event;
    $reservation->prenom = $request->prenom;
    $reservation->nom = $request->nom;
    $reservation->email = $request->email;
    $reservation->telephone = $request->telephone;
    $reservation->id_evenement = $request->id_evenement;
    $reservation->save();
    return redirect()->back()->with('success','Reservation envoyee');
}


public function reserver()
{
    // $data['evenements'] = Evenement::orderBy('id','desc');
    return view('reservation',[
        'evenements'=> Evenement::all(),
        ]);
}
public function edit(Evenement $evenement)
{
    $lieux = Lieux::all();

    return view('evenements.edit', compact('evenement', 'lieux'));


}
public function update(Request $request, Evenement $evenement)
{
    $evenement->nom_evenement=$request->input('nom_evenement');
    $evenement->type_evenement=$request->input('type_evenement');
    $evenement->date_evenement=$request->input('date_evenement');
    $evenement->descriptions=$request->input('descriptions');
    $evenement->images=$request->input('images');
    $evenement->id_lieux=$request->input('id_lieux');


    $evenement->save();

    return redirect()->route('evenements.index');

}

public function destroy(Evenement $evenement)
{
    $evenement->delete();

    return redirect()->route('evenements.index');

}
}


