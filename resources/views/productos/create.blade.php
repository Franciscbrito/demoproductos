@extends('head')
@section('content')

<div class="container">
    <ol class="breadcrumb">
        <li>ABM Productos</li>
        <li><a href="/">Index</a></li>
        <li class="active">Crear Producto</li>

    </ol>
</div>

<section>
<div class="container">
 <div class="row">
      <div class="col-md-12">
        <h2 class="h3 section-title">Complete los datos del producto</h2>
      </div>
    </div>

<div class="row col-md-12">
   <div class="panel panel-default col-md-10">
            <div class="panel-body">
              <div class="col-md-6">

                <form method="post" action="{{route('guardar_producto')}}" autocomplete="off">
                  <div class="form-group {{ $errors->has('nombre') ? ' has-error' : '' }}">
                    {{csrf_field()}}
                     <div>
                      <label class="control-label required">Nombre</label>
                      <input class="form-control" type="text" name="nombre" required autofocus maxlength="40">
                      @if ($errors->has('nombre'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nombre') }}</strong>
                                </span>
                      @endif
                    </div>
                  </div>
                  <div class="form-group {{ $errors->has('descripcion') ? ' has-error' : '' }}">
                    <div>
                      <label class="control-label">Descripción</label>
                      <textarea class="form-control form-textarea"  name="descripcion" required="required" rows="4" maxlength="200" placeholder="Ingrese descripción del producto" style="resize: none;"></textarea>
                      @if ($errors->has('descripcion'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('descripcion') }}</strong>
                                </span>
                      @endif
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-5"></div>
                    <input type="submit" value="Guardar" class="btn btn-primary">
                  </div>
                </form>
              </div>
            </div>
    </div>
</div>
</div>
</section>
@endsection

@section('custom_js')
<script type="text/javascript" src="{{ asset('js/components/form-validators/productos/create.js') }}"></script>
@endsection