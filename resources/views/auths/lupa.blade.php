<!DOCTYPE html>
<html lang="en">
<head>
	<title>REPOSITORY</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
            <div class="form-group row">
            @if ($message = Session::get('a'))
                    <div style="color:red">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
            </div>
            <form method="POST" action="/pospassa">
                        @csrf
                        <br/>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                                 Email
                            </label>

                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="Email Address" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="email" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-facebook btn-user btn-sm" style="float: right">
                                    <i class="fas fa-sync-alt"></i> Next
                                </button>
                                <a href="{{url('/')}}" class="btn btn-google btn-user btn-sm" style="float: right">
                                    <i class="fas fa-hand-point-left"></i> Cancel
                                </a>
                            </div>
                        </div>
                    </form>
			</div>
		</div>
	</div>
</body>
</html>