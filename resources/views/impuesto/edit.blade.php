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
	<div id="breadcrumb"> <a href="#" title="Al Menu Principal" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Impuestos</a> </div>
	<h1>Impuestos</h1>
	</div>
	<div class="row-fluid">
	<div class="span20">
	  <div class="widget-box">
	    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
	      <h5>Actualizar Impuestos</h5>
	    </div>
	    <div class="widget-content nopadding">
	    <div class="form-horizontal">  	      
	       @include('alerts.request');
	      {!!Form::model($impuesto,['route'=>['impuesto.update',$impuesto->id], 'method'=>'PUT'])!!}
	      @include('impuesto.forms.imp')
	      {!!Form::close()!!}
	    </div>
	  </div>
	</div>
	</div>
	@stop