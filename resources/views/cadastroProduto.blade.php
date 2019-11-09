@extends('layouts.topo')

@section('titulo', 'cadastroProduto')

@section('conteudo')
    <div class="py-5 text-center" style="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="display-1 text-center">Produto<br></h1>
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
                                            <form action="{{route('produto_salvar')}}" method="post" >
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
                                                                           class="form-control input-md" required="">

                                                                </div>
                                                            </div>

                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label"
                                                                       for="Unidade de medida"></label>
                                                                <div class="col-md-12">
                                                                    <input id="valorEnt"
                                                                           name="Valor" type="text"
                                                                           placeholder="Valor"
                                                                           class="form-control input-md" required="">

                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label"
                                                                       for="Quantidade minima"></label>
                                                                <div class="col-md-12">
                                                                    <input id="QuantidadeEnt"
                                                                           name="quantidadeMinima"
                                                                           type="text"
                                                                           placeholder="Quantidade mínima"
                                                                           class="form-control input-md" required="">

                                                                </div>
                                                            </div>

                                                            <!-- Select Basic -->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label" for="selectbasic">Medida</label>
                                                                <div class="col-md-12">
                                                                    <select id="medida" name="medida" class="form-control">
                                                                        <option value="g">g</option>
                                                                        <option value="kg">kg</option>
                                                                        <option value="ml">ml</option>
                                                                        <option value="L">L</option>
                                                                        <option value="uni.">uni.</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <div class="form-check text-capitalize w-100 form-control-lg">
                                                                <button type="submit" class="btn btn-primary my-2" >
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
                                            <form action="{{route('produto_alterar')}}" method="put">
                                                {!! csrf_field() !!}
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label"
                                                                       for="Nome"></label>
                                                                <div class="col-md-12">
                                                                    <input id="ID do protudo" name="produtoId" type="number"
                                                                           placeholder="ID do protudo"
                                                                           class="form-control input-md" required="">

                                                                </div>
                                                            </div>

                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label"
                                                                       for="Valor"></label>
                                                                <div class="col-md-12">
                                                                    <input id="valorSai"
                                                                           name="valor" type="text"
                                                                           placeholder="Valor"
                                                                           class="form-control input-md" required="">

                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label"
                                                                       for="Nome"></label>
                                                                <div class="col-md-12">
                                                                    <input id="Nome" name="Nome" type="text"
                                                                           placeholder="Nome"
                                                                           class="form-control input-md" required="">

                                                                </div>
                                                            </div>

                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label"
                                                                       for="Quantidade minima"></label>
                                                                <div class="col-md-12">
                                                                    <input id="QuantidadeSai"
                                                                           name="quantidadeMinima"
                                                                           type="text"
                                                                           placeholder="Quantidade mínima"
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
