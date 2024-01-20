<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

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
        'password' => 'hashed',
    ];


    public function students() {
        // associating userid with notes
        return $this->hasMany(Students::class);
    }

    // auth()->user() 'who ever is a loged in user, we can get all of of his notes ->notes() and loop them, or we can create a note that is linked to the user ->create()
    // auth()->user()->notes()->create;
    // associating a note with a username 'who ever this note it, from whom is this name?'
    // $note->user()->name;


    // tbm tem funçao que retorna id de todos os usuarios que publicaram notas entre minuto 46 e 50 do video

    // function que retorna usuarios admins, tbm entre minuto 46 e 50

}
