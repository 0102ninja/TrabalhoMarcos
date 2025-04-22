<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\tutorModel;
use Illuminate\Http\Request;

class ControllerTutor extends Controller
{   
    public readonly tutorModel $tutor;
    
    public function __construct(){
        $this->tutor = new tutorModel();

    }


    public function index(){
    $tutor_=$this->tutor->all();
    return view('tutores',['tutor_tb'=>$tutor_]);

    // return view('animais');
    }

    public function create(){

    return view('tutoresCreate');

    }

    public function store (Request $request) {

        $create=$this->tutor->create([
            'Nome'=>$request->input(key: 'Nome'),
            'Idade'=>$request->input('Idade'),
            'Telefone'=>$request->input('Telefone'),
            'Email'=>$request->input('Email')

        ]);

        if($create){
            return redirect()->route('tutores.index');

         }else return redirect()->back()->with('mensage','Erro');
        
    }


   public function edit(tutorModel $tutor){

        return view('tutoresEdit',['tutor'=>$tutor]);

    }
 
    public function update(Request $request, string $id){
    //    $updated = $this->carros->where('id',$id)->update($request->all());
        $updated = $this->tutor->where('id', $id)->update($request->except(['_token', '_method']));
        if ($updated) {
            //return redirect()->route('carros.index');
            return redirect()->back()->with('message', 'Atualizado com sucesso');
        } else return redirect()->back()->with('message', 'Erro');
    }

    public function show(tutorModel $tutor)
    {
        return view('tutoresShow', ['tutor' => $tutor]);
    }


    public function destroy(string $id)
    {
        //  var_dump('delete');
        $this->tutor->where('id', $id)->delete();
        return redirect()->route('tutores.index');
    }

}

    




