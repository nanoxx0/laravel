
	        <div class="control-group">
	        	{!!Form::label('nombre','Nombre de la Categoria: ',['class'=>'control-label'])!!}          
	          <div class="controls">
	          	{!!Form::text('nombre',null,['class'=>'span3','placeholder'=>'Ej: Codos'])!!}     	
	          </div>
	        </div>
	        <div class="control-group">
	         {!!Form::label('descripcion','Descripción de la Categoria: ',['class'=>'control-label'])!!} 
	          <div class="controls">
	         {!!Form::textarea('descripcion',null,['class'=>'span3','placeholder'=>'Ingrese'])!!}      
	          </div>
	        </div>
	        <div class="form-actions">
	          <button type="submit" class="btn btn-success">Guardar</button>
	        </div>