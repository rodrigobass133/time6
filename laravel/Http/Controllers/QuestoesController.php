<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestoesController extends Controller
{
    public function objetiva(){
    	return view('questObjetivas');
	}

	public function discursiva(){
    	return view('questDiscursiva');
	}

	public function editObjetiva(){
    	return view('editQuestObjetiva');
	}

	public function editDiscursiva(){
    	return view('editQuestDiscursiva');
	}

	public function listQuest(){
		return view('listQuest');

	}

	public function telaAddQuest(){
		return view('telaAddQuest');
	}

	public function inicioCriarQuest(){
		return view('inicioCriarQuest');
	}


}
