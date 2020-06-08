<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\Message;
use App\Notification;
use App\product;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BuyersPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('buyers.dashboard');
    }

     public function upPaymentMethod()
    {
        return view('buyers.dashboard.paymentMethod');
    }

     public function securitySettings()
    {
        return view('buyers.dashboard.securitySettings');
    }

     public function deliveryStatus()
    {
        return view('buyers.dashboard.deliveryStatus');
    }




    public function profile()
    {
        return view('buyers.profile');
    }

    public function updateAccountDetails()
    {
        return view('buyers.profile.updateAccountDetails');
    }

    public function profileUpdate(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'gender' => ['required'],
            
            
        ]);

        $user_id = Auth::user()->id;
        DB::table('users')->where('id',$user_id)->update([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
            'address'=>$request->input('address'),

            


        ]);


        return view('buyers.profile.successUpdate');
    }

    public function viewEdit()
    {
        $user_id = Auth::user()->id;
        $user_data = DB::table('users')->where('id',$user_id)->first();
        return view('buyers.profile.viewEdit',[
            "user_data" => $user_data

        ]);
    }

    public function purchaseHistory()
    {
        return view('buyers.purchaseHistory');
    }

    public function notifications()
    {
        $user_id = Auth::user()->id;

        $notifications = DB::table('notifications')->where('user_id',$user_id)->paginate(10);
        
        return view('buyers.notifications',[

            "notifications" => $notifications
        ]);
    }

    public function favourites()
    {
        return view('buyers.favourites');
    }

    public function bloomzonProducts()
    {
        $products = DB::table('products')->paginate(40);

        return view('buyers.bloomzonProducts',[
            "products" => $products
        ]);
    }

    public function paymentHistory()
    {
        return view('buyers.paymentHistory');
    }

    public function messages()
    {

        $user_id = Auth::user()->id;
        $msgs_received = DB::table('messages')->where('receiver_id',$user_id)->paginate(10);
        $msgs_sent = DB::table('messages')->where('sender_id',$user_id)->paginate(10);

        return view('buyers.messages',[
            "msgs_received" => $msgs_received,
            "msgs_sent" => $msgs_sent
        ]);
    }

    public function sendMessage(Request $request)
    {

        $msg = new Message;

        $msg->subject = $request->subject;
        $msg->requestType = $request->requestType;
        $msg->sender_id = Auth::user()->id;
        $msg->receiver_id = $request->receiver_id;
        $msg->body = $request->body;

        $msg->save();


        return response()->json(['success'=>'Form is successfully submitted!']);
    }


    public function messageChat()
    {
        return view('buyers.messages.messageChat');
    }

    public function points()
    {
        return view('buyers.points');
    }

    public function allAds()
    {
        return view('buyers.allAds');
    }

    public function postNewAds()
    {
        return view('buyers.postNewAds');
    }


    public function contactAdmin()
    {
        return view('buyers.contactAdmin');
    }

    public function dispute()
    {
        return view('buyers.dispute');
    }

    public function feedback()
    {
        return view('buyers.feedback');
    }

    public function reviews()
    {
        return view('buyers.reviews');
    }

    public function becomeSeller()
    {
        return view('buyers.becomeSeller');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
