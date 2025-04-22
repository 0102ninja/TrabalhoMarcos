<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\animaisModel;
use Illuminate\Http\Request;

class ControllerShop extends Controller
{   
    public readonly animaisModel $animais;
    
    public function __construct(){
        $this->animais = new animaisModel();

    }


    public function index(){
    $animais_=$this->animais->all();
    return view('animais',['animais_tb'=>$animais_]);

    // return view('animais');
    }

    public function create(){

    return view('animaisCreate');

    }

    public function store (Request $request) {

        $create=$this->animais->create([
            'tutor_id'=>$request->input('tutor_id'),
            'Nome'=>$request->input('Nome'),
            'Tipo_animal'=>$request->input(key: 'Tipo_animal'),
            'Tipo_atendimento'=>$request->input('Tipo_atendimento'),
            'Preco'=>$request->input('Preco'),
            'Data_atendimento'=>$request->input('Data_atendimento'),
            'Tutor'=>$request->input('Tutor')

        ]);

        if($create){
            return redirect()->route('petshop.index');

         }else return redirect()->back()->with('mensage','Erro');
        
    }


    public function edit(animaisModel $animal){

        return view('animaisEdit',['animal'=>$animal]);

    }

    public function update(Request $request, string $id){
    //    $updated = $this->carros->where('id',$id)->update($request->all());
        $updated = $this->animais->where(column: 'id', operator: $id)->update($request->except(['_token', '_method']));
        if ($updated) {
            //return redirect()->r  oute('carros.index');
            return redirect()->back()->with('message', 'Atualizado com sucesso');
        } else return redirect()->back()->with('message', 'Erro');
    }

    public function show(animaisModel $animal)
    {
        return view('animaisShow', ['animal' => $animal]);
    }


    public function destroy(string $id)
    {
        //  var_dump('delete');
        $this->animais->where('id', $id)->delete();
        return redirect()->route('petshop.index');
    }

}

    




