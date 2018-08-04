<script src="{{ asset('js/pace.js') }}"></script>
<link href="{{ asset('css/pace-minimal.css') }}" rel="stylesheet">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login </title>  
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}"> 
    <link rel="stylesheet" href="{{ asset('/css/admin.css') }}"> 
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}"> 
    {{-- <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" /> --}}
	<link href="{{ asset('assets/global/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
 </head>
<style>
	body {

	}
.black-ribbon {
  position: fixed;
  z-index: 9999;
  width: 70px;
}


.stick-left { left: 0; }
.stick-right { right: 0; }
.stick-top { top: 0; }
.stick-bottom { bottom: 0; }
</style>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-12 text-center" style="margin:15px;">
			
			<h4 class="bold">ระบบสมาชิก Login</h3>
		</div>
	</div>
</div>

<div class="container">
	<nav class="navbar navbar-default">
	    <div class="navbar-header">

	        <!-- Collapsed Hamburger -->
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
	            <span class="sr-only">Toggle Navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	        </button>

	        <!-- Branding Image -->
	        <a class="navbar-brand" href="{{ url('/') }}">
	            <i class="fa fa-home"></i> <b>OCSC</b>
	        </a>
	    </div>

	    <div class="collapse navbar-collapse" id="app-navbar-collapse">
	        <!-- Left Side Of Navbar -->
	        <ul class="nav navbar-nav">
	        @if(Auth::check())
	        	@if(Auth::user()->role_id == 1)
	           	<li><a href="{{ url('/admin') }}">ผู้ใช้งานระบบ</a></li>
	           	@endif
	           	<li><a href="{{ url('/customer') }}">รายชื่อผู้สมัคร</a></li>
	           	@if(Auth::user()->role_id == 1)
	           	<li><a href="{{ url('/exam') }}">เปิดการจองห้องสอบ</a></li>
	           	@endif
	           	<li><a href="{{ url('/banking') }}">ค้นหาผู้สมัครสอบ</a></li>
	           	<li><a href="{{ url('/announce') }}">ประกาศ</a></li>
	           	<li><a href="{{ url('/news') }}">ข่าวสาร</a></li>
	       	@endif
	        </ul>

	        <!-- Right Side Of Navbar -->
	        <ul class="nav navbar-nav navbar-right">
	            <!-- Authentication Links -->
	            @if (Auth::guest())
	                <li><a href="{{ url('/login') }}"><i class="icon-login"></i> &nbsp;เข้าสู่ระบบ</a></li>
	                {{-- <li><a href="{{ url('/register') }}">Register</a></li> --}}
	            @else
	                <li class="dropdown">
	                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
	                        {{ Auth::user()->name }} <span class="caret"></span>
	                    </a>

	                    <ul class="dropdown-menu" role="menu">
	                        <li>
	                            <a href="{{ url('/logout') }}"><i class="icon-logout"></i> &nbsp;ออกจากระบบ</a>
	                        </li>
	                    </ul>
	                </li>
	            @endif
	        </ul>
	    </div>
	</nav>
</div>
	

	<div class="container" style="margin-bottom:40px;">
		<div class="row" style="padding-top: 20px;">
			<div class="col-md-12">
				
			</div>
		</div>
	</div>


<div class="panel panel-success">
    <div class="panel-heading">
         <div style="display: flex; justify-content: space-between; align-items: center;">
            <span>
                 <b>บัญชีผู้ใช้งาน</b>
            </span>

            <a class="btn btn-sm btn-success" href="{{ url('admin/create') }}">
                <i class="fa fa-plus"></i> เพิ่มบัญชีใหม่
            </a>
        </div>  
    </div>

    <div class="panel-body">
       
        <h2 class="bold">บัญชีผู้ใช้งานทั้งหมด <span class="text-primary"></span> คน</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped text-center">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Role</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                   
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <i class="fa fa-edit"></i> แก้ไข
                        </td>
                    </tr>
                 
                </tbody>
            </table>
            <div class="text-center">
                <a class="btn btn-default" href="{{ url('home') }}">
                    <i class="fa fa-arrow-left"></i> กลับ
                </a>
                <a class="btn btn-success" href="{{ url('admin/create') }}">
                    <i class="fa fa-plus"></i> เพิ่มบัญชีใหม่
                </a>
            </div>
        </div>
    </div>
</div>
<!-- script tags
	============================================================= -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('assets/js/bootbox.min.js') }}"></script>
</body>
</html>