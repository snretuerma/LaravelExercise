@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s10 offset-l1">
            <div class="card-panel">
                <div class="row">
                  <div class="col s12 offset-s1">
                    <h4>Login</h4>
                  </div>
                </div>
                <div class="divider"></div>
                <div class="row">
                <div class="col s12">
                    <form class="col s12" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <div class="row">
                          <div class="input-field col s8 offset-s2">
                            <i class="material-icons prefix">account_circle</i>
                            <input placeholder="Email" id="email" type="email" class="validate" name="email" >
                          </div>
                        </div>

                        <div class="row">
                          <div class="input-field col s8 offset-s2">
                            <i class="material-icons prefix">lock</i>
                            <input placeholder="password" id="password" type="password" class="validate" name="password">
                          </div>
                        </div>

                        <div class="row">
                            <div class="col s6 offset-s5">
                                <div>
                                  <input id="rememberMe" type="checkbox" name="remember">
                                  <label for="rememberMe" >
                                       Remember Me
                                  </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s6 offset-s5">
                                <button type="submit" class="btn waves-effect waves-light">
                                    <i class="material-icons right">send</i> Login
                                </button>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col s5 offset-m5">
                            <a href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                          </div>
                        </div>
                    </form>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
