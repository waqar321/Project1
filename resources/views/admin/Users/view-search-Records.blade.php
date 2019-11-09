
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
<!-- search_detail -->


   <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>search_details Detail</h5>
          </div>
@foreach($search_detail as $search_details)		
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
                        <th scope="row">{{ $search_details->id }}</th>
                        <td>{{ $search_details->area }}</td>   
                        <td>{{ $search_details->city }}</td>   
                        <td>{{ $search_details->category }}</td>     
                        <td>{{ $search_details->type }}</td>     
                        <td>{{ $search_details->bugdet }}</td>     
                        <td>{{ $search_details->floor }}</td>   
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
                      
                        <td>{{ $search_details->address }}</td>     
                        <td>{{ $search_details->nature_of_buying }}</td>  
                        <td>{{ $search_details->country }}</td>     
                        <td>{{ $search_details->sq_ft }}</td>     
                        <td>{{ $search_details->banglow_sq_yd }}</td>     
                        <td>{{ $search_details->Time_to_call }}</td>     
                        <td>{{ $search_details->choosen_location }}</td>  
                      </tr>   
                    </tbody>
                </table>
          </div> <!-- widget-content nopadding --> <br><br><br>
@endforeach
        </div> <!-- widget-box -->
      </div> <!-- span12 -->
    </div>  <!-- row-fluid -->

      <div class="text-center"> 
            <a class="btn btn-primary" href="{{ URL('admin/Search-Records') }}" role="button">Back</a>
       </div> 
  </div>  <!-- container-fluid -->
</div> <!-- content -->



@endsection