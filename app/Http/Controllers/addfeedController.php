<?php

namespace App\Http\Controllers;

use App\Models\FeedModel;
use App\Models\formula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class addfeedController extends Controller
{
    public function formula()
    {  $feeds = FeedModel::all();
      return view('formulate.tray' ,compact('feeds'));
    
        
    }
    public function addTotray($id)
    {
        $ingredient = FeedModel::findOrFail($id);

        $tray = session()->get('tray', []);

        if(isset($tray[$id])) {
            $tray[$id]['quantity']++;
        } else {
            // $feed->type = $validatedData['type'];
            // $feed->name = $validatedData['name'];
            // $feed->me = $validatedData['me'];
            // $feed->de = $validatedData['de'];
            // $feed->cp = $validatedData['cp'];
            // $feed->dcp = $validatedData['dcp'];
            // $feed->lys = $validatedData['lys'];
            // $feed->m= $validatedData['m+c'];
            // $feed->meth = $validatedData['meth'];
            // $feed->fat = $validatedData['fat'];
            // $feed->fibre = $validatedData['fibre'];
            // $feed->ca = $validatedData['ca'];
            // $feed->p = $validatedData['p'];
            // $feed->cost = $validatedData['cost'];
            $tray[$id]= [
                "name" => $ingredient->name,
                "id"=>$ingredient->id,
                "type"=>$ingredient->type,
                "quantity" => 1,
                "cost" => $ingredient->cost,
                "p" => $ingredient->p,
                "ca" => $ingredient->ca,
                "fibre" => $ingredient->fibre,
                "fat" => $ingredient->fat,
                "meth" => $ingredient->meth,
                "m" => $ingredient->m,
                "lys" => $ingredient->lys,
                "dcp" => $ingredient->dcp,
                "cp" => $ingredient->cp,
                "de" => $ingredient->de,
                "me" => $ingredient->me,
            ];
        }

        session()->put('tray', $tray);
        return Redirect::back();
    }

    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $tray = session()->get('tray');
            $tray[$request->id]["quantity"] = $request->quantity;
            session()->put('tray', $tray);
            session()->flash('success', __('Your tray has been  updated successfully'));
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $tray = session()->get('tray');
            if(isset($tray[$request->id])) {
                unset($tray[$request->id]);
                session()->put('tray', $tray);
            }
            session()->flash('success', __('ingredient  removed successfully'));
        }
    }

    public function order(Request $request)
{
    $this->validate($request, [
        'feedname'=>'Required|string',
        'feedcomment' =>'string|max:255'
        ]);

    $data = $request->session()->all();
    // $data['cart'] as $cart) 
$formula= new formula();
$formula->content= json_encode($data['tray']);
$formula->name=$request->input('feedname');
$formula->comment=$request->input('feedcomment');
$formula->save();
$request->session()->forget('tray');
return redirect('/')->with('status',__('Formulation completed'));
}
}

