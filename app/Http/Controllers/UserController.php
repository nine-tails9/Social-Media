<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
class UserController extends Controller{
	public function getDashboard(){
		return view('dashboard');

	}
	public function postSignUp(Request $request){
		$this->validate($request,[
			'email' => 'email|unique:users',
			'first_name' => 'required|max:120',
			'password' => 'required|min:4'


		]);
		$email = $request['email'];
		$first_name = $request['first_name'];
		$password = bcrypt($request['password']);

		$user = new User();
		$user->email = $email;
		$user->first_name = $first_name;
		$user->password = $password;

		$user->save();
		Auth::login($user);
		return redirect()->route('dashboard');


	}
	public function postSignIn(Request $request){
		$this->validate($request,[
			'email' => 'required',
			'password' => 'required'
		]);
		$email = $request['email'];
		$password = $request['password'];
		if(Auth::attempt(['email'=>$email,'password'=>$password])){
			return redirect()->route('dashboard');

		}else{
			return redirect()->back();
		}

	}
	



}