<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvasController extends Controller
{
    public function criarProva(){
    	return view('criarProva');
    }

    public function editProva(){
    	return view('editProva');
    }

    public function correcaoProva(){
    	return view('correcaoProva');
    }

    public function listProva(){
    	return view('listProva');
    }


}
