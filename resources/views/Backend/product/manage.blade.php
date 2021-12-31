@extends('adminlte::page')

@section('title', 'Gerenciar Entregadores')

@section('content_header')
<h1>Gerenciar Entregadores</h1>
@stop

@section('content')

<div class="card">
  {{-- Alerta de sucesso --}}
    @if(Session::get('sms'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ Session::get('sms') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
    {{-- final do Alerta de sucesso --}}
  <div class="card-header">
    <h3 class="card-title">Controle dos entregadores</h3>
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
                <th>Nome</th>
                <th>Categoria</th>
                <th>Imagem</th>
                <th>Detalhe</th>
                <th>Ação</th>
              </tr>
            </thead>
            <tbody>
              @php($i = 1)
              @foreach($products as $p) 
              
              <tr role="row" class="odd">
                <td class="">{{ $i++ }}</td>
                <td>{{ $p->product_name }}</td>
                <td>{{ $p->category_name }}</td>
                <td><img style="height:60px;" src="/BackEndSourceFile/product_img/{{ $p->product_image }}" alt="{{ $p->product_name }}"></td>
                <td>{{ $p->product_detail }}</td>
                <td>
                      @if($p->product_status == 1)
                      <a class="btn btn-outline-success" href="/products/inactive/{{ $p->product_id }}">
                        <i class="fas fa-toggle-on" title="Clique para Inativar"></i>
                      </a>
                      @else
                      <a class="btn btn-outline-light" href="/products/active/{{ $p->product_id }}">
                        <i class="fas fa-toggle-off" title="Clique para Ativar"></i>
                      </a>
                      @endif
                      <a type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#edit{{ $p->product_id }}">
                        <i class="fas fa-edit" title="Clique para editar"></i>
                      </a>
                      <a class="btn btn-outline-danger" href="/products/delete/{{ $p->product_id }}">
                       <i class="fas fa-trash" title="Clique para apagar"></i>
                      </a>
                </td>
              </tr>

              {{-- Modal --}}
                <div class="modal fade" id="edit{{ $p->product_id }}" tabindex="-1" role="dialog" aria-labelledby="edit{{ $p->product_id }}" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <form role="form" action="{{ route('p_update') }}" method="post">
                      
                      <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Alterar Produto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="card">
      
                        <!-- /.card-header -->
                        <!-- form start -->
                          @csrf
                          <div class="card-body">

                            <div class="form-group">
                              <label for="product_name">Nome do produto</label>
                              <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Nome do produto" value="{{ $p->product_name }}">
                              <input type="hidden" class="form-control" id="product_id" name="product_id" value="{{ $p->product_id }}">
                            </div>
                            <div class="form-group">
                              <label>Categoria</label>
                              <select name="category_id" id="category_id" class="form-control">
                                <option value={{ $p->category_id }}>{{ $p->category_name }}</option>
                                @foreach($categories as $cate)
                                <option value={{ $cate->category_id }}>{{ $cate->category_name }}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="product_detail">Detalhe do produto</label>
                              <textarea type="text" name="product_detail" id="product_detail" class="form-control" rows="5">{{ $p->product_detail }}</textarea>
                            </div>
                            <div class="form-group">
                              <label>imagem do produto</label>
                              <img src="{{ asset('/BackEndSourceFile/product_img/'.$p->product_image) }}" style="height: 150px; width: 150px; border-radius: 50% ">
                              <input type="file" class="form-control" id="product_image" name="product_image" accept="image/*">
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
                      </div>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" name="btn" class="btn btn-outline-warning btn-block">Atualizar</button>
                      </div>
                    </div>
                    </form>
                  
                  </div>
                </div>
                {{-- End Modal --}}
              @endforeach  
              
            </tbody>
            <tfoot>
              <tr>
                <th>SL</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Imagem</th>
                <th>Detalhe</th>
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