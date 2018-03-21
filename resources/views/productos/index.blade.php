@extends('head')
@section('content')
<div class="container">
    <ol class="breadcrumb">
        <li>ABM Productos</li>
        <li class="active"><a href="/">Index</a></li>
    </ol>
</div>

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="h3 section-title">Demo básico de manejo de productos (CRUD)</h2>
      </div>
    </div>
    

     <div class="row panels-row">
            <div class="col-xs-12 col-md-4">
            <a class="panel panel-default" href="{{route('crear_producto')}}">
                <div class="panel-body">
                    <div class="media">
                        <div class="media-left padding-20">
                            <i class="fa fa-plus-square-o fa-fw fa-2x text-secondary"></i>
                        </div>
                        <div class="media-body">
                            <h3>Crear producto</h3>
                            <p class="text-muted" style="font-size:80%">Creación de un nuevo producto</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

     </div>

    <div class="row">
      <div class="col-md-12">
        <h3 class="h3 section-title">Lista de productos</h3>
     </div>
      <div class="panel panel-default">
            <div class="panel-body">
              <div class="col-md-12">
                <table id="datatable" class="table table-hover">
                <thead>
                
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Editar</th>
                <th>Eliminar</th>
                </thead>
                <tbody>
                  @unless(count($productos)>0)
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p>{{ "Aún no hay productos registrados"}}</p>
                        </div>
                    </div>
                  @endunless
                  @foreach($productos as $producto)
                  <tr>
                    <td>{{$producto->id}}</td>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->descripcion}}</td>
                    <td><a href="{{route('editar_producto', $producto->id)}}" class="btn btn-warning">Editar</a></td>
                    <td>
                      <form action="{{route('eliminar_producto', $producto->id)}}" method="post">
                        {{csrf_field()}}
                       
                        <button class="btn btn-danger" type="submit">Eliminar</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              </div>
            </div>

    </div>
  </div>
</div>
</section>
@endsection


@section('custom_js')
    <script type="text/javascript">
        $('#datatable').dataTable({
            language:{
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
        });
    </script>
@endsection