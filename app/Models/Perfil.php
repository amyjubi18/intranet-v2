<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Perfil extends Model
{
    use HasFactory;
    public function user(){
/*         $user = User::find($this->user_id);
 */
        return $this->belongsTo(User::class);
    }
}
?>
