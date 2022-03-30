<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;
use App\Models\ContactusEnquiry;
use App\Models\StoreDistributor;
use App\Models\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use App\Models\User;
use App\Models\Player;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Response;
class IndexController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function playerRegistration()
    {
        return view('frontend.player-registration');
    }

    public function storesDistributors()
    {
        return view('frontend.stores-distributors');
    }

    public function games()
    {
        return view('frontend.games');
    }

    public function privacyPolicy()
    {
        return view('frontend.privacy-policy');
    }

    public function termsConditions()
    {
        return view('frontend.terms-conditions');
    }

    public function contactUs()
    {
        return view('frontend.contact-us');
    }

    public function playerRegistrationPost(Request $request)
    {
        $request->validate([
                'firstname'     => ['required', 'string', 'max:255'],
                'email'         => ['required', 'string', 'email', 'max:255', 'unique:players'],
                'mobile'        => ['required', 'max:11', 'min:10', 'unique:players'],
                'password'      => ['required', 'string', 'min:6']
            ]);

        $user = Player::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('success', 'Your registration was succesfull, we will contact you shortly');   
    }

    public function storesDistributorsPost(Request $request)
    {

    $request->validate([
        'name'     => ['required', 'string', 'max:255'],
        'email'    => ['required', 'string', 'email', 'max:255'],
        // 'email'    => ['required', 'string', 'email', 'max:255', 'unique:store_distributors'],
        'mobile'        => ['required', 'max:12', 'min:10'],
        // 'mobile'        => ['required', 'max:11', 'min:10', 'unique:store_distributors'],
        'distributor'      => ['required'],
        'city'      => ['required'],
        'state'      => ['required'],
        'zip_code'      => ['required'],
        'message'      => ['required'],
    ]);

        $user = StoreDistributor::create([
            'name' => $request->name,
            'distributor' => $request->distributor,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'city' => $request->city,
            'state' => $request->state,
            'zip_code' => $request->zip_code,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Your Store Distributor Enquiry submitted successfully!'); 
        
    }

    public function contactUsPost(Request $request)
    {        

    $request->validate([
        'name'     => ['required', 'string', 'max:255'],
        'email'    => ['required', 'string', 'email', 'max:255'],
        'mobile'        => ['required', 'max:12', 'min:10'],
        'message'      => ['required'],
        'subject'      => ['required'],
    ]);

        $user = ContactusEnquiry::create([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'message' => $request->message,
            'subject' => $request->subject,
        ]);

        return redirect()->back()->with('success', 'Your message was sent successfully, we will contact you shortly'); 
        
    
    }

    public function results($id){
        $enquiry = Enquiry::find($id);
        $enquiry->load('files');
        $base_url = URL::to('/');
        $path = $base_url.'/results'.'/'.$enquiry->id;
        return view('frontend.results',  compact('enquiry', 'path'));
    }

    public function downloadFile($id)
    {
        $file = File::find($id);
        $storedFile = Storage::disk('public')->path('/uploads/enquiries/' . $file->user_id . '/' . $file->enquiry_id . '/files' . '/' . $file->filename);
        return Response::download($storedFile);
    }
}
