<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminReply;
use App\Models\User;
use App\Models\ContactusEnquiry;
use App\Models\Player;
use App\Models\StoreDistributor;
use Notification;
use App\Notifications\AdminReplyNotification;
use DB;

class AdminReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $replies = AdminReply::latest()->get();
    
        return view('admin.replies.index', compact('replies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'body'=>'required',
        ]);

        switch ($request->enquiry_type) {
            case 'players':
            $table = 'Player';
            $table1 = 'players';
            break;

            case 'store_distributors':
            $table = 'StoreDistributor';
            $table1 = 'store_distributors';
            break;

            case 'contactus_enquiries':
            $table = 'ContactusEnquiry';
            $table1 = 'contactus_enquiries';
            break;
        }

        $user = AdminReply::create([
            'body' => $request->body,
            'enquiry_id' => $request->enquiry_id,
            'enquiry_type' => $request->enquiry_type
        ]);

        $data = DB::table($table1)->where('id',$request->enquiry_id)->first();

        $email = $data->email;
        if ($table1 == 'players') {
        $name = $data->firstname.' '.$data->lastname;
        }else{
           $name = $data->name; 
        }
        $user = User::make(['email' => $email, 'name' => $name]);

            $details = [
                'body' => $request->body,
                'body' => $request->body,
                'body' => $request->body,
            ];

            \Notification::send($user, new AdminReplyNotification($details));


        


        // Notification::send($data, new AdminReplyNotification($data));

        return redirect()->back()->with('success', 'Reply to Mail sent successfully!'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $replies = AdminReply::where(['enquiry_type'=> ((!empty($request->type)) ? $request->type : 'players') ,'enquiry_id'=>$id])->latest()->paginate(10);
        // echo "<pre>";print_r($replies->toArray());"</pre>";exit;
    
        return view('admin.replies.index', compact('replies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
