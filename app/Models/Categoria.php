<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/* use App\Models\Archivo; */
use app\Models\Documento;
use Illuminate\Support\Facades\DB;
class Categoria extends Model
{
    use HasFactory;
    //relacion uno a muchos
    /* public function archivo(){
        return $this->hasMany(Archivo::class);
    } */
    public function categoria(){
        /* $categoria= DB::select('SELECT categoria FROM categiorias WHERE id'); */
        return $this->belongsTo(Documento::class);
    }
}
