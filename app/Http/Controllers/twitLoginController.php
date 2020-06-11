<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use Socialite;
use App\User;

class twitLoginController extends Controller
{
public function redirectToTwitter()
{
    return Socialite::driver('twitter')->redirect();
}
 
public function handleFacebookCallback()
{
           
    $getInfo = Socialite::driver('twitter')->user();
     
    $user = $this->createUser($getInfo,'twitter');
 
    auth()->login($user);
 
    return redirect()->to('/dashboard');
 
}
function createUser($getInfo,$provider){
 
 $user = User::where('provider_id', $getInfo->id)->first();
 
 if (!$user) {
     $parts = explode("@", $getInfo->email);
        $username = $parts[0].rand(11,99);
     $user = User::create([
        'name'     => $getInfo->name,
        'email'    => $getInfo->email,
        'buyersId' => $username,
        'avatar' => $getInfo->avatar,
        'phone' => '08000000000',
        'role' => 'buyer',
        'address' => 'Please Update',
        'gender' => '',
        'pin'   => '',
        'password' => 'from google',
        'provider' => $provider,
        'provider_id' => $getInfo->id
    ]);
  }
  return $user;
}
}