<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\Models\BusinessMailingAddress;
use Illuminate\Database\Eloquent\Model;
use App\Models\Enquiry;
use Illuminate\Support\Facades\URL;
use Laravel\Passport\HasApiTokens;

class Player extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'business_name',
        'email',
        'mobile',
        'password',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    
    public function getProfilePictureAttribute()
    {
        $picture = $this->avatar = isset($this->avatar) ? asset('storage/uploads/user/' . $this->avatar) : URL::to('assets/images/avatar.jpg');

        return $picture;
    }
}
