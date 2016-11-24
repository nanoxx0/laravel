
	        <div class="control-group">
	        	{!!Form::label('nombre','Nombre del Impuesto: ',['class'=>'control-label'])!!}          
	          <div class="controls">
	          	{!!Form::text('nombre',null,['class'=>'span3','placeholder'=>'Ej: IVA 19%'])!!}     	
	          </div>
	        </div>
	        <div class="control-group">
	         {!!Form::label('valor','Valor del Impuesto: ',['class'=>'control-label'])!!} 
	          <div class="controls">
	         {!!Form::text('valor',null,['class'=>'span1','placeholder'=>'Ej: 19'])!!}      
	          </div>
	        </div>
	        <div class="form-actions">
	          <button type="submit" class="btn btn-success">Guardar</button>
	        </div>