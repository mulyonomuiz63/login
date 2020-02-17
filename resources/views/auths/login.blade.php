
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Areta Amany</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="admin/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/vendor/animate/animate.css')}}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{asset('admin/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{asset('admin/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                <form class="login100-form validate-form" action="postlogin" method="post">
                                {{csrf_field()}}
                        <span class="login100-form-title p-b-33">
                              <div class="logo text-center"><img src="{{asset('img/areta.jpg')}}" ></div>
                              </span>
                              @if ($message = Session::get('a'))
                                <div class="alert alert-danger alert-block">
                                  <button type="button" class="close" data-dismiss="alert">×</button> 
                                    <strong>{{ $message }}</strong>
                                </div>
                              @endif

                    <div class="form-group">
                                    <label for="signin-usernm" class="control-label sr-only">Username</label>
                                    <input name="usernm" type="text" class="form-control" id="signin-username" placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Password</label>
                                    <input name="userpw" type="password" class="form-control" id="signin-password" placeholder="Password" required>
                                </div>
                                    <input name="ses" hide type="hidden" value="{{Session::get('a')}}">
                                    

                    <div class="container-login100-form-btn m-t-20">
                        <button class="login100-form-btn">
                            login
                        </button>
                    </div>
                    <div class="text-center">
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    
<!--===============================================================================================-->
    <script src="{{asset('admin/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('admin/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('admin/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('admin/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('admin/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('admin/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('admin/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('admin/js/main.js')}}"></script>

</body>
</html>