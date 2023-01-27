<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Contracts\Service\Attribute\Required;

class PersonneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'hasError' => false,
            'message' => "Liste des personnes",
            'data' => Personne::all()
        ]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//Autre methode de validation avec une variable
        $validator = Validator::make($request->all(), [
            'nom' => "required",
            'prenom' => "required",
            'email' => "required | unique:personnes",
            'active' => "required"

        ]);
//Verification de la validation
        if ($validator->fails()){
            return response()->json([
                'hasError' => true,
                'message' => "Une erreur est survenue lors du traitement",
                'data' => $validator->errors()->all()

            ]);

        }

        $personne = Personne::create([//Enregistrement
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'email' => $request->get('email'),
            'active' => $request->get('active')


        ]);
        return response()->json([//reponse
            'hasError' => false,
            'message' => "Personne ajouter avec succes",
            'data' => $personne
        ]);
        //
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
