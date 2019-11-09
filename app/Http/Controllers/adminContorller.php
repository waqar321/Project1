<?php

namespace App\Http\Controllers;
use Hash;
use Auth;
use Session;
use App\User;
use App\form_data;
use App\searching_item;

use Illuminate\Http\Request;

class adminContorller extends Controller{
    
    public function login(Request $request){
 		   	// return "its working"; die;
		   if($request->isMethod('post')){
		   	   $data = $request->input();

			   if(Auth::attempt(['email'=>$data['email'], 'password'=>$data['password'],'admin'=>'1'])){
					Session::put('adminSession', $data['email']);				
					return redirect('admin/dashboard')->with("status", "Logged in By  ".$data['email']);
			   }else{
					return redirect('admin')->with('status', "Email or Password is incorrect!!");
			   }
			}

			return view('admin.admin_login');
	 } 

	public function dashboard(){
	 	return view('admin/dashboard');
	}
 	public function logout(){
		Session::flush();
		return redirect('admin')->with('status', "You Are Logged Out successfully!!");
	}
	public function settings(){
		return view("admin/settings");
	}

	public function UpdatePassword(Request $request){
		 if($request->isMethod('post')){
            $data = $request->all();

            $user_detail = User::where(['email' => Auth::user()->email])->first();
            $current_password = $data['current_pwd'];
            $New_password = $data['new_pwd'];
			$id = $user_detail->id;
			$db_hash_password = $user_detail->password;

            if(Hash::check($current_password,$db_hash_password)){  //waqar123 == hash(waqar123)
              	// Hash::make($New_password)
                // $password = bcrypt($data['new_pwd']);
                User::where('id',$id)->update(['password'=>Hash::make($New_password)]);
                return redirect('/admin/settings')->with('flash_message_success','Password updated Successfully!');
            }else {
                return redirect('/admin/settings')->with('flash_message_error','Incorrect Current Password!');
            }
        }
	}
	public function View_full_Records(Request $request, $id){

		$user = form_data::where('id', $id)->first();
		return view('admin/users/View_full_Record', ['users' => $user]);
	}

	public function Search_Records(Request $request){

			if($request->isMethod('post')){
				$searching_value_by_Category="";	
				$searching_value_by_Type="";
				$searching_value_by_budget="";

				$searching_value_by_Category = $request->input('searching_value_by_Category');
				$searching_value_by_Type = $request->input('searching_value_by_Type');
				$searching_value_by_budget = $request->input('searching_value_by_budget');
			
		$search_detail = form_data::where('category', 'LIKE', '%'.$searching_value_by_Category.'%')
												->Where('type', 'LIKE', '%'.$searching_value_by_Type.'%')
												->Where('bugdet', 'LIKE', '%'.$searching_value_by_budget.'%')->get();

				if(count($search_detail) > 0){
					// echo count($search_detail);die;
					return view('admin/users/view-search-Records', ['search_detail' => $search_detail]);
    			}else{ 
    				return redirect('admin/Search-Records')->with('status', "No Result Found!!");
				}
			}
			return view('admin/users/Search_Records');
	}
	public function View_Records(){
		$user = form_data::select('id', 'name', 'user_id', 'email', 'contact')->get();	
		return view('admin/users/view_records', ['users' => $user]);					
	}
	public function edit_customer_Records($id){

			$user = User::where('id', $id)->first();
			return view('admin/users/edit_customer_Records', ['users' => $user]);
	}
	public function delete_customer_Records($id){
			$affected = User::where('id', $id)->delete();
			echo "<pre>";
			print_r($affected);	
			echo "</pre>";				
	}
}
