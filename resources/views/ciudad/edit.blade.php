	@extends('layouts.principal')
	@section('content')

	
	

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
	<div id="breadcrumb"> <a href="#" title="Al Menu Principal" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Ciudades</a> </div>
	<h1>Ciudades</h1>
	</div>
	<div class="row-fluid">
	<div class="span20">
	  <div class="widget-box">
	    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
	      <h5>Actualizar Ciudad</h5>
	    </div>
	    <div class="widget-content nopadding">
	    <div class="form-horizontal">        
	      
	       @include('alerts.request');
	      {!!Form::model($ciudad,['route'=>['ciudad.update',$ciudad->id], 'method'=>'PUT'])!!}
	          <div class="control-group">
	        	{!!Form::label('nombre','Nombre Ciudad: ',['class'=>'control-label'])!!}          
	          <div class="controls">
	          	{!!Form::text('nombre',null,['class'=>'span3','placeholder'=>'Ingrese Ciudad'])!!}     	
	          </div>
	        </div>
	        <div class="control-group">
	         {!!Form::label('region','Seleccione Región: ',['class'=>'control-label'])!!} 
	          <div class="controls">        
     
                <select name="regions_id" >
                	<option value="{!!$ciudad->region_id!!}">{!!$ciudad->region->nombre!!}</option>
                   @foreach($regions as $region)
                  <option value="{!!$region->id!!}">{!!$region->nombre!!}</option>
                	@endforeach
                </select>
              </div>


	               
	          </div>
	        </div>
	        <div class="form-actions">
	          <button type="submit" class="btn btn-success">Guardar</button>
	        </div>
	      {!!Form::close()!!}
	    </div>
	  </div>
	</div>
	</div>
	@stop