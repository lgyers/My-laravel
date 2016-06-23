<!DOCTYPE html>
<html lang="en">
    
<head>
    <title>Matrix Admin</title><meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    {!! Html::style('manage/css/bootstrap.min.css') !!}
    {!! Html::style('manage/css/bootstrap-responsive.min.css') !!}
    {!! Html::style('manage/css/matrix-login.css') !!}
    {!! Html::style('manage/font-awesome/css/font-awesome.css') !!}

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

</head>
    <body>
        <div id="loginbox">
        	{!! Form::open(['url' => '/auth/login']) !!}          
				<div class="control-group normal_text"> <h3>{!! Html::image('manage/img/logo.png') !!}</h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"></i></span>
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>
                </div>
                <div class="form-group">
				</div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span>
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>
                    <span class="pull-right"><a type="submit" class="btn btn-success" /> Login</a></span>
                </div>
            {!! Form::close() !!}
            <form id="recoverform" action="#" class="form-vertical">
				<p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>
				
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
                        </div>
                    </div>
               
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
                    <span class="pull-right"><a class="btn btn-info"/>Reecover</a></span>
                </div>
            {!! Form::close() !!}
        </div>
        
        {!! HTML::script('manage/js/jquery.min.js') !!}
        {!! HTML::script('manage/js/matrix.login.js') !!}

    </body>

</html>
