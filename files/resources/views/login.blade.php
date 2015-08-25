@extends('ipay')
@section('content')


<style type="text/css">

    body {
        background: #eee !important;    
    }

    .wrapper {  
        margin-top: 80px;
      margin-bottom: 80px;
    }

    .form-signin {
      max-width: 380px;
      padding: 15px 35px 45px;
      margin: 0 auto;
      background-color: #fff;
      border: 1px solid rgba(0,0,0,0.1);  

      .form-signin-heading,
        .checkbox {
          margin-bottom: 30px;
        }

        .checkbox {
          font-weight: normal;
        }

        .form-control {
          position: relative;
          font-size: 16px;
          height: auto;
          padding: 10px;              
        }

        input[type="text"] {
          margin-bottom: -1px;
          border-bottom-left-radius: 0;
          border-bottom-right-radius: 0;
        }

        input[type="password"] {
          margin-bottom: 20px;
          border-top-left-radius: 0;
          border-top-right-radius: 0;
        }
    }
</style>

<div class="wrapper">

  <form class="form-horizontal form-signin" role="form" method="POST" action="{{ url('/auth/login') }}">
  @if (count($errors) > 0)
      <div class="alert alert-danger">
          <strong>Whoops!</strong> There were some problems with your input.<br><br>
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

   
    <input type="hidden" name="_token" value="{{ csrf_token() }}">      
    <h2 class="form-signin-heading">Please login</h2>
    <input class="form-control" placeholder="Email Address" required="" autofocus="" name="email" value="{{ old('email') }}" />
    <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
    <label class="checkbox">
      <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
    </label>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
  </form>
</div>
@endsection