<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Perfil;
/* use App\Models\Archivo;
 */use App\Models\Role;



class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function perfil(){
/*         $perfil = Perfil::where('user_id',$this->id)->first();
 */
        //relacion de uno a uno
        return $this->hasOne(Perfil::class);
        //return $this->hasOne('App\Models\Perfil')
    }
    //relacion de uno a muchos
   /*  public function archivo(){

        return $this->hasMany(Archivo::class);

    } */
    //relacion muchos a muchos
    public function roles(){

        return $this->belongsToMany(Role::class);

    }
}
