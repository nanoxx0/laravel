
{!!Html::script('js/validarRUT.js')!!}

       <div class="control-group">
	        	{!!Form::label('rut','Rut Cliente: ',['class'=>'control-label'])!!}          
	          <div class="controls">
	          	{!!Form::text('rut',null,['class'=>'span3','onBlur'=>'checkRut(this)','placeholder'=>'Ingrese Rut Cliente'])!!}     	
	          </div>
	          {!!Form::label('nombre','Nombre Cliente: ',['class'=>'control-label'])!!}          
	          <div class="controls">
	          	{!!Form::text('nombre',null,['class'=>'span8','placeholder'=>'Ingrese Nombre Cliente'])!!}     	
	          </div>
	        
	        {!!Form::label('email','Correo Electronico: ',['class'=>'control-label'])!!}          
	          <div class="controls">
	          	{!!Form::text('email',null,['class'=>'span8','placeholder'=>'Ingrese Email'])!!}     	
	          </div>
	          {!!Form::label('direccion','Ingrese Dirección: ',['class'=>'control-label'])!!}          
	          <div class="controls">
	          	{!!Form::text('direccion',null,['class'=>'span8','placeholder'=>'Ingrese Dirección'])!!}     	
	          </div>

	        
	         {!!Form::label('ciudad','Seleccione Ciudad: ',['class'=>'control-label'])!!} 
	          
	          <div class="controls">    
             
                <select name="ciudads_id" >
                	<option value="">Seleccione Ciudad</option>
                   @foreach($ciudads as $ciudad)
                  <option value="{!!$ciudad->id!!}">{!!$ciudad->nombre!!}</option>
                	@endforeach
                </select>
              </div>

	          {!!Form::label('telefono','Ingrese Telefono: ',['class'=>'control-label'])!!}          
	          <div class="controls">
	          	{!!Form::text('telefono',null,['class'=>'span3','placeholder'=>'Ingrese Telefono'])!!}     	
	          </div>

	          {!!Form::label('giro','Ingrese Giro: ',['class'=>'control-label'])!!}          
	          <div class="controls">
	          	{!!Form::text('giro',null,['class'=>'span8	','placeholder'=>'Ingrese Giro'])!!}     	
	          </div>
	          {!!Form::label('estado','Estado Cliente: ',['class'=>'control-label'])!!} 
	          
	          <div class="controls">    
             
                <select name="estado" >
                	<option value="">Seleccione Estado Cliente</option>                   
                 	<option value="1">Activo</option>
                	<option value="0">Inactivo</option>
                </select>
              </div>

	          </div>
	        
	        <div class="form-actions">
	          <button type="submit" class="btn btn-success">Guardar</button>
	        </div>
