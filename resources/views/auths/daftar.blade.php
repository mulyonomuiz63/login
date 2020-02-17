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
    @if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
      </div>

      @elseif ($pas = Session::get('pass'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $pas }}</strong>
      </div>

      @elseif ($pas = Session::get('suc'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $pas }}</strong>
      </div>
    @endif
            <form method="POST" action="/createaccount">
                        @csrf
                        <br/>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right" value="{{old('name')}}">
                                 username
                            </label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="npm" class="col-md-4 col-form-label text-md-right " value="{{old('npm')}}">
                                NPM
                            </label>
                            <div class="col-md-6">
                                <input type="text" name="nim" class="form-control" value="{{ old('nim') }}" required>
                                @if ($errors->has('id'))
                                    <label style="color:red">*NIM Salah</label>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="npm" class="col-md-4 col-form-label text-md-right  ">
                                Agama
                            </label>
                            <div class="col-md-6">
                                <select class="form-control" name="agama" required>
                                    <option value="">-Pilih-</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Khatolik">Khatolik</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                </select>
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="npm" class="col-md-4 col-form-label text-md-right  ">
                                Jenis Kelamin
                            </label>
                            <div class="col-md-6">
                            <input type="radio" name="jk" value="Laki-Laki">Laki-Laki
                            <input type="radio" name="jk" value="Perempuan">Perempuan
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">
                                E-Mail
                            </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">    
                                Password
                            </label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="confirmation" class="col-md-4 col-form-label text-md-right">    
                                Password Confirmation
                            </label>

                            <div class="col-md-6">
                                <input id="confirmation" type="password" class="form-control{{ $errors->has('confirmation') ? ' is-invalid' : '' }}" name="confirmation" required>

                                @if ($errors->has('confirmation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-facebook btn-user btn-sm" style="float: right">
                                    <i class="fas fa-sync-alt"></i> Register
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