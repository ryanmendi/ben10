<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\tbWinx;

class TbWinxController extends Controller
{
    public function MostrarHome(){
        return view('home');
    }

    public function MostrarCadastroWinx(){
        return view('cadastrowinx');
    }

    public function CadastrarWinx(Request $request){
        $registros = $request->validate([
            'nomeWinx'=>'string|required',
            'elementoWinx'=>'string|required',
            'namoradoWinx'=>'string|required',
            'planetaWinx'=>'string|required'
        ]);

        tbWinx::create($registros);
        return Redirect::route('home-winx');
    }

    public function Destroy(tbWinx $id){
        $id->delete();
        return Redirect::route('home-winx');
    }

    public function Update(tbWinx $id, Request $request){
        $registros = $request->validate([
            'nomeWinx'=>'string|required',
            'elementoWinx'=>'string|required',
            'namoradoWinx'=>'string|required',
            'planetaWinx'=>'string|required'
        ]);
        $id->fill($registros);
        $id->save();

        return Redirect::route('home-winx');
    }

    public function MostrarWinxCodigo(tbWinx $id){
        return view("alterawinx",['registrosWinx'=>$id]);
    }

    public function MostrarWinxNome(Request $request){
        $registros = tbWinx::query();
        $registros->when($request->nomeWinx,function($query, $valor){
            $query->where('nomeWinx', 'like', '%'.$valor.'%');
        });
        $todosRegistros = $registros->get();
        return view('listawinx',['registrosWinx'=>$todosRegistros]);
    }
}
