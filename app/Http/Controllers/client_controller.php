<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;
use Session;
use App\User;
use App\form_data;

class client_controller extends Controller{
    	
    	public function login(Request $request){

    		if($request->isMethod('post')){
		   	   $data = $request->input();

			   if(Auth::attempt(['email'=>$data['email'], 'password'=>$data['password'],'client'=>'3'])){
					
					$user = User::where('email', $data['email'])->first();
					// Session::put('adminSession', $name->name);		
					// echo ; die;
					// return redirect('home', ['users' => $name])->with("status", "You are Logged In  ".$name->name);
				// return redirect('home', ['users' => $user])->with("status", "You are Logged In  ".$name->name);
				// return redirect('home', ['users' => $user]);
				return view('Registeration_form	', ['users' => $user]);
			   }else{
					return redirect('client')->with('status', "Email or Password is incorrect!!");
			   }
			}
			return view('auth/login');
    	}
    	public function homePage(){
			return view('Registeration_form');

    	}
    	public function register(Request $request){

    			$data = $request->all();
					
 			    // return Validator::make($data, [
			     //        'name' => ['required', 'string', 'max:255'],
			     //        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
			     //        'password' => ['required', 'string', 'min:8', 'confirmed'],
		      //   ]);
				$User_obj = new User;
				$User_obj['name'] = $data['name'];
				$User_obj['email'] = $data['email'];
				$User_obj['password'] = Hash::make($data['password']);
				$User_obj['client'] = 3;	
			
				$User_obj->save();

					return redirect('client')->with('status','You Have Been Registered, Please Loggin!!');
				//    
    	}
    	 public function Add_new_form(Request $request){
    	 // <!-- name address area city country contact email category type bugdet floor sq_ft banglow_sq_yd nature_of_buying Time_to_call choosen_location -->
    	
	    	if($request->isMethod('post')){

				$data = $request->all();
  
  				// dd($data); die;
  				
	    		$user_id = $request->input('user_id');
	    		$name = $request->input('name');
	    		$address = $request->input('address');
	    		$area = $request->input('area');
	    		$city = $request->input('city');
	    		$country = $request->input('country');
	    		$contact = $request->input('contact');
	    		$email = $request->input('email');
	    		$category = $request->input('category');
	    		$type = $request->input('type');
	    		$bugdet = $request->input('bugdet');
	    		$floor = $request->input('floor');
	    		$sq_ft = $request->input('sq_ft');
	    		$banglow_sq_yd = $request->input('banglow_sq_yd');
	    		$nature_of_buying = $request->input('nature_of_buying');
	    		$Time_to_call = $request->input('Time_to_call');
	    		$choosen_location = $request->input('choosen_location');
				
				$registerData = new form_data;
				$registerData['name'] = $name;
				$registerData['user_id'] = $user_id;
				$registerData['address'] = $address;
				$registerData['area'] = $area;
				$registerData['city'] = $city;
				$registerData['country'] = $country;
				$registerData['contact'] = $contact;
				$registerData['email'] = $email;
				$registerData['category'] = $category;
				$registerData['type'] = $type;
				$registerData['bugdet'] = $bugdet;
				$registerData['floor'] = $floor;
				$registerData['sq_ft'] = $sq_ft;
				$registerData['banglow_sq_yd'] = $banglow_sq_yd;
				$registerData['nature_of_buying'] = $nature_of_buying;
				$registerData['Time_to_call'] = $Time_to_call;
				$registerData['choosen_location'] = $choosen_location;
				$registerData->save();	
			
				return redirect('HomePage')->with("status", "Record Saved Successfully");
	    	}   
		    return view('Registeration_form');                   
    }

}
