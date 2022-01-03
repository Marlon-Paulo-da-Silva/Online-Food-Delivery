@extends('adminlte::page')

@section('title', 'Categorias')

@section('content_header')
    <h1>Categorias</h1>
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
                <h3 class="card-title">Adicionar categoria</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route('cate_save') }}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="category_name">Nome da Categoria</label>
                    <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Nome da categoria">
                  </div>
                  <div class="form-group">
                    <label for="ordem">Numero de ordem</label>
                    <input type="number" class="form-control" id="ordem" name="order_number" placeholder="Número de ordem">
                  </div>
                  <div class="form-group">
                    <label for="added_on">Adicionado em</label>
                    <input type="date" class="form-control" id="number" name="added_on">
                  </div>
    
                  <div class="form-group">
                    <label for="added_on">Status da Categoria</label>
                    <div class="radio">
                      <input type="radio" name="category_status" checked value="1">Ativo               
                      <input type="radio" name="category_status" value="0">Inativo               
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