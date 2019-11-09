
@extends('layouts.adminLayout.admin_design')


@Section('content')

<div id="content">

	<!-- <h1> User Detail </h1> -->
  <div id="content-header">
        <div id="breadcrumb"> 
            <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> 
            <a href="{{ URL('admin/View-Records') }}">View All</a> 
            <a href="{{ URL('admin/Search-Records') }}" >View By Search</a> 
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
                          <th scope="col">Area</th>
                          <th scope="col">City</th>
                          <th scope="col">Category</th>
                          <th scope="col">Type</th>
                          <th scope="col">Bugdet</th>
                          <th scope="col">Floor</th>
                        </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <th scope="row">{{ $users->id }}</th>
                        <td>{{ $users->area }}</td>   
                        <td>{{ $users->city }}</td>   
                        <td>{{ $users->category }}</td>     
                        <td>{{ $users->type }}</td>     
                        <td>{{ $users->bugdet }}</td>     
                        <td>{{ $users->floor }}</td>   
                      </tr>   

                    </tbody>
                </table>
                <table class="table table-bordered table-dark">
                      <thead>
                        <tr>
                        
                          <th scope="col">Address</th>
                          <th scope="col">Nature Of Buying</th>
                          <th scope="col">Country</th>
                          <th scope="col">sq_ft</th>
                          <th scope="col">Banglow</th>
                          <th scope="col">Time_to_call</th>
                          <th scope="col">Choosen Location </th>

                        </tr>
                      </thead>
                      <tbody>
                      <tr>
                      
                        <td>{{ $users->address }}</td>     
                        <td>{{ $users->nature_of_buying }}</td>  
                        <td>{{ $users->country }}</td>     
                        <td>{{ $users->sq_ft }}</td>     
                        <td>{{ $users->banglow_sq_yd }}</td>     
                        <td>{{ $users->Time_to_call }}</td>     
                        <td>{{ $users->choosen_location }}</td>  
                      </tr>   
                    </tbody>
                </table>
          </div> <!-- widget-content nopadding -->
        </div> <!-- widget-box -->
      </div> <!-- span12 -->
       <div class="text-center"> 
            <a class="btn btn-primary" href="{{ URL('admin/View-Records') }}" role="button">Back</a>
          </div> 
    </div>  <!-- row-fluid -->
  </div>  <!-- container-fluid -->

</div> <!-- content -->



@endsection