<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;

class listaController extends Controller
{
    public function index(){
        return Inertia::render('Lista');
    }

    public function store(Request $request){

        //dd($request->all());
        $palavra = PHP_EOL.$request->palavra;
        file_put_contents('palavras/a.txt', $palavra, FILE_APPEND);
        //abre ou cria o arquivo a.txt, então escreve a $palavra nele, o comando FILE_APPEND garante que não vai sobreescrever o arquivo.
    
        /*
        //Código para ler arquivo
        $file = file('palavras/a.txt',FILE_IGNORE_NEW_LINES);
        
        dd($file);*/

        
    }
}
