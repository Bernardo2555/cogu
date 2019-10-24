<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>solicitaçãoDoEmail</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
          type="text/css">
    <link rel="shortcut icon" href="{!! asset('css/images/logo.png') !!}">
    <link rel="stylesheet" href="{!!asset('css/wireframe.css') !!}" type="text/css">
</head>

<body>
<div class="bg-info">
    <div class="container">
        <div class="row">
            <div class="p-0 col-lg-4 col-md-12">
                <img class="img-fluid" src="{!!asset('css/images/logo.png') !!}"></div>
        </div>
    </div>
</div>
<div class="py-5 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="display-1 text-center">Recuperar Senha<br></h1>
            </div>
        </div>
    </div>
</div>
<div class="py-5" style="">
    <div class="container">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12" style="">
                        <div class="row">
                            <form action="{{route('password.email')}}" method="post">
                                {!! csrf_field() !!}
                                <div class="col-md-12 p-3" style="">
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
                                    <div class="form-group">
                                        <div class="col-md-12 my-3">
                                            <button type="submit" class="btn btn-primary my-2">Concluído<br>
                                            </button>
                                            {{--                        <button type="submit" class="btn btn-primary my-2 mx-0 ml-5">--}}
                                            {{--                          Cancelar<br></button>--}}
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="py-4" style="">
</div>
</body>

</html>