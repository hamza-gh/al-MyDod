<link rel="stylesheet" href="{{asset('assets\css\bootstrap.min.css')}}" id="bootstrap-css">
<link rel="stylesheet" href="{{asset('assets\css\login.css')}}">

    <script src="{{asset('assets\resources\js\bootstrap.min.js')}}"></script>
    <script src="{{asset('assets\resources\js\jquery-3.5.1.min.js')}}"></script>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
    <!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first"><br>
      <img src="assets/img/alten.png" id="icon" alt="User Icon"  width="100px" />
      <div><br>
      <h1 class="logo">My Dod</h1></div>
    </div>

    <!-- Login Form -->
    <form method="POST" action="{{ route('login') }}">
    @csrf


      <input type="email" id="email"  class="form-control @error('email') is-invalid @enderror fadeIn second"
      name="email" value="{{ old('email') }}" required placeholder="Votre Email" autocomplete="email" autofocus>
                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
         
      <input type="password" id="password" class="form-control @error('password') is-invalid @enderror fadeIn third"
       name="password" required autocomplete="current-password">
        


                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

<br>
       <button type="submit" class="btn btn-primary">

                                    Connection
                                </button>
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">forgot password ?</a>
    </div>

  </div>
</div>
</body>
</html>