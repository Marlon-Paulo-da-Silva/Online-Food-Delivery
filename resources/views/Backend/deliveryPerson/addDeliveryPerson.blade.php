@extends('adminlte::page')

@section('title', 'Entregadores')

@section('content_header')
    <h1>Entregadores</h1>
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
                <h3 class="card-title">Adicionar entregador</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route('dp_save') }}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="delivery_person_name">Nome do entregador</label>
                    <input type="text" class="form-control" id="delivery_person_name" name="delivery_person_name" placeholder="Nome da categoria">
                  </div>
                  <div class="form-group">
                    <label for="delivery_person_phone_number">Número de telefone</label>
                    <input type="number" class="form-control" id="delivery_person_phone_number" name="delivery_person_phone_number" placeholder="Número de telefone">
                  </div>
                  <div class="form-group">
                    <label for="delivery_person_password">Senha</label>
                    <input type="password" class="form-control" id="delivery_person_password" name="delivery_person_password" placeholder="Senha">
                  </div>
                  <div class="form-group">
                    <label for="added_on">Adicionado em</label>
                    <input type="date" class="form-control" id="number" name="added_on">
                  </div>
    
                  <div class="form-group">
                    <label for="delivery_person_status">Status do entregador</label>
                    <div class="radio">
                      <input type="radio" name="delivery_person_status" value="1">Ativo               
                      <input type="radio" name="delivery_person_status" value="0">Inativo               
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