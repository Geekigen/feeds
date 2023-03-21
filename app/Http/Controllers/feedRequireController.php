<?php

namespace App\Http\Controllers;

use App\Models\animal;
use App\Models\category;
use App\Models\requirement;
use Illuminate\Http\Request;

class feedRequireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requirements = requirement::all();
        return view('requirements.index',compact('requirements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $animal = animal::all();
        $cat=category::all();
        return view('requirements.create', compact('animal','cat'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $validatedData = $request->validate([
                'animal'=>'max:10000',
                'category'=>'string',
                'name' => 'string',
                'memax' => 'max:10000',
                'memin' => 'max:10000',
                'de' => 'max:10000',
                'cpmin' => 'max:10000',
                'cpmax' => 'max:10000',
                'dcp' => 'max:10000',
                'lys' => 'max:10000',
                'm+c' => 'max:10000',
                'meth' => 'string',
                'fat' => 'max:10000',
                'fibre' => 'max:10000',
                'camin' => 'max:10000',
                'pmin' => 'max:10000',
                'camax' => 'max:10000',
                'pmax' => 'max:10000',
            ]);
        
            $feed = new requirement();
            $feed->animal= $validatedData['animal'];
            $feed->category = $validatedData['category'];
            $feed->me_max = $validatedData['memax'];
            $feed->me_min = $validatedData['memin'];
            $feed->de = $validatedData['de'];
            $feed->cp_max = $validatedData['cpmax'];
            $feed->cp_min = $validatedData['cpmin'];
            $feed->dcp = $validatedData['dcp'];
            $feed->lys = $validatedData['lys'];
            $feed->m= $validatedData['m+c'];
            $feed->meth = $validatedData['meth'];
            $feed->fat = $validatedData['fat'];
            $feed->fibre = $validatedData['fibre'];
            $feed->ca_max = $validatedData['camax'];
            $feed->ca_min = $validatedData['camin'];
            $feed->p_max = $validatedData['pmax'];
            $feed->p_min = $validatedData['pmin'];
            $feed->save();
            return redirect('/formulate')->with('status','Requirement added ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $requirement = requirement::find($id);
    return view('requirements.show', compact('requirement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  $animal = animal::all();
         $feed= requirement::find($id);
        return view('requirements.edit', compact('feed','animal'));
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
        $validatedData = $request->validate([
            'animal'=>'string',
            'category'=>'string',
            'name' => 'string',
            'memax' => 'max:10000',
            'memin' => 'max:10000',
            'de' => 'max:10000',
            'cpmin' => 'max:10000',
            'cpmax' => 'max:10000',
            'dcp' => 'max:10000',
            'lys' => 'max:10000',
            'm+c' => 'max:10000',
            'meth' => 'string',
            'fat' => 'max:10000',
            'fibre' => 'max:10000',
            'camin' => 'max:10000',
            'pmin' => 'max:10000',
            'camax' => 'max:10000',
            'pmax' => 'max:10000',
        ]);
    
        $feed = requirement::find($id);
        $feed->animal= $validatedData['animal'];
            $feed->category = $validatedData['category'];
            $feed->me_max = $validatedData['memax'];
            $feed->me_min = $validatedData['memin'];
            $feed->de = $validatedData['de'];
            $feed->cp_max = $validatedData['cpmax'];
            $feed->cp_min = $validatedData['cpmin'];
            $feed->dcp = $validatedData['dcp'];
            $feed->lys = $validatedData['lys'];
            $feed->m= $validatedData['m+c'];
            $feed->meth = $validatedData['meth'];
            $feed->fat = $validatedData['fat'];
            $feed->fibre = $validatedData['fibre'];
            $feed->ca_max = $validatedData['camax'];
            $feed->ca_min = $validatedData['camin'];
            $feed->p_max = $validatedData['pmax'];
            $feed->p_min = $validatedData['pmin'];
            $feed->save();
            return route('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        requirement::destroy($id);
        return redirect()->route('req.index');

    }
}

