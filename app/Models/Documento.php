<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Categoria;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;
    protected $table ='documento';
    protected $primaryKey = 'id';
    public $timestamps=false;
    protected $fillable = ['name', 'description','documento','fecha','categoria_id'];

    public function categoria(){
        return $this->hasMany(Categoria::class);
    }


}

?>
