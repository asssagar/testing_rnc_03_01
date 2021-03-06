<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Philosopher' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/font-awesome.min.css"/>
<link rel="stylesheet" href="css/style.css" />
<script src="js/vendor/modernizr-2.6.2.min.js"></script>
<script src="js/vendor/jquery-1.10.2.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
</head>
<style>
.row {
	margin-top: -10px;
	margin-left: 1000px;
	;
}
</style>

<body>
<!--[if lt IE 7]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]--> 

<!-- Add your site or application content here -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-offset-4 col-lg-offset-4 col-md-4 col-lg-4">
      <button id='modal-launcher' class="btn btn-primary" data-toggle="modal" data-target="#login-modal"> sign up </button>
    </div>
  </div>
</div>
</body>
</html>



<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header login_modal_header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title" id="myModalLabel">register</h2>
      </div>
      <div class="modal-body login-modal">
        
        <br/>
        <div class="clearfix"></div>
        <div id='social-icons-conatainer'>
          <div class='modal-body-left'>
            <div class="form-group">
              <input type="text" id="username" placeholder="Enter your name" value="" class="form-control login-field">
              <i class="fa fa-user login-field-icon"></i></div>
            <div class="form-group">
              <input type="password" id="login-pass" placeholder="Password" value="" class="form-control login-field">
              <i class="fa fa-lock login-field-icon"></i></div>
            <a href="#" class="btn btn-success modal-login-btn">Login</a><a href="#" class="login-link text-center">Lost your password?</a></div>
          <div class='modal-body-right'>
          <div class="modal-social-icons">
            <div class="form-group">
              <input type="text" id="username" placeholder="Enter your name" value="" class="form-control login-field">
              <i class="fa fa-user login-field-icon"></i></div>
            <!--<a href='#' class="btn btn-default facebook">
            <i class="fa fa-facebook modal-icons"></i>Sign In with Facebook</a>-->
            
            <div class="form-group">
              <input type="text" id="username" placeholder="Enter your name" value="" class="form-control login-field">
              <i class="fa fa-user login-field-icon"></i></div>
            
           <div class="form-group">
              <input type="text" id="username" placeholder="Enter your name" value="" class="form-control login-field">
              <i class="fa fa-user login-field-icon"></i></div>
            
           <div class="form-group">
              <input type="text" id="username" placeholder="Enter your name" value="" class="form-control login-field">
              <i class="fa fa-user login-field-icon"></i></div>
            
            
            
            </div>
          </div>
          <div id='center-line'>OR</div>
        </div>
        <div class="clearfix"></div>
        <div class="form-group modal-register-btn">
         <a href='#' class="btn btn-default facebook">
            <i class="fa fa-facebook modal-icons"></i>Sign In with Facebook</a>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="modal-footer login_modal_footer"></div>
    </div>
  </div>
</div>
