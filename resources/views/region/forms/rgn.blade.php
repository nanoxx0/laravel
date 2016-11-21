
	        <div class="control-group">
	        	{!!Form::label('nombre','Nombre Región: ',['class'=>'control-label'])!!}          
	          <div class="controls">
	          	{!!Form::text('nombre',null,['class'=>'span3','placeholder'=>'Ingrese Región'])!!}     	
	          </div>
	        </div>
	        <div class="control-group">
	         {!!Form::label('numero','Numero Región: ',['class'=>'control-label'])!!} 
	          <div class="controls">
	         {!!Form::text('numero',null,['class'=>'span1','placeholder'=>'Ej: 8'])!!}      
	          </div>
	        </div>
	        <div class="form-actions">
	          <button type="submit" class="btn btn-success">Guardar</button>
	        </div>