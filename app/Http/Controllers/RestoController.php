<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use Session;

class RestoController extends Controller
{
    function index() {
        return view('home');
    }

    function list() {
        $data = Restaurant::all();
        return view('list', ["data"=>$data]);
    }

    //Get all restaurants
    public function getRestos(){
        $restos = Restaurant::all();
        
        return response()->json([
            "status" => "Success",
            "results" => $restos
        ], 200);
    }

    public function getResto($id){
        $resto = Restaurant::find($id);
        
        return response()->json([
            "status" => "Success",
            "results" => $resto
        ], 200);
    }

    function addResto(Request $req) {
        $resto = new Restaurant;
        $resto->name = $req->input('name') ;
        $resto->description = $req->input('description') ;
        $resto->location = $req->input('location') ;
        $resto->save();

        $req->session()->flash('status', 'Restaurant added successfully');
        return redirect('list');
    }

    function deleteResto($id){
        Restaurant::find($id)->delete();
        Session::flash('status', 'Restaurant has been deleted successfully');
        return redirect('list');
    }

    function editResto($id){
        $data = Restaurant::find($id);
        return view('edit_resto', ['data'=>$data]);
    }

    function updateResto(Request $req) {
        $resto = Restaurant::find($req->id);
        $resto->name = $req->input('name') ;
        $resto->description = $req->input('description') ;
        $resto->location = $req->input('location') ;
        $resto->save();

        $req->session()->flash('status', 'Restaurant updated successfully');
        return redirect('list');
    }

}
