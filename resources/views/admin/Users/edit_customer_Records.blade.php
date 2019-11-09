
@extends('layouts.adminLayout.admin_design')


@Section('content')

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Form elements</a> <a href="#" class="current">Common elements</a> </div>
  <h1>Please Choose Values To Update</h1>
</div>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Personal-info</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="#" method="get" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">name :</label>
              <div class="controls">
                <input name="name" type="text" value="{{ $users->name}}" class="span11" placeholder="Enter name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Email :</label>
              <div class="controls">
                <input name="email" type="email" value="{{ $users->email}}" class="span11" placeholder="Enter Email" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Password</label>
              <div class="controls">
                <input type="password" name="password" class="span11" placeholder="Enter Password"  />
              </div>
            </div>
     <!--        <div class="control-group">
              <label class="control-label">Contact No</label>
              <div class="controls">
                <input type="text" name="contact_no" value="#" class="span11" placeholder="Enter Contact No" />
              </div>
            </div> -->
 
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Update Customer Information</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</div></div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
@endsection