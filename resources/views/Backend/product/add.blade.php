@extends('adminlte::page')

@section('title', 'Produtos')

@section('content_header')
    <h1>Produtos</h1>
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
                <h3 class="card-title">Adicionar produto</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route('p_save') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="product_name">Nome do produto</label>
                    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Nome do produto">
                  </div>
                  <div class="form-group">
                    <label>Categoria</label>
                    <select name="category_id" id="category_id" class="form-control">
                      <option>>---Selecione a categoria---<</option>
                      @foreach($categories as $cate)
                      <option value={{ $cate->category_id }}>{{ $cate->category_name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="product_detail">Detalhe do produto</label>
                    <textarea type="text" name="product_detail" id="product_detail" class="form-control" rows="5"></textarea>
                  </div>
                  <div class="form-group">
                    <label>imagem do produto</label>
                    <input type="file" class="form-control" id="product_image" name="product_image">
                  </div>
                  
                     
                  <div class="form-group">
                    <label for="product_status">Status do produto</label>
                    <div class="radio">
                      <input type="radio" name="product_status" value="1">Ativo               
                      <input type="radio" name="product_status" value="0">Inativo               
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="btn" class="btn btn-outline-primary btn-block">Salvar</button>
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