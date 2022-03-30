<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\ContactusEnquiry;
use App\Models\StoreDistributor;
class DashboardController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {    
        $users = Player::latest()->get()->take(10);
        $contacts = ContactusEnquiry::latest()->get()->take(5);
        $enquiries = StoreDistributor::latest()->get()->take(5);
        return view('admin.dashboard', compact('users', 'enquiries','contacts'));
    }
}
