
@extends('layouts.adminLayout.admin_design')


@Section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Products</a> <a href="#" class="current">Add Products</a> </div>
    <h1>Add Products</h1>
      @if(Session::has('flash_message_success'))
        <div class="alert alert-error alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{!! session('flash_message_success') !!}</strong>
        </div>
      @endif  
      @if(Session::has('status'))
		<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button>	
				<strong>{!! session('status') !!}</strong>
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
            <form class="form-horizontal" method="post" action="{{ url('admin/add-product') }}" name="add_Product" id="add_Product" onsubmit="return validateForm()">
              {{ csrf_field() }}

            <!-- ================== Category Level========================= -->
              <div class="control-group">
                <label class="control-label">Under Category Level</label>
                <div class="controls">
                    <select name="category_id" id="category_id" style="width: 220px;">  
                   		 <?php echo $categories_dropdown; ?>
                   		
                    </select>
                </div>
              </div>  
            <!-- ================== Product name========================= -->
              <div class="control-group">
                <label class="control-label">Product Name</label>
                <div class="controls">
                  <input type="text" name="product_name" id="product_name">
                </div>
              </div>   

            <!-- ================== Product Code========================= -->
              <div class="control-group">
                <label class="control-label">Product Code</label>
                <div class="controls">
                  <input type="text" name="product_code" id="product_code">
                </div>
              </div>  
  
            <!-- ================== Product Color========================= -->
              <div class="control-group">
                <label class="control-label">Product Color</label>
                <div class="controls">
                  <input type="text" name="product_color" id="product_color">
                </div>
              </div>  
            <!-- ================== Product Price========================= -->
              <div class="control-group">
                <label class="control-label">Product Price</label>
                <div class="controls">
                  <input type="text" name="product_price" id="product_price">
                </div>
              </div>  

            <!-- ================== Product Image========================= -->
 			 <div class="control-group">
                <label class="control-label">Image</label>
                <div class="controls">
                  <input type="file" name="image" id="image">
                </div>
              </div>
  
            <!-- ================== Product description========================= -->
              <div class="control-group">
                <label class="control-label">Description</label>
                <div class="controls">
                  <textarea name="description" id="description"> </textarea> 
                </div>
              </div>
        	
               
              <div class="form-actions">
                <input type="submit" value="Add Product" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<script>

function validateForm() {
  var x = document.forms["add_Product"]["fname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>

@endsection