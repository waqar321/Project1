@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if(Session::has('status'))
                    <div class="alert alert-error alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong>{!! session('status') !!}</strong>
                    </div>
                @endif 
                <div class="card-header">Registration Form</div>

                <div class="card-body">
                    <form method="POST" action="{{ URL('Add_new_form')}}">
                        @csrf
                         <!-- name address area city country contact email password confirm_password -->
                        <!-- =================hidden field================== -->
                          <input type="hidden" id="user_id" name="user_id" value="{{ $users->id }}">

                        <!-- =================1 testing================== -->
                        <!-- <input type="text" name="testing" value="something" readonly="readonly" /> -->
                        <!-- =================1 Name================== -->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                 <input name="name" id="name" type="text" class="form-control" 
                                 value="{{$users->name}}" readonly="readonly" required autocomplete="name" autofocus>
                                
                            </div>
                        </div>

                        <!-- =================2 Addresss================== -->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Addresss</label>

                            <div class="col-md-6">
                                <input name="address" id="address" type="text" class="form-control" value="" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <!-- =================3 Area================== -->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Area</label>

                            <div class="col-md-6">
                                <input name="area" id="area" type="text" class="form-control" value="" required autocomplete="name" autofocus>
                            </div>
                        </div>
                         <!-- =================4 City================== -->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">City</label>

                            <div class="col-md-6">
                                <input name="city" id="city" type="text" class="form-control" value="" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <!-- =================5 Country================== -->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Country</label>

                            <div class="col-md-6">
                                <input name="country" id="country" type="text" class="form-control" value="" required autocomplete="name" autofocus>
                            </div>
                        </div>
                         <!-- =================6 Contact================== -->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Contact</label>

                            <div class="col-md-6">
                                <input name="contact" id="contact" type="text" class="form-control" value="" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <!-- =================7 Email================== -->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input name="email" id="email" type="text" class="form-control" 
                                value="{{$users->email}}" readonly="readonly" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <!-- =================8 Category================== -->
    <!--  Commercial        Residential Aparments Residential Banglow -->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Category</label>
                            <div class="col-md-6">

                                <input type="radio" name="category" id="category" ng-model="status" value="Commercial">Commercial
                                <input type="radio" name="category" id="category" ng-model="status" value="Residential Aparments">Residential Aparments<br>
                                <input type="radio" name="category" id="category" ng-model="status" value="Residential Banglows">Residential Banglows
                           
                            </div>
                         </div>
                        <!-- =================9 Type ================== -->
<!-- 1 Bed Lounge 2 Bed Lounge 2 Bed D/D 3 Bed D/D Shop Banglow Single Story Banglow Double Story -->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Type</label>
                            <div class="col-md-6">
                                <label class="radio-inline">
                                    <input type="radio" name="type" id="type" value="Bed Lounge"> 1 Bed Lounge 
                                </label>
                                <label class="radio-inline">
                                     <input type="radio" name="type" id="type" value="2 Bed Lounge"> 2 Bed Lounge 
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="type" id="type" value="2 Bed D/D"> 2 Bed D/D <br>
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="type" id="type" value="3 Bed D/D"> 3 Bed D/D 
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="type" id="type" value="Shop"> Shop  <br>
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="type" id="type" value="Banglow Single Story"> 
                                Banglow Single Story <br>
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="type" id="type" value="Banglow Double Story"> 
                                Banglow Double Story
                                </label>
                            </div>
                        </div>
                   <!-- =================10 Budget================== -->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Budget</label>
<!-- 10 to 20 lac 20 to 30 lac 30 to 40 lac -->
                             <div class="col-md-6">
                                <input type="radio" name="bugdet" id="bugdet" value="10 to 20 lac"> 10 to 20 lac  
                                <input type="radio" name="bugdet" id="bugdet" value="20 to 30 lac"> 20 to 30 lac <br>
                                <input type="radio" name="bugdet" id="bugdet" value="30 to 40 lac"> 30 to 40 lac  
                            </div>
                        </div>
                     <!-- =================10 Floor================== --> 
                        <div class="form-group row"> 
                            <label for="name" class="col-md-4 col-form-label text-md-right">Floor</label>

                            <div class="col-md-6">
                                <input type="radio" name="floor" id="floor" value="lower Ground (SHOP)"> 
                                lower Ground (SHOP)
                                <input type="radio" name="floor" id="floor" value="Uper Ground (SHOP)"> 
                                Uper Ground (SHOP) <br>
                                <input type="radio" name="floor" id="floor" value="Mezzanine Floor (SHOP)"> 
                                Mezzanine Floor (SHOP) <br>
                                <input type="radio" name="floor" id="floor" value="1st"> 1st 
                                <input type="radio" name="floor" id="floor" value="2nd"> 2nd 
                                <input type="radio" name="floor" id="floor" value="3rd"> 3rd 
                                <input type="radio" name="floor" id="floor" value="4th"> 4th 
                                <input type="radio" name="floor" id="floor" value="5th"> 5th <br>
                                <input type="radio" name="floor" id="floor" value="6th"> 6th 
                                <input type="radio" name="floor" id="floor" value="7th"> 7th 
                                <input type="radio" name="floor" id="floor" value="8th"> 8th 
                                <input type="radio" name="floor" id="floor" value="9th"> 9th 
                                <input type="radio" name="floor" id="floor" value="N/A"> N/As

                            </div>
                        </div>
                     <!-- =================10 Sq.Ft================== -->
                        <div class="form-group row"> 
                            <label for="name" class="col-md-4 col-form-label text-md-right">Sq.Ft</label>
                        
                            <div class="col-md-6">
                                
                                <input type="radio" name="sq_ft" id="sq_ft" value="100 plus (SHOP)"> 
                                100 plus (SHOP) 
                                <input type="radio" name="sq_ft" id="sq_ft" value="450"> 450 
                                <input type="radio" name="sq_ft" id="sq_ft" value="650"> 650 <br>
                                <input type="radio" name="sq_ft" id="sq_ft" value="950"> 950 
                                <input type="radio" name="sq_ft" id="sq_ft" value="1100">   
                            </div>
                        </div>

                    <!-- =================10 banglow Sq.yd================== -->
                        <div class="form-group row"> 
                            <label for="name" class="col-md-4 col-form-label text-md-right">banglow Sq.yd</label>

                           <div class="col-md-6">
           
                                <input type="radio" name="banglow_sq_yd" id="banglow_sq_yd" value="100 Sq.Yd"> 
                                100 Sq.Yd   
                                <input type="radio" name="banglow_sq_yd" id="banglow_sq_yd" value="120 Sq.Yd"> 
                                120 Sq.Yd   
                                <input type="radio" name="banglow_sq_yd" id="banglow_sq_yd" value="120+ Sq.Yd"> 
                                120+ Sq.Yd

                            </div>
                        </div> 
                 <!-- =================10 Nature Of Buying================== -->
                        <div class="form-group row"> 
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nature Of Buying</label>

                            <div class="col-md-6">
                                <input type="radio" name="nature_of_buying" id="nature_of_buying" value="Living"> Living  
                                <input type="radio" name="nature_of_buying" id="nature_of_buying" value="Investment"> Investment  
                            </div>
                        </div>
                
                <!-- =================10 Best Time To Call================== -->
                        <div class="form-group row"> 
                            <label for="name" class="col-md-4 col-form-label text-md-right">Best Time To Call</label>

                            <div class="col-md-6">
                                <input type="radio" name="Time_to_call" id="Time_to_call" value="Morning"> Morning  
                                <input type="radio" name="Time_to_call" id="Time_to_call" value="Evening"> Evening  
                                <input type="radio" name="Time_to_call" id="Time_to_call" value="Night"> Night  
                            </div>
                        </div>

                 <!-- =================10 Choose your Location================== -->
                        <div class="form-group row"> 
                            <label for="name" class="col-md-4 col-form-label text-md-right">Choose your Location</label>
                            
                            <div class="col-md-6">
                                <input type="radio" name="choosen_location" id="choosen_location" value="Chayal Bridge View (Shah Faisal No 1)"> 
                                Chayal Bridge View (Shah Faisal No 1) <br>
                                (Mobile Mall, Shops & Apartments)<br><br>  
                                <input type="radio" name="choosen_location" id="choosen_location" value="Chayell towers (Surjani town Sec. 7A)"> 
                                Chayell towers (Surjani town Sec. 7A)  <br> 
                               (Shops & Apartments)<br><br> 
                                <input type="radio" name="choosen_location" id="choosen_location" value="Chayell Pride (North Karachi Sec . 5k)"> 
                                Chayell Pride (North Karachi Sec . 5k)<br>
                                (Shops & Apartments)<br><br> 
                                <input type="radio" name="choosen_location" id="choosen_location" value="Chayell Dreams (Gadap Town)">
                                Chayell Dreams (Gadap Town) <br>
                                (Banglows & Apartments)
                            </div>
                        </div>
                <!-- ================form end================== -->

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Register Form
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
