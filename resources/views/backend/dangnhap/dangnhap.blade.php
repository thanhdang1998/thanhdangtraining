@extends('backend.indexdangnhap')
@section('noidung')

<div class="login-box">
  <div class="login-logo">
    <a><b>Rivercrane</b>Viet nam</a>
  </div>
  <div class="card">
    <div class="card-body login-card-body">
    <form method="post" action="{{route('postdangnhap')}}" name="login">
        @csrf
        <div class="loimail"></div>
        <span style="color:red">@error('loimail'){{$message}}@enderror</span>
        <div class="input-group mb-3">
          <input type="test" class="form-control email" placeholder="Email" name="email" value={{old('email')}}>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <span style="color:red">@error('email'){{$message}}@enderror</span>
        <div class="loipass"></div>
        <div class="input-group mb-3">
          <input type="password" class="form-control pass" placeholder="Password" name="pass">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <span style="color:red">@error('pass'){{$message}}@enderror</span>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember_me">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <div class="col-4">
            <input type="submit" class="btn btn-primary btn-block sub" value="Sign In">
          </div>
        </div>

      </form>
    </div>
  </div>
</div>
@endsection