<?php

namespace App\Http\Controllers;

use App\Http\Requests\LieuxFormRequest;
use App\Models\Evenement;
use App\Models\Lieux;
use App\Models\Reservation_Event;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class AdminController extends Controller
{
    public function __construct()
    {
       // $this->authorize('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {

        return view('admin.home');
    }


    public function index()
    {

       return view('admin.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('admin.lieux');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LieuxFormRequest  $request, Lieux $lieux)
    {
        //
        $this->authorize('admin');

        // $lieux = Lieux::create(Arr::except($request->validated(), 'image'));
        try {
            /** @var Lieux $lieux */
        $lieux = Lieux::create(Arr::except($request->validated(), 'image'));

        if($file = $request->file('image')) {
                    $lieux->saveFile($file);
            }

        } catch(Exception $e) {
            dd($e->getMessage());
        }
        //     if($file = $request->file('image')) {
        //         $lieux->saveFile($file);
        //     }
         return redirect()->route('lieux')->with('success', 'Lieux Ajoute');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Lieux $lieux)
    {
        // $lieux = Lieux::all();
        return view('admin.lieuxcreate',[
            'lieux'=>$lieux
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lieux $lieux)
    {

    $lieux->nom_lieux=$request->input('nom_lieux');
    $lieux->ville=$request->input('ville');
    $lieux->image=$request->input('image');


    $lieux->save();

    return redirect()->route('lieux');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reservation_Event::destroy($id);
        return redirect()->route('participe');
    }
public function destroylieux($id)
{
   Lieux::destroy($id);
   return redirect()->route('lieux');

}

    public function listercompte()
    {


        $users = User::where('roles', 'PROMO')->get();
        return view('admin.compte', [
            'users'=>$users
        ]);
    }
    public function listerlieux()
     {
        $lieuxes = Lieux::all();
         return view('admin.lieux',[

            'lieuxes'=>$lieuxes

        ]);
     }
  public function listerevent()
  {
    $evenements = Evenement::all();
    $lieuxes = Lieux::all();
    $users = User::all();
    return view('admin.evenement',[
        'evenements'=>$evenements,
        'lieuxes'=>$lieuxes,
        'users'=>$users
    ]);
  }
  public function participeevent()
  {
    $reservation_events = Reservation_Event::all();
    $evenements = Evenement::all();

    return view('admin.participation',[
        'reservation_events'=>$reservation_events,
        'evenements'=>$evenements,

    ]);
  }
}
