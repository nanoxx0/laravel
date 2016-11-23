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
                	<option value="">Seleccione Región</option>
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