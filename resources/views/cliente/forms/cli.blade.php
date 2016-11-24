     <div class="control-group">
	        	{!!Form::label('nombre','Nombre Ciudad: ',['class'=>'control-label'])!!}          
	          <div class="controls">
	          	{!!Form::text('nombre',null,['class'=>'span3','placeholder'=>'Ingrese Ciudad'])!!}     	
	          </div>
	        </div>
	        <div class="control-group">
	         {!!Form::label('ciudad','Seleccione Ciudad: ',['class'=>'control-label'])!!} 
	          <div class="controls">               
             
                <select name="ciudads_id" >
                	<option value="">Seleccione Ciudad</option>
                   @foreach($ciudads as $ciudad)
                  <option value="{!!$ciudad->id!!}">{!!$ciudad->nombre!!}</option>
                	@endforeach
                </select>
              </div>


	               
	          </div>
	        </div>
	        <div class="form-actions">
	          <button type="submit" class="btn btn-success">Guardar</button>
	        </div>