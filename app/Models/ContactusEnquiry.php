<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\File;

class ContactusEnquiry extends Model
{
    use HasFactory;
    protected $table = "contactus_enquiries";

    protected $fillable = ['name', 'email', 'message', 'distributor','mobile','subject'];
    public $timestamps = true;
}
