<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
          type="text/css">
    <link rel="shortcut icon" href="{!! asset('css/images/logo.png') !!}">
    <link rel="stylesheet" href="{!!asset('css/theme.css') !!}" media="all" type="text/css">
    <!--TODO arrumar .css e imagens das outras interfaces-->
</head>

<body class="">
<div class="py-5 bg-light" style="">
    <div class="container">
        <div class="row">
            <div class="p-5 col-md-7 d-flex flex-column justify-content-center"><img class="img-fluid d-block"
                                                                                     src="{!! asset('css/images/cogumais_v2.png') !!}">
            </div>
            <div class="p-5 col-md-5">
                <h3 class="mb-3">Login<br></h3>

                <form class="" method="POST" action="{{route('login')}}">
                    {!! csrf_field() !!}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control" name="email" placeholder="Email"
                                   value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control" name="password" placeholder="Senha"
                                    required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <input type="password" class="form-control" name="password"--}}
{{--                                                   placeholder="Senha">--}}
{{--                    </div>--}}
                    <a class="btn btn-light" href="{{route('password.request')}}">Esqueci minha senha<br></a>
                    <small class="form-text mb-1 text-body">Nunca compartilhe seus dados com ninguém.</small>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </form>

                <small class="form-text text-muted">
                </small>
            </div>
            <small class="form-text text-muted">
            </small>
        </div>
        <small class="form-text text-muted">
        </small>
    </div>
    <small class="form-text text-muted"></small>
</div>
<div class="bg-info p-4">
    <div class="container">
        <div class="row">
            <div class="p-0 col-lg-4 col-md-6">
                <img class="img-fluid" src="{!! asset('css/images/logo.png') !!}"></div>
            <div class="col-md-5 align-self-center p-4 offset-md-1">
                <h4>Heading</h4>
                <p class="mb-4 text-primary">795 Folsom Ave, Suite 600 <br>San Francisco, CA 94107 <br> <abbr
                            title="Phone">P:</abbr> (123) 456-7890 </p>
                <div class="row text-center">
                    <div class="col-md-2 col-3">
                        <a href="https://www.facebook.com/cogumais/" target="_blank"><i
                                    class="fa fa-facebook text-primary fa-2x"></i></a>
                    </div>
                    <div class="col-md-2 col-3">
                        <a href="https://www.instagram.com/cogumais/?hl=pt-br" target="_blank"><i
                                    class="fa fa-instagram text-primary fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>