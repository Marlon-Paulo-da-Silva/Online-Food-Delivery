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
    <h3 class="card-title">Controle dos cupons</h3>
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
                <th>Código</th>
                <th>Valor</th>
                <th>Tipo</th>
                <th>Compra min</th>
                <th>Expira em</th>
                <th>Adicionado em</th>
                <th>Ação</th>
              </tr>
            </thead>
            <tbody>
              @php($i = 1)
              @foreach($coupon as $c) 
              
              <tr role="row" class="odd">
                <td class="">{{ $i++ }}</td>
                <td>{{ $c->coupon_code }}</td>
                <td>
                  @if($c->coupon_type == 1)
                    {{ $c->coupon_value }}%
                  @else
                    R$ {{ $c->coupon_value }}
                  @endif
                </td>
                <td class="sorting_1">
                  @if($c->coupon_type == 1)
                    Porcentagem
                  @else
                    Valor Fixo
                  @endif
                
                </td>
                <td class="sorting_1">R$ {{ $c->cart_min_value }}</td>
                <td class="sorting_1">{{ $c->expired_on }}</td>
                <td>{{ $c->added_on }}</td>
                <td>
                      @if($c->coupon_status == 1)
                      <a class="btn btn-outline-success" href="/coupons/inactive/{{ $c->coupon_id }}">
                        <i class="fas fa-toggle-on" title="Clique para Inativar"></i>
                      </a>
                      @else
                      <a class="btn btn-outline-light" href="/coupons/active/{{ $c->coupon_id }}">
                        <i class="fas fa-toggle-off" title="Clique para Ativar"></i>
                      </a>
                      @endif
                      <a type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#edit{{ $c->coupon_id }}">
                        <i class="fas fa-edit" title="Clique para editar"></i>
                      </a>
                      <a class="btn btn-outline-danger" href="/coupons/delete/{{ $c->coupon_id }}">
                       <i class="fas fa-trash" title="Clique para apagar"></i>
                      </a>
                </td>
              </tr>

              {{-- Modal --}}
                <div class="modal fade" id="edit{{ $c->coupon_id }}" tabindex="-1" role="dialog" aria-labelledby="edit{{ $c->coupon_id }}" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <form role="form" action="{{ route('c_update') }}" method="post">
                      
                      <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Alterar Cupom</h5>
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
                              <label for="coupon_code">Nome do código</label>
                              <input type="text" class="form-control" id="coupon_code" name="coupon_code" placeholder="Código" value="{{ $c->coupon_code }}">
                              <input type="hidden" class="form-control" id="coupon_id" name="coupon_id" value="{{ $c->coupon_id }}">
                            </div>
                            <div class="form-group">
                              <label for="coupon_value">Valor de desconto</label>
                              <input type="number" class="form-control" id="coupon_value" name="coupon_value" placeholder="Valor" value="{{ $c->coupon_value }}">
                            </div>
                            <div class="form-group">
                              <label for="cart_min_value">Valor mínimo do carrinho</label>
                              <input type="text" class="form-control" id="cart_min_value" name="cart_min_value" placeholder="Valor mínimo" value="{{ $c->cart_min_value }}">
                            </div>
                            <div class="form-group">
                              <label for="expired_on">Expira em</label>
                              <input type="date" class="form-control" id="expired_on" name="expired_on" value="{{ $c->expired_on }}">
                            </div>
              
                            <div class="form-group">
                              <label for="coupon_type">Selecionar tipo de cupom</label>
                              <div class="radio">
                                <input type="radio" name="coupon_type" value="1"> Porcentagem               
                                <input type="radio" name="coupon_type" value="0"> Fixado               
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
                <th>Código</th>
                <th>Valor</th>
                <th>Tipo</th>
                <th>Compra min</th>
                <th>Expira em</th>
                <th>Adicionado em</th>
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