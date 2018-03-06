<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>
        Sign In | Bootstrap Based Admin Template - Material Design
    </title>
    <!-- Favicon-->
    <link href="../../favicon.ico" rel="icon" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core Css -->
    <link href="../../admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Waves Effect Css -->
    <link href="../../admin/plugins/node-waves/waves.css" rel="stylesheet"/>
    <!-- Animation Css -->
    <link href="../../admin/plugins/animate-css/animate.css" rel="stylesheet"/>
    <!-- Custom Css -->
    <link href="../../admin/css/style.css" rel="stylesheet">
</link>
</link>
</link>
</link>
</link>
</meta>
</meta>
</head>
<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">
                
                <b>
                    FUNDEMUJER
                </b>
            </a>
            <small>
                SISTEMA DE ATENCION A RECLAMOS DE LOS USUARIOS                
            </small>
        </div>
        <div class="card">
            <div class="body">
                <form action="{{ route('login') }}" id="sign_in" method="POST">
                    {{ csrf_field() }}
                    <div class="msg">
                        Ingresa tus datos para inicias sesión
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">mail</i>
                        </span>
                        <div class="form-line">                            
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                            placeholder="E-mail" required autofocus>
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" id="password" class="form-control" name="password" placeholder="Password" required>

                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input class="filled-in chk-col-pink" type="checkbox" id="rememberme" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="rememberme">
                                
                                Recuérdame
                            </label>
                        </input>
                    </div>
                    <div class="col-xs-4">
                        <button class="btn btn-block bg-pink waves-effect" type="submit">
                            Iniciar
                        </button>
                    </div>
                </div>
                <div class="row m-t-15 m-b--20">
                    <div class="col-xs-6">
                        <a href="{{ route('register') }}">
                            Regístrate ahora!
                        </a>
                    </div>
                    <div class="col-xs-6 align-right">
                        <a href="{{ route('password.request') }}">
                            Olvidaste tu contraseña?
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Jquery Core Js -->
<script src="../../admin/plugins/jquery/jquery.min.js">
</script>
<!-- Bootstrap Core Js -->
<script src="../../admin/plugins/bootstrap/js/bootstrap.js">
</script>
<!-- Waves Effect Plugin Js -->
<script src="../../admin/plugins/node-waves/waves.js">
</script>
<!-- Validation Plugin Js -->
<script src="../../admin/plugins/jquery-validation/jquery.validate.js">
</script>
<!-- Custom Js -->
<script src="../../admin/js/admin.js">
</script>
<script src="../../admin/js/pages/examples/sign-in.js">
</script>
</body>
</html>