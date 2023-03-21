<?php

namespace App\Http\Controllers;

use App\Models\animal;
use App\Models\category;
use App\Models\FeedModel;
use App\Models\requirement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Phpml\Math\LinearAlgebra\Matrix;
use Phpml\Math\LinearProgramming\Constraint;
use Phpml\Math\LinearProgramming\Optimizer\Simplex;
use Phpml\Math\Matrix\MatrixFactory; // import MatrixFactory  
use PhpParser\Node\Stmt\Return_;

class pagecontroller extends Controller
{
    public function type(Request $request){
        $empty="No category requirement found";
        $searched=$request->input('search');
        $exists = DB::table('requirements')->exists();
        
if ($exists) {
      $re = requirement::where('category','LIKE','%'.$searched.'%')->get();
       foreach ($re as $re) {
          if (isset($re->me_min)) {
            $statement="The Machine selected the following";
        $ingredient=FeedModel::where('me','>=',$re->me_min)
  
  ->get(); 
  return view('formulate.suggested',compact('ingredient','statement'));
          } else {
            $statement="The machine did  not find any records of the search please select prefered ingredients manually";
            $ingredient=FeedModel::all();
            return view('formulate.suggested',compact('ingredient','statement'));
          }
} }
else {
   return redirect('/formulate')->with('status','Add Requirements first to the database');
}
      
          
        
                 
               
       }

          
         
    
    // redirects
    public function ruminant(){
        $animal = category::all();
        return view('formulate.ruminants', compact('animal'));
       
    }
    public function poultry(){

        $animal = category::all();
        return view('formulate.ruminants', compact('animal'));
       
     
  }
  public function pig(){

    $animal = category::all();
    return view('formulate.ruminants', compact('animal'));
   
}
public function fish(){
    $animal = category::all();
    return view('formulate.ruminants', compact('animal'));
   
}
}