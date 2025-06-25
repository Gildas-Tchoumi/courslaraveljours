<?php

namespace App\Models;

use App\Models\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Notifications\Notifiable;

class Utilisateur extends Model
{
    use Notifiable;
    //
    protected $fillable = ['firstname', 'lastname', 'sexe', 'image', 'email', 'password','token', 'is_email_verified'];

     public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'role_utilisateurs','utilisateur_id', 'role_id');
    }
}
