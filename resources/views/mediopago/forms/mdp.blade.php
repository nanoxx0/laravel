
	        <div class="control-group">
	        	{!!Form::label('nombre','Nombre Medio de Pago: ',['class'=>'control-label'])!!}          
	          <div class="controls">
	          	{!!Form::text('nombre',null,['class'=>'span3','placeholder'=>'Ingrese'])!!}     	
	          </div>
	        </div>
	        <div class="control-group">
	         {!!Form::label('plazo','Plazo de Pago en Días: ',['class'=>'control-label'])!!} 
	          <div class="controls">
	         {!!Form::text('plazo',null,['class'=>'span1','placeholder'=>'Ej: 8'])!!}      
	          </div>
	        </div>
	        <div class="form-actions">
	          <button type="submit" class="btn btn-success">Guardar</button>
	        </div>