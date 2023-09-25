<?php

namespace App\Http\Controllers;

use App\Models\ordens;
use Illuminate\Http\Request;
use app\Models\User;

class OsController extends Controller
{
    public function index (){

        $search = request('search');

        if($search){
            $ordens = ordens::where([
                ['title', 'like', '%'.$search.'%']
            ])->get();

        } else {
            $ordens = ordens::all();
        }
        
        
        return view('welcome', ['ordens'=> $ordens, 'search' =>$search]);
    }

    public function create(){
        return view('ordens.create');
    }

    public function store(Request $request){
        $ordens = new Ordens;
        $ordens ->title = $request->title;
        $ordens ->city = $request->city;
        $ordens ->private = $request->private;
        $ordens ->description = $request->description;

       $user = auth()->user();
       $ordens->user_id = $user->id;

        $ordens->save();

        return redirect('/')->with('msg', 'Ordem de serviço criada com sucesso!');

    }

    public function show($id){
        $user = new \App\Models\User;

        $ordens = ordens::findOrFail($id);

        $ordensOwnner = User::where('id', $ordens->user_id)->first()->toArray();

        return view('ordens.show',['ordens'=> $ordens, 'ordensOwnner' => $ordensOwnner]);


    }

    public function dashboard(){
        $user = auth()->user();
        $ordens = $user->ordens;

        return view('ordens.dashboard', ['ordens' => $ordens]);
    }

    public function destroy($id){
      
        ordens::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'O.S excluída com sucesso!');
    }

    public function edit($id){
      
        $ordens = ordens::findOrFail($id);

        return view('ordens.edit', ['ordens' => $ordens]);
    }
    public function update(Request $request){
        
        ordens::findOrFail($request->id)->update($request ->all());
        
        return redirect('/dashboard')->with('msg', 'O.S editado com sucesso!');
        
    }
    
}

