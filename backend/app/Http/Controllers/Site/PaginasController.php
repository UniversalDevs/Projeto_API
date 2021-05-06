<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Voluntario;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PaginasController extends Controller
{
    public function Home(){
        return view ('src.index');
    }

    public function Voluntarios(){
        $voluntarios = Voluntario::where('status','ativo')->get();
        return view('src.voluntarios', compact('voluntarios'));
    }
}
