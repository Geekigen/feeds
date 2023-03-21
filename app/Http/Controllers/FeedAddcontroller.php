<?php

namespace App\Http\Controllers;

use App\Models\animal;
use App\Models\FeedModel;
use Illuminate\Http\Request;

class FeedAddcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feeds = FeedModel::all();
        return view('feeds.index',compact('feeds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {$animal = animal::all();
        return view('feeds.create', compact('animal'));
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
                'type' => 'string|in:cerials & seeds,dried fibres,cerial byproducts,
                oil meals,animal protein,fats,miscalenous,minerals,synthetic amino',
                'name' => 'string',
                'me' => 'max:10000',
                'de' => 'max:10000',
                'cp' => 'max:10000',
                'dcp' => 'max:10000',
                'lys' => 'max:10000',
                'm+c' => 'max:10000',
                'meth' => 'max:10000',
                'fat' => 'max:10000',
                'fibre' => 'max:10000',
                'ca' => 'max:10000',
                'p' => 'max:10000',
                'cost' => 'string'
            ]);
        
            $feed = new FeedModel();
            $feed->type = $validatedData['type'];
            $feed->name = $validatedData['name'];
            $feed->me = $validatedData['me'];
            $feed->de = $validatedData['de'];
            $feed->cp = $validatedData['cp'];
            $feed->dcp = $validatedData['dcp'];
            $feed->lys = $validatedData['lys'];
            $feed->m= $validatedData['m+c'];
            $feed->meth = $validatedData['meth'];
            $feed->fat = $validatedData['fat'];
            $feed->fibre = $validatedData['fibre'];
            $feed->ca = $validatedData['ca'];
            $feed->p = $validatedData['p'];
            $feed->cost = $validatedData['cost'];
            $feed->save();
            return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $feed = FeedModel::find($id);
    return view('feeds.show', compact('feed'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $animal = animal::all();
         $feed= FeedModel::find($id);
        return view('feeds.edit', compact('feed','animal'));
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
            'type' => 'string|in:cerials & seeds,dried fibres,cerial byproducts,
            oil meals,animal protein,fats,miscalenous,minerals,synthetic amino',
            'name' => 'string',
            'me' => 'max:10000',
            'de' => 'max:10000',
            'cp' => 'max:10000',
            'dcp' => 'max:10000',
            'lys' => 'max:10000',
            'm+c' => 'max:10000',
            'meth' =>  'max:10000',
            'fat' => 'max:10000',
            'fibre' => 'max:10000',
            'ca' => 'max:10000',
            'p' => 'max:10000',
            'cost' => 'string'
        ]);
    
        $feed = FeedModel::find($id);
        $feed->type = $validatedData['type'];
        $feed->name = $validatedData['name'];
        $feed->me = $validatedData['me'];
        $feed->de = $validatedData['de'];
        $feed->cp = $validatedData['cp'];
        $feed->dcp = $validatedData['dcp'];
        $feed->lys = $validatedData['lys'];
        $feed->m= $validatedData['m+c'];
        $feed->meth = $validatedData['meth'];
        $feed->fat = $validatedData['fat'];
        $feed->fibre = $validatedData['fibre'];
        $feed->ca = $validatedData['ca'];
        $feed->p = $validatedData['p'];
        $feed->cost = $validatedData['cost'];
        $feed->save();
return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FeedModel::destroy($id);
        return redirect()->route('feed.index');

    }
}
