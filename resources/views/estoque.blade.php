@extends('layouts.topo')

@section('titulo', 'estoque')

@section('conteudo')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="">
                    <h1 class="display-1 text-center">Estoque</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5 bg-light">
        <div class="container">
            <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))
                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
                    @endif
                @endforeach
            </div>
            <div class="row">
                <div class="p-5 col-md-12" style="">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a href="" class="nav-link active show" data-toggle="tab"
                                                data-target="#tabone">Estoque</a></li>
                        <li class="nav-item" style=""><a class="nav-link" href="" data-toggle="tab"
                                                         data-target="#tabtwo">Entrada</a></li>
                        {{--                        <li class="nav-item"><a href="" class="nav-link" data-toggle="tab" data-target="#tabthree">Venda<br></a>--}}
                        {{--                        </li>--}}
                        <li class="nav-item"><a href="" class="nav-link" data-toggle="tab"
                                                data-target="#tabfour">Saída<br></a></li>
                    </ul>
                    <div class="tab-content mt-2">
                        <div class="tab-pane fade  active show" id="tabone" role="tabpanel">
                            <form>
                                <table class="table" style="">
                                    <thead>
                                    <tr>
                                        <th>Produto</th>
                                        <th>Preço</th>
                                        <th>Em estoque</th>
                                        <th>Local Armazenado</th>
{{--                                        <th>Fornecedor</th>--}}
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($registros1 as $registro1)
                                        <tr>
                                            <th scope="row">{{$registro1->nome}}</th>
                                            <td> {{$registro1->valor}}</td>
                                            <td>{{$registro1->quantidadeTotal.' '.$registro1->medida}}</td>
                                            <td>
                                                @foreach($registros2 as $registro2)
                                                    @if($registro2->produtoId == $registro1->idProduto)
                                                        {{$registro2->localArmazenamento.','}}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>

                                            </td>
                                            @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="tabtwo" role="tabpanel">
                            <form action="{{route('estoque_salvar')}}" method="post">
                                {!! csrf_field() !!}
                                <table>
                                    <tr>
                                        <td>
                                            <!-- Select Basic -->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="Produto"></label>
                                                <div class="col-md-12">
                                                    <select id="produtoId" name="produtoId" class="form-control">
                                                        @foreach($registros1 as $registro)
                                                            <option
                                                                value='{{$registro->idProduto}}'>{{$registro->nome}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="Fornecedor"></label>
                                                <div class="col-md-12">
                                                    <select id="Fornecedor" name="fornecedorId" class="form-control">
                                                        @foreach($registros3 as $registro3)
                                                            <option
                                                                value='{{$registro3->idFornecedor}}'>{{$registro3->nomeFantasia}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="Validade"></label>
                                                <div class="col-md-12">
                                                    <label class="col-md-4 control-label"
                                                           for="Data">Data Validade</label>
                                                    <input id="Validade" name="validade" type="text"
                                                           placeholder="00/00/0000" class="form-control input-md"
                                                           required="">

                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="Quantidade"></label>
                                                <div class="col-md-12">
                                                    <input id="QuantidadeEnt" name="Quantidade" type="text"
                                                           placeholder="Quantidade" class="form-control input-md"
                                                           required="">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="Local Armazenamento"></label>
                                                <div class="col-md-12">
                                                    <input id="Local Armazenamento" name="localArmazenamento"
                                                           type="text"
                                                           placeholder="Local Armazenamento"
                                                           class="form-control input-md"
                                                           required="">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="Dia da Colheita"></label>
                                                <div class="col-md-12">
                                                    <label class="col-md-4 control-label"
                                                           for="Data">Data Colheita</label>
                                                    <input id="dataColheita" name="dataColheita" type="text"
                                                           placeholder="00/00/0000" class="form-control input-md"
                                                           required="">

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
                                                {{--                                                <button type="submit"--}}
                                                {{--                                                        class="btn btn-primary my-2 mx-0 ml-5">--}}
                                                {{--                                                    Cancelar<br>--}}
                                                {{--                                                </button>--}}
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="tabthree" role="tabpanel">
                            <form action="" method="post">
                                {!! csrf_field() !!}
                                <table>
                                    <tr>
                                        <td>
                                            <!-- Select Basic -->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="Produto"></label>
                                                <div class="col-md-12">
                                                    <select id="Produto" name="produtoId" class="form-control">
                                                        <option value="1">Option one</option>
                                                        <option value="2">Option two</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="Quantidade"></label>
                                                <div class="col-md-12">
                                                    <input id="Quantidade" name="quantidade" type="text"
                                                           placeholder="Quantidade" class="form-control input-md"
                                                           required="">

                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="Valor"></label>
                                                <div class="col-md-12">
                                                    <input id="Valor" name="valor" type="number" placeholder="Valor"
                                                           class="form-control input-md" required="">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="Validade"></label>
                                                <div class="col-md-12">
                                                    <input id="Validade" name="validade" type="text"
                                                           placeholder="dd/mm/aaaa" class="form-control input-md"
                                                           required="">

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
                                                {{--                                                <button type="submit"--}}
                                                {{--                                                        class="btn btn-primary my-2 mx-0 ml-5">--}}
                                                {{--                                                    Cancelar<br>--}}
                                                {{--                                                </button>--}}
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="tabfour">
                            <form action="{{route('EstoqueController@retira')}}" method="post">
                                {!! csrf_field() !!}
                                <table>
                                    <tr>
                                        <td>
                                            <!-- Select Basic -->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="Produto"></label>
                                                <div class="col-md-12">
                                                    <select id="Produto" name="produtoId" class="form-control">
                                                        @foreach($registros1 as $registro)
                                                            <option
                                                                value='{{$registro->idProduto}}'>{{$registro->nome}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="Quantidade"></label>
                                                <div class="col-md-12">
                                                    <input id="QuantidadeSai" name="Quantidade" type="text"
                                                           placeholder="Quantidade" class="form-control input-md"
                                                           required="">

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
                                                {{--                                                <button type="submit"--}}
                                                {{--                                                        class="btn btn-primary my-2 mx-0 ml-5">--}}
                                                {{--                                                    Cancelar<br>--}}
                                                {{--                                                </button>--}}
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
@endsection()
