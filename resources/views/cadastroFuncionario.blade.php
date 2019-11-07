@extends('layouts.topo')

@section('titulo', 'cadastroFuncionario')

@section('conteudo')

    <?php $func = \Illuminate\Support\Facades\Auth::user()->idUsuario;
    $nome = \Illuminate\Support\Facades\Auth::user()->nome;
    $end = \Illuminate\Support\Facades\Auth::user()->enderecoId;
    $tel = \Illuminate\Support\Facades\Auth::user()->telefone;
    $cpf = \Illuminate\Support\Facades\Auth::user()->CPF;
    $rg = \Illuminate\Support\Facades\Auth::user()->RG;
    $email = \Illuminate\Support\Facades\Auth::user()->email;

    $ende = \App\Address::find($end);
    $rua = $ende->rua;
    $cep = $ende->CEP;
    $comp = $ende->complemento;
    $num = $ende->numero;

    ?>

    <div class="py-5 text-center" style="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="display-1 text-center">Funcionário<br></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5" style="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12" style="">
                            <div class="flash-message">
                                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                    @if(Session::has('alert-' . $msg))
                                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
                                    @endif
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-md-12 ml-5 pl-5" style="">
                                    <ul class="nav nav-tabs ml-0" style="">
                                        <li class="nav-item"><a href="" class="active nav-link" data-toggle="tab"
                                                                data-target="#tabone">Cadastrar<br></a></li>
                                        <li class="nav-item"><a class="nav-link" href="" data-toggle="tab"
                                                                data-target="#tabtwo">Alterar<br></a></li>
                                    </ul>
                                    <div class="tab-content mt-2">

                                        <div class="tab-pane fade show active" id="tabone" role="tabpanel">
                                            <form method="post" action="{{route('funcionario_salvar')}}">
                                                {!! csrf_field() !!}
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label"
                                                                       for="Nome"></label>
                                                                <div class="col-md-12">
                                                                    <input id="Nome" name="Nome" type="text"
                                                                           placeholder="Nome"
                                                                           class="form-control input-md"
                                                                           required="">

                                                                </div>
                                                            </div>

                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label" for="RG"></label>
                                                                <div class="col-md-12">
                                                                    <input id="RGEnt" name="RG" type="text"
                                                                           placeholder="RG"
                                                                           class="form-control input-md" required="">

                                                                </div>
                                                            </div>

                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label"
                                                                       for="Endereço"></label>
                                                                <div class="col-md-12">
                                                                    <input id="Endereco" name="Endereco" type="text"
                                                                           placeholder="Endereço"
                                                                           class="form-control input-md" required="">

                                                                </div>
                                                            </div>

                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label"
                                                                       for="Número"></label>
                                                                <div class="col-md-12">
                                                                    <input id="Numero" name="Numero" type="number"
                                                                           placeholder="Número"
                                                                           class="form-control input-md" required="">

                                                                </div>
                                                            </div>

                                                            <div
                                                                class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                                                <div class="col-md-12">
                                                                    <input id="email" type="email" class="form-control"
                                                                           name="Email" placeholder="Email" required>

                                                                    @if ($errors->has('email'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('email') }}</strong>
                                                                         </span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="form-group{{ $errors->has('email_confirmation') ? ' has-error' : '' }}">

                                                                <div class="col-md-12">
                                                                    <input id="email-confirm" type="email"
                                                                           class="form-control"
                                                                           name="email_confirmation"
                                                                           placeholder="Confirme o Email" required>

                                                                    @if ($errors->has('email_confirmation'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('email_confirmation') }}</strong>
                                                                        </span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <input id="dataNascimentoEnt" name="dataNascimento"
                                                                           type="text"
                                                                           placeholder="Data"
                                                                           class="form-control input-md"
                                                                           required="">

                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label"
                                                                       for="Último nome"></label>
                                                                <div class="col-md-12">
                                                                    <input id="ultimoNome" name="ultimoNome"
                                                                           type="text"
                                                                           placeholder="Último nome"
                                                                           class="form-control input-md" required="">

                                                                </div>
                                                            </div>

                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label" for="CPF"></label>
                                                                <div class="col-md-12">
                                                                    <input id="CPFEnt" name="CPF" type="text"
                                                                           placeholder="CPF"
                                                                           class="form-control input-md" required="">

                                                                </div>
                                                            </div>

                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label" for="CEP"></label>
                                                                <div class="col-md-12">
                                                                    <input id="CEPEnt" name="CEP" type="text"
                                                                           placeholder="CEP"
                                                                           class="form-control input-md" required="">

                                                                </div>
                                                            </div>

                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label"
                                                                       for="Complemento"></label>
                                                                <div class="col-md-12">
                                                                    <input id="Complemento" name="Complemento"
                                                                           type="text"
                                                                           placeholder="Complemento"
                                                                           class="form-control input-md">

                                                                </div>
                                                            </div>

                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label"
                                                                       for="Telefone"></label>
                                                                <div class="col-md-12">
                                                                    <input id="TelefoneEnt" name="Telefone" type="tel"
                                                                           placeholder="Telefone"
                                                                           class="form-control input-md" required="">

                                                                </div>
                                                            </div>

                                                            <div
                                                                class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                                                <div class="col-md-12">
                                                                    <input id="password" type="password"
                                                                           class="form-control" name="password"
                                                                           placeholder="Senha"
                                                                           required>

                                                                    @if ($errors->has('password'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('password') }}</strong>
                                                                        </span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                                                <div class="col-md-12">
                                                                    <input id="password-confirm" type="password"
                                                                           class="form-control"
                                                                           name="password_confirmation"
                                                                           placeholder="Confirme a Senha" required>

                                                                    @if ($errors->has('password_confirmation'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                                         </span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <label class="col-md-4 control-label"
                                                                   for="Data">Data nascimento</label>
                                                            <div
                                                                class="form-check text-capitalize w-100 form-control-lg">
                                                                <input class="form-check-input" type="checkbox"
                                                                       id="Gerente" value="on"
                                                                       name="Gerente">
                                                                <label class="form-check-label" for="exampleCheck1">Gerente<br></label>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary my-2">Concluído<br>
                                                            </button>
                                                            {{--                                                            <button type="submit"--}}
                                                            {{--                                                                    class="btn btn-primary my-2 mx-0 ml-5">Cancelar<br>--}}
                                                            {{--                                                            </button>--}}
                                                        </td>
                                                    </tr>
                                                </table>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="tabtwo" role="tabpanel">
                                            <form method="put" action="{{route('funcionario_atualizar')}}">
                                                {{csrf_field()}}
                                                <input type="hidden" name="_method" value="put">
                                                <input type="hidden" name="idUsuario" value="{{$func}}">
                                                <input type="hidden" name="enderecoId" value="{{$end}}">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label"
                                                                       for="CPF"></label>
                                                                <div class="col-md-12">
                                                                    <input id="CPFSai" name="CPF" type="text"
                                                                           placeholder="CPF" value="{{$cpf}}"
                                                                           class="form-control input-md"
                                                                           required="">

                                                                </div>
                                                            </div>

                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label"
                                                                       for="RG"></label>
                                                                <div class="col-md-12">
                                                                    <input id="RGSai" name="RG" type="text"
                                                                           placeholder="RG" value="{{$rg}}"
                                                                           class="form-control input-md"
                                                                           required="">

                                                                </div>
                                                            </div>

                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label"
                                                                       for="Endereço"></label>
                                                                <div class="col-md-12">
                                                                    <input id="Endereco" name="Endereco" type="text"
                                                                           placeholder="Endereço" value="{{$rua}}"
                                                                           class="form-control input-md"
                                                                           required="">

                                                                </div>
                                                            </div>

                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label"
                                                                       for="Número"></label>
                                                                <div class="col-md-12">
                                                                    <input id="Numero" name="Numero" type="number"
                                                                           placeholder="Número" value="{{$num}}"
                                                                           class="form-control input-md"
                                                                           required="">

                                                                </div>
                                                            </div>

                                                            <div
                                                                class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                                                <div class="col-md-12">
                                                                    <input id="email" type="email" class="form-control"
                                                                           value="{{$email}}"
                                                                           name="Email" placeholder="Email" required>

                                                                    @if ($errors->has('email'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('email') }}</strong>
                                                                         </span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="form-group{{ $errors->has('email_confirmation') ? ' has-error' : '' }}">

                                                                <div class="col-md-12">
                                                                    <input id="email-confirm" type="email"
                                                                           class="form-control"
                                                                           name="email_confirmation" value="{{$email}}"
                                                                           placeholder="Confirme o Email" required>

                                                                    @if ($errors->has('email_confirmation'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('email_confirmation') }}</strong>
                                                                        </span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label"
                                                                       for="Data"></label>
                                                                <div class="col-md-12">
                                                                    <input id="dataNascimentoSai" name="dataNascimento"
                                                                           type="text"
                                                                           placeholder="Data"
                                                                           class="form-control input-md"
                                                                           required="">

                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>

                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label"
                                                                       for="Nome"></label>
                                                                <div class="col-md-12">
                                                                    <input id="Nome" name="Nome"
                                                                           type="text"
                                                                           placeholder="Nome" value="{{$nome}}"
                                                                           class="form-control input-md"
                                                                           required="">

                                                                </div>
                                                            </div>

                                                            <!-- Text input-->
                                                            <!--  <div class="form-group">
                                                                  <label class="col-md-4 control-label"
                                                                         for="Último nome"></label>
                                                                  <div class="col-md-12">
                                                                      <input id="ultimoNome" name="ultimoNome"
                                                                             type="text"
                                                                             placeholder="Último nome"
                                                                             class="form-control input-md"
                                                                             required="">

                                                                  </div>
                                                              </div>-->


                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label"
                                                                       for="CEP"></label>
                                                                <div class="col-md-12">
                                                                    <input id="CEPSai" name="CEP" type="text"
                                                                           placeholder="CEP" value="{{$cep}}"
                                                                           class="form-control input-md"
                                                                           required="">

                                                                </div>
                                                            </div>

                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label"
                                                                       for="Complemento"></label>
                                                                <div class="col-md-12">
                                                                    <input id="Complemento" name="Complemento"
                                                                           type="text"
                                                                           placeholder="Complemento" value="{{$comp}}"
                                                                           class="form-control input-md">

                                                                </div>
                                                            </div>

                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label"
                                                                       for="Telefone"></label>
                                                                <div class="col-md-12">
                                                                    <input id="TelefoneSai" name="Telefone" type="text"
                                                                           placeholder="Telefone" value="{{$tel}}"
                                                                           class="form-control input-md"
                                                                           required="">

                                                                </div>
                                                            </div>

                                                            <div
                                                                class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                                                <div class="col-md-12">
                                                                    <input id="password" type="password"
                                                                           class="form-control" name="password"
                                                                           placeholder="Senha"
                                                                           required>

                                                                    @if ($errors->has('password'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('password') }}</strong>
                                                                        </span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                                                <div class="col-md-12">
                                                                    <input id="password-confirm" type="password"
                                                                           class="form-control"
                                                                           name="password_confirmation"
                                                                           placeholder="Confirme a Senha" required>

                                                                    @if ($errors->has('password_confirmation'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                                         </span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <div
                                                                class="form-check text-capitalize w-100 form-control-lg">
                                                                <input class="form-check-input" type="checkbox"
                                                                       id="Gerente" value="on"
                                                                       name="Gerente">
                                                                <label class="form-check-label" for="exampleCheck1">Gerente<br></label>
                                                            </div>
                                                            <div
                                                                class="form-check text-capitalize w-100 form-control-lg">
                                                                <input class="form-check-input" type="checkbox"
                                                                       id="Gerenteoff" value="off"
                                                                       name="Gerente">
                                                                <label class="form-check-label" for="exampleCheck1">Remover
                                                                    gerente<br></label>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary my-2">Atualizar<br>
                                                            </button>
                                                            {{--                                                            <button type="submit"--}}
                                                            {{--                                                                    class="btn btn-primary my-2 mx-0 ml-5">Cancelar<br>--}}
                                                            {{--                                                            </button>--}}
                                                        </td>
                                                    </tr>
                                                </table>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
