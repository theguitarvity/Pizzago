<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Proprietario extends Authenticatable
{
    use Notifiable;
    protected $guard = 'owner';
    
}
