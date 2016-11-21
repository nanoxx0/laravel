     <div class="control-group">
	        	{!!Form::label('nombre','Nombre Ciudad: ',['class'=>'control-label'])!!}          
	          <div class="controls">
	          	{!!Form::text('nombre',null,['class'=>'span3','placeholder'=>'Ingrese Ciudad'])!!}     	
	          </div>
	        </div>
	        <div class="control-group">
	         {!!Form::label('region','Región: ',['class'=>'control-label'])!!} 
	          <div class="controls">        


             
             
                <select >
                  <option>First option</option>
                  <option>Second option</option>
                  <option>Third option</option>
                  <option>Fourth option</option>
                  <option>Fifth option</option>
                  <option>Sixth option</option>
                  <option>Seventh option</option>
                  <option>Eighth option</option>
                </select>
              </div>


	               
	          </div>
	        </div>
	        <div class="form-actions">
	          <button type="submit" class="btn btn-success">Guardar</button>
	        </div>