@extends('layouts.topo')

@section('titulo', 'relatorio')

@section('conteudo')
  <div class="py-5 text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="display-1 text-center">Relatório<br></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-4" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-12 p-3">
{{--          <div class="row">--}}
{{--            <div class="col-md-3 ml-0 mb-3">--}}
{{--              <div class="btn-group">--}}
{{--                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Mês<br></button>--}}
{{--                <div class="dropdown-menu"> <a class="dropdown-item" href="#">Action</a>--}}
{{--                  <div class="dropdown-divider"></div>--}}
{{--                  <a class="dropdown-item" href="#">Separated link</a>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-3">--}}
{{--              <div class="btn-group">--}}
{{--                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Ano<br></button>--}}
{{--                <div class="dropdown-menu"> <a class="dropdown-item" href="#">Action</a>--}}
{{--                  <div class="dropdown-divider"></div>--}}
{{--                  <a class="dropdown-item" href="#">Separated link</a>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-3"><a class="btn btn-primary" href="#">OK<br></a></div>--}}
{{--            <div class="col-md-3"><a class="btn btn-primary" href="#">Gerar Relatório<br></a></div>--}}
{{--          </div>--}}
          <form method="post" action="">
            <div class="table-responsive">
              <table class="table" style="">
                <thead>
                  <tr>
                    <th>Produto</th>
                    <th>Gasto</th>
                    <th>Lucro Bruto</th>
                    <th>Lucro Liquido<br></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Cogumelo</th>
                    <td>R$50,00</td>
                    <td>R$200,00</td>
                    <td>R$150,00</td>
                  </tr>
                  <tr>
                    <th scope="row">Embalagem</th>
                    <td>R$150,00</td>
                    <td>R$187,00</td>
                    <td>R$37,00</td>
                  </tr>
                  <tr>
                    <th scope="row">Total</th>
                    <td>R$200,00</td>
                    <td>R$387,00</td>
                    <td>R$187,00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endsection()