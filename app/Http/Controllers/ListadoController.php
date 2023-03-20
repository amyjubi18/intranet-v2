<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Categoria;

class ListadoController extends Controller
{
    public function index(){
        $query = DB::table('documento')->get();
        return view('listado',['datos'=>$query]);
    }
    
}
?>
