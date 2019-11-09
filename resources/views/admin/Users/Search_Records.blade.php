
@extends('layouts.adminLayout.admin_design')

@Section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> 
    	<a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> 
    	<a href="{{ URL('admin/View-Records') }}">View All</a> 
    	<a href="{{ URL('admin/Search-Records') }}" >View By Search</a> 
    </div>
    <h1></h1>
      @if(Session::has('status'))
        <div class="alert alert-error alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{!! Session('status') !!}</strong>
        </div>
      @endif  
  </div>

  		<div class="text-center">
			   
    		<form action="{{ URL('admin/Search-Records') }}" method="POST" role="search">
			    {{ csrf_field() }}
		 	 	<!-- =====================input 1======================== -->
	   			<div class="jumbotron">
		   			 <h1>Search By Category</h1>      
		 	 	</div>
			    <div class="input-group">
			       	<select name="searching_value_by_Category">
			       	
			       		  	<option value="none" disabled selected>Select your option</option>
			       		  	<option value="Commercial">Commercial</option>
					    	<option value="Residential Aparments">Residential Aparments</option>
					    	<option value="Residential Banglows">Residential Banglows</option>
		    			
					</select>
			    </div>
			    <br>
			    <br>
			    <br>
		 	 	<!-- =====================input 2======================== -->
			    <div class="jumbotron">
		   			 <h1>Search By Type</h1>      
		 	 	</div>
			    <div class="input-group">
			       	<select name="searching_value_by_Type">
			       			<option value="none" disabled selected>Select your option</option>
			       			<option value="1 Bed Lounge">1 Bed Lounge</option>
					    	<option value="2 Bed Lounge">2 Bed Lounge</option>
					    	<option value="2 Bed D/D">2 Bed D/D</option>
					    	<option value="3 Bed D/D">3 Bed D/D</option>
					    	<option value="Shop">Shop</option>
					    	<option value="Banglow Single Story">Banglow Single Story</option>
					    	<option value="Banglow Double Story">Banglow Double Story</option>
					</select>
			    </div> 
			     <br>
			    <br>
			    <br>
		 	 	<!-- =====================input 3======================== -->
			    <div class="jumbotron">
		   			 <h1>Search By Budget</h1>      
		 	 	</div>
			    <div class="input-group">
			       	<select name="searching_value_by_budget">
					    	<option value="none" disabled selected>Select your option</option>
					    	<option value="10 to 20 lac">10 to 20 lac</option>
					    	<option value="20 to 30 lac">20 to 30 lac</option>
					    	<option value="30 to 40 lac">30 to 40 lac</option>
	    			</select>
		            <br><br><button type="submit" value="Submit">Submit</button>  
			    </div>
			</form>
		</div>	


</div> <!-- content -->
        			

	

@endsection