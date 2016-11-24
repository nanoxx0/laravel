    @extends('layouts.principal')

    @section('content')

    
@include('alerts.succes')

    <html lang="es">

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/bootstrap-responsive.min.css')!!}
    {!!Html::style('css/uniform.css')!!}
    {!!Html::style('css/select2.css')!!}
    {!!Html::style('css/matrix-style.css')!!}
    {!!Html::style('css/matrix-media.css')!!}
    {!!Html::style('font-awesome/css/font-awesome.css')!!}




    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>




    <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Clientes</a> </div>
    <h1>Clientes</h1>
    </div>
    <div class="row-fluid">
    <div class="span20">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Ingresar Cliente</h5>
        </div>
        <div class="widget-content nopadding">
        <div class="form-horizontal">  
          
         @include('alerts.request')
          {!!Form::open(['route'=>'cliente.store', 'method'=>'POST'])!!}
                  @include('cliente.forms.cli')
          {!!Form::close()!!}
        </div>
      </div>
    </div>
    </div>



    <!--Tabla-->
       

    {!!Html::script('js/jquery.min.js')!!} 
    {!!Html::script('js/jquery.ui.custom.js')!!} 
    {!!Html::script('js/bootstrap.min.js')!!} 
    {!!Html::script('js/jquery.uniform.js')!!} 
    {!!Html::script('js/select2.min.js')!!} 
    {!!Html::script('js/jquery.dataTables.min.js')!!} 
    {!!Html::script('js/matrix.js')!!} 
    {!!Html::script('js/matrix.tables.js')!!}




          @stop