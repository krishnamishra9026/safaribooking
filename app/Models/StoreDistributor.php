<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\File;

class StoreDistributor extends Model
{
    use HasFactory;
    protected $table = "store_distributors";

    protected $fillable = ['name', 'email', 'city', 'state', 'zip_code', 'message', 'distributor','mobile'];
    public $timestamps = true;
}
