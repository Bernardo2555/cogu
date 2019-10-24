@extends('layouts.topo')

@section('titulo', 'cadastroFornecedor')

@section('conteudo')
    <div class="py-5 text-center" style="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="display-1 text-center">Fornecedor<br></h1>
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
                                            <form action="{{route('fornecedor_salvar')}}" method="post">
                                                {!! csrf_field() !!}
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label"
                                                                       for="Nome da empresa"></label>
                                                                <div class="col-md-12">
                                                                    <input id="Nome da empresa" name="nomeDaEmpresa"
                                                                           type="text" placeholder="Nome da empresa"
                                                                           class="form-control input-md" required="">

                                                                </div>
                                                            </div>

                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label"
                                                                       for="CNPJ"></label>
                                                                <div class="col-md-12">
                                                                    <input id="CNPJEnt" name="CNPJ" type="text"
                                                                           placeholder="CNPJ"
                                                                           class="form-control input-md" required="">

                                                                </div>
                                                            </div>

                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label"
                                                                       for="Endereço"></label>
                                                                <div class="col-md-12">
                                                                    <input id="Endereço" name="rua" type="text"
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
                                                                           placeholder="Numero"
                                                                           class="form-control input-md" required="">

                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label"
                                                                       for="Nome do Vendedor"></label>
                                                                <div class="col-md-12">
                                                                    <input id="Nome do Vendedor" name="nomeDoVendedor"
                                                                           type="text" placeholder="Nome do Vendedor"
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
                                                                           type="text" placeholder="Complemento"
                                                                           class="form-control input-md" required="">

                                                                </div>
                                                            </div>

                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label"
                                                                       for="Telefone"></label>
                                                                <div class="col-md-12">
                                                                    <input id="TelefoneEnt" name="Telefone" type="text"
                                                                           placeholder="Telefone"
                                                                           class="form-control input-md" required="">

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <div class="form-check text-capitalize w-100 form-control-lg">
                                                                <button type="submit" class="btn btn-primary my-2">
                                                                    Concluído<br>
                                                                </button>
{{--                                                                <button type="submit"--}}
{{--                                                                        class="btn btn-primary my-2 mx-0 ml-5">--}}
{{--                                                                    Cancelar<br>--}}
{{--                                                                </button>--}}
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="tabtwo" role="tabpanel">
                                            <form action="{{route('fornecedor_alterar')}}" method="put">
                                                {!! csrf_field() !!}
                                                <table>
                                                    <tr>
                                                        <td>

                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label"
                                                                       for="CNPJ"></label>
                                                                <div class="col-md-12">
                                                                    <input id="CNPJSai" name="CNPJ" type="text"
                                                                           placeholder="CNPJ"
                                                                           class="form-control input-md" required="">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label"
                                                                       for="Nome do Vendedor"></label>
                                                                <div class="col-md-12">
                                                                    <input id="Nome do Vendedor" name="Nome do Vendedor"
                                                                           type="text" placeholder="Nome do Vendedor"
                                                                           class="form-control input-md" required="">

                                                                </div>
                                                            </div>

                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label"
                                                                       for="Endereço"></label>
                                                                <div class="col-md-12">
                                                                    <input id="Endereço" name="Endereço" type="text"
                                                                           placeholder="Endereço"
                                                                           class="form-control input-md" required="">

                                                                </div>
                                                            </div>

                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label"
                                                                       for="Número"></label>
                                                                <div class="col-md-12">
                                                                    <input id="Número" name="Número" type="number"
                                                                           placeholder="Número"
                                                                           class="form-control input-md" required="">

                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>

                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label"
                                                                       for="Nome da empresa"></label>
                                                                <div class="col-md-12">
                                                                    <input id="Nome da empresa" name="Nome da empresa"
                                                                           type="text" placeholder="Nome da empresa"
                                                                           class="form-control input-md" required="">

                                                                </div>
                                                            </div>

                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label" for="CEP"></label>
                                                                <div class="col-md-12">
                                                                    <input id="CEPSai" name="CEP" type="text"
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
                                                                           type="text" placeholder="Complemento"
                                                                           class="form-control input-md" required="">

                                                                </div>
                                                            </div>

                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label"
                                                                       for="Telefone"></label>
                                                                <div class="col-md-12">
                                                                    <input id="TelefoneSai" name="Telefone" type="text"
                                                                           placeholder="Telefone"
                                                                           class="form-control input-md" required="">

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <div class="form-check text-capitalize w-100 form-control-lg">
                                                                <button type="submit" class="btn btn-primary my-2">
                                                                    Concluído<br>
                                                                </button>
                                                                {{--                                                                <button type="submit"--}}
                                                                {{--                                                                        class="btn btn-primary my-2 mx-0 ml-5">--}}
                                                                {{--                                                                    Cancelar<br>--}}
                                                                {{--                                                                </button>--}}
                                                            </div>
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
