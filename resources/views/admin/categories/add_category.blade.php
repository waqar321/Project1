
@extends('layouts.adminLayout.admin_design')


@Section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Categries</a> <a href="#" class="current">Add Categries</a> </div>
    <h1>Add Categries</h1>
      @if(Session::has('flash_message_success'))
        <div class="alert alert-error alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{!! session('flash_message_success') !!}</strong>
        </div>
      @endif  
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Form validation</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('admin/add-category') }}" name="add_category" id="add_category" novalidate="novalidate">
              {{ csrf_field() }}
              <div class="control-group">
                <!-- ================== category name========================= -->
                <label class="control-label">Category Name</label>
                <div class="controls">
                  <input type="text" name="category_name" id="category_name">
                </div>
              </div>  
              
                <!-- ================== category Level========================= -->
              <div class="control-group">
                <label class="control-label">Category Level</label>
                <div class="controls">
                    <select name="parent_id" style="width: 220px">
                      <option value="0"> Main Category </option>
                          @foreach($levels as $val)
                            <option value="{{ $val->id }}"> {{ $val->name }} </option>
                           @endforeach
                    </select>
                </div>
              </div>      

                <!-- ================== category description========================= -->
              <div class="control-group">
                <label class="control-label">Description</label>
                <div class="controls">
                  <textarea name="description" id="description"> </textarea> 
                </div>
              </div>
        	
                <!-- ================== category url========================= -->

              <div class="control-group">
                <label class="control-label">URL (Start with http://)</label>
                <div class="controls">
                  <input type="text" name="url" id="url">
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Add Category" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<script>     $("#add_category").validate({
		rules:{
			category_name:{	
				required:true
			},
			description:{
				required:true
			},
			url:{
				required:true
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});
	</script>
@endsection