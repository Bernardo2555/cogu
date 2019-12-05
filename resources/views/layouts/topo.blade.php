<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
          type="text/css">
    <link rel="shortcut icon" href="{!! asset('css/images/logo.png') !!}">
    <link rel="stylesheet" href="{!!asset('css/wireframe.css') !!}" type="text/css">
    <script type="text/javascript" src="{!! asset('js/jquery-3.2.0.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/bootstrap.min.js')!!}"></script>
    <script type="text/javascript" src="{!! asset('js/bootstrap-notify.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/jquery.mask.min.js') !!}"></script>
    <script type="text/javascript">
        $(document).ready(function ($) {

            /**
             * @return {string}
             */
            var SPMaskBehavior = function (val) {
                    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
                },
                spOptions = {
                    onKeyPress: function (val, e, field, options) {
                        field.mask(SPMaskBehavior.apply({}, arguments), options);
                    }
                };

            $('#CNPJEnt').mask('00.000.000/0000-00');
            $('#CNPJSai').mask('00.000.000/0000-00');
            $('#dataNascimentoEnt').mask('00/00/0000');
            $('#dataNascimentoSai').mask('00/00/0000');
            $('#Validade').mask('00/00/0000');
            $('#dataColheita').mask('00/00/0000');
            $('#RGEnt').mask('00.000.000-0');
            $('#RGSai').mask('00.000.000-0');
            $('#CPFEnt').mask('000.000.000-00');
            $('#CPFSai').mask('000.000.000-00');
            $('#CEPEnt').mask('00.000-000');
            $('#CEPSai').mask('00.000-000');
            $('#valorEnt').mask("##############################0.00", {reverse: true});
            $('#valorSai').mask("##############################0.00", {reverse: true});
            $('#quantidadeMínima').mask("##############################0.00", {reverse: true});
            $('#QuantidadeEnt').mask("##############################0.00", {reverse: true});
            $('#QuantidadeSai').mask("##############################0.00", {reverse: true});
            $('#TelefoneEnt').mask(SPMaskBehavior, spOptions);
            $('#TelefoneSai').mask(SPMaskBehavior, spOptions);
        });

        function confirmar() {
            console.log('teste!');
            alert('teste!');

        }
    </script>
</head>
<body>
<div class="bg-info">
    <div class="container">
        <div class="row">
            <div class="col-lg-1 col-md-12">
                <img class="img-fluid" src="{!!asset('css/images/logo.png') !!}">
            </div>
            <div class="col-md-8 offset-md-2 p-1">
                <div class="row text-center">
                    <div class="col-md-12">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a href="{{route('/')}}" class="nav-link">Estoque<br></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="true" aria-expanded="false">Cadastro</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{route('cadastroFornecedor')}}">Fornecedor</a>
                                    <a class="dropdown-item" href="{{route('cadastroFuncionario')}}">Funcionário</a>
                                    <a class="dropdown-item" href="{{route('cadastroProduto')}}">Produto</a></div>
                            </li>
                            {{--                            @hasrole('gerente')--}}
                            {{--                            <li class="nav-item"><a href="{{route('relatorio')}}" class="nav-link">Relatório<br></a>--}}
                            {{--                            </li>--}}
                            {{--                            @endhasrole--}}
                            <li class="nav-item"><a
                                        class="nav-link">Olá {{\Illuminate\Support\Facades\Auth::user()->nome}}!</a>
                            </li>
                            <form class="" method="POST" action="{{route('logout')}}">
                                {!! csrf_field() !!}
                                <li class="nav-item button-green">
                                    <button type="submit" class="btn btn-outline-dark">Logout<br></button>
                                </li>
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@yield('conteudo')

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="http://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous" style=""></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"
        style=""></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"
        style=""></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"
        style=""></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"
        style=""></script>
</body>
</html>

