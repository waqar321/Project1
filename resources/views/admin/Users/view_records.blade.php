
@extends('layouts.adminLayout.admin_design')


@Section('content')

<div id="content">

	<!-- <h1> User Detail </h1> -->
  <div id="content-header">
      <div id="breadcrumb"> 
          <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> 
          <a href="{{ URL('admin/View-Records') }}">View All</a> 
          <a href="{{ URL('admin/Search-Records') }}">View By Search</a> 
      </div>
    <h1></h1>
      @if(Session::has('flash_message_success'))
        <div class="alert alert-error alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{!! session('flash_message_success') !!}</strong>
        </div>
      @endif  
  </div>
  <div class="container-fluid"><hr>
	<!-- <h1> User Detail </h1> -->

    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Users Detail</h5>
          </div>
          <div class="widget-content nopadding">
        			<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact No</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
     
          @foreach($users as $user)		
      		    <tr>
      		      <th scope="row">{{ $user->id }}</th>
      				<td><a href="{{ url('admin/View-full-Records/'.$user->id) }}"> {{ $user->name }} </a></td>  	
      				<td>{{ $user->email }}</td> 	
      				<td>{{ $user->contact }}</td>    	
              <td><a href="{{ url('admin/edit-customer-Records/'.$user->user_id) }}"> Edit </a></td>     
              <td><a href="{{ url('admin/delete-customer-Records/'.$user->user_id) }}"> Delete</a></td>     
       <!--      <div class="form-actions">
                  <input type="submit" value="Update Password" class="btn btn-success">
              </div> -->
      		    </tr>
		      @endforeach

  </tbody>
</table>
          </div> <!-- widget-content nopadding -->
        </div> <!-- widget-box -->
      </div> <!-- span12 -->
    </div>  <!-- row-fluid -->
  </div>  <!-- container-fluid -->
</div> <!-- content -->


@endsection