<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use Socialite;
use App\User;

class SocialiteController extends Controller
{
public function redirectToGoogle()
{
    return Socialite::driver('google')->redirect();
}
 
public function callback()
{
           
    $getInfo = Socialite::driver('google')->user();
     
    $user = $this->createUser($getInfo,'google');
 
    auth()->login($user);
 
    return redirect()->to('/home');
 
}
function createUser($getInfo,$provider){
 
 $user = User::where('provider_id', $getInfo->id)->first();
 
 if (!$user) {
     $user = User::create([
        'name'     => $getInfo->name,
        'email'    => $getInfo->email,
        'provider' => $provider,
        'provider_id' => $getInfo->id
    ]);
  }
  return $user;
}
}