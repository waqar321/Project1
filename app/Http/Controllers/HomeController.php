<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\form_data;
use Session;
use Auth;


class HomeController extends Controller
{
    public function __construct(){
        // $this->middleware('auth');
    }
    public function index(){
        return view('Registeration_form');
    }

    public function Add_new_form(Request $request){
    	 // <!-- name address area city country contact email category type bugdet floor sq_ft banglow_sq_yd nature_of_buying Time_to_call choosen_location -->
    	
    	if($request->isMethod('post')){

			$data = $request->all();

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
	public function Logoutpage(){
		Session::flush();
		return redirect('login')->with('status', "You Are Logged Out successfully!!");
	}
	public function HomePage(){
		return view('HomePage');
	}
	public function PassReset(){
		return "PasswordReset is working"; die;
	}
  	public function Chayell_homepage(){
        return view('Chayell_homepage');
    }
}
