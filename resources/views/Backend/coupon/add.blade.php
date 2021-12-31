@extends('adminlte::page')

@section('title', 'Cupons')

@section('content_header')
    <h1>Cupons</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="offset-3 col-md-6 my-lg-5">
          @if(Session::get('sms'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>{{ Session::get('sms') }}</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif
            <!-- general form elements -->
            <div class="card">
              <div class="card-header text-center">
                <h3 class="card-title">Adicionar cupom</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route('c_save') }}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="coupon_code">Nome do código</label>
                    <input type="text" class="form-control" id="coupon_code" name="coupon_code" placeholder="Código">
                  </div>
                  <div class="form-group">
                    <label for="coupon_value">Valor de desconto</label>
                    <input type="number" class="form-control" id="coupon_value" name="coupon_value" placeholder="Valor">
                  </div>
                  <div class="form-group">
                    <label for="cart_min_value">Valor mínimo do carrinho</label>
                    <input type="text" class="form-control" id="cart_min_value" name="cart_min_value" placeholder="Valor mínimo">
                  </div>
                  <div class="form-group">
                    <label for="expired_on">Expira em</label>
                    <input type="date" class="form-control" id="expired_on" name="expired_on">
                  </div>

                  <div class="form-group">
                    <label for="added_on">Adicionado em</label>
                    <input type="date" class="form-control" id="number" name="added_on">
                  </div>
    
                  <div class="form-group">
                    <label for="coupon_type">Selecionar tipo de cupom</label>
                    <div class="radio">
                      <input type="radio" name="coupon_type" value="1"> Porcentagem               
                      <input type="radio" name="coupon_type" value="0"> Fixado               
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="coupon_status">Status do cupom</label>
                    <div class="radio">
                      <input type="radio" name="coupon_status" value="1"> Ativo               
                      <input type="radio" name="coupon_status" value="0"> Inativo               
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="btn" class="btn btn-outline-warning btn-block">Salvar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop