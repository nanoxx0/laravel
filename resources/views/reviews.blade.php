@extends('layouts.principal')

@section('content')

<form class="form-horizontal" id="formulario" action="Vista/RecibeNoticia.php" method="post" >
				<div class="form-group">
					<input type="hidden" name="id_noticia" value="">	
					<label class="col-sm-2 control-label" for="titulo">Titulo Noticia</label>
					<div class="col-sm-10">
					<input class="form-control" type="text" name="titulo" id="titulo" <?php if(isset($resultado)){echo 'value="'.$id_titulo.'"';}?>	>	
					</div>
					
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label" for="descripcion">Descripcion Noticia</label>
					<div class="col-sm-10">
					<input class="form-control" type="text" name="descripcion" id="descripcion" <?php if(isset($resultado)){echo 'value="'.$descripcion.'"';}?>	>		
					</div>
					
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label" for="cuerpo">Cuerpo Noticia</label>
					<div class="col-sm-10">
					<input class="form-control" type="text" name="cuerpo" id="cuerpo" <?php if(isset($resultado)){echo 'value="'.$cuerpo.'"';}?>	>		
					</div>
					
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label" for="fecha">Fecha Noticia</label>
					<div class="col-sm-10">
					<input class="form-control" type="date" name="fecha" id="fecha" <?php if(isset($resultado)){echo 'value="'.$fecha.'"';}?>	>	
					</div>
					
				</div>

				
      				<button type="submit" id="boton" class="btn btn-default">Ingresar</button>

			</form>


@stop			