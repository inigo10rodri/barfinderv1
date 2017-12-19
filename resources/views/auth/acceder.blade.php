@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Accede a nuestra pagina web</div>

                    <div class="panel-body">
                        <div class="clientLogin">

                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <div class="col-md-4 control-label">
                                        <label id="linkCliente">Cliente</label>
                                    </div>
                                    <div class="col-md-4 control-label">
                                        <a href="loginBar" id="linkBar">Bar</a>
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">Correo electronico</label>
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Contraseña</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recuerdame
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4 ">
                                        <button type="submit" class="btn btn-primary">
                                            Entrar
                                        </button>

                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            Has olvidado tu contraseña?
                                        </a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div  class="col-md-8 control-label">
                                        <label>Eres nuevo?</label>
                                        <a href="{{ route('register') }}">Registrate</a>
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