@extends('adminlte::page')

@section('title', 'Gerenciar Categorias')

@section('content_header')
<h1>Gerenciar Categorias</h1>
@stop

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">DataTable with default features</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
      <div class="row">
        <div class="col-sm-12">
          <table id="example1" class="table table-bordered table-striped dataTable" role="grid"
            aria-describedby="example1_info">
            <thead>
              <tr role="row">
                <th>SL</th>
                <th>Nome da Categoria</th>
                <th>Número da Ordem</th>
                <th>Data de criação</th>
                <th>Ação</th>
              </tr>
            </thead>
            <tbody>
              @php($i = 1)
              @foreach($categories as $cate)
              
              <tr role="row" class="odd">
                <td class="">{{ $i++ }}</td>
                <td>{{ $cate->category_name }}</td>
                <td class="sorting_1">{{ $cate->order_number }}</td>
                <td>{{ $cate->added_on }}</td>
                <td>
                  
                  <div class="dropdown show">
                    <a class="btn btn-default dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Mais
                    </a>
                  
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="#">Pendente</a>
                      <a class="dropdown-item" href="#">Editar</a>
                      <a class="dropdown-item" href="#">Deletar</a>
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach
              
            </tbody>
            <tfoot>
              <tr>
                <th>SL</th>
                <th>Nome da Categoria</th>
                <th>Número da Ordem</th>
                <th>Data de confirmação</th>
                <th>Ação</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      
    </div>
  </div>
  <!-- /.card-body -->
</div>


@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
@stop

@section('js')
<script>
console.log('Hi!');
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script>
    // $('#example1').DataTable({
    //   "paging": false,
    //   "lengthChange": false,
    //   "searching": false,
    //   "ordering": true,
    //   "info": false,
    //   "autoWidth": false,
    // });

    $(document).ready( function () {
    $('#example1').DataTable();
    } );
</script>

@stop