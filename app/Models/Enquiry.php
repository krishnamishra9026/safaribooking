<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\File;

class Enquiry extends Model
{
    use HasFactory;
    protected $table = "enquiries";

    protected $fillable = ['name', 'email', 'city', 'state', 'zip_code', 'message', 'distributor','mobile'];
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function files()
    {
        return $this->hasMany(File::class, 'enquiry_id');
    }
}
