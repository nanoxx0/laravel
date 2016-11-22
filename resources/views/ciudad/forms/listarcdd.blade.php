 <!--Tabla dinamica-->
   <div class="container-fluid">

    <div class="row-fluid">
      <div class="span12">



        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Regiones</h5>
          </div>
          <div class="widget-content nopadding">
            
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Nombre Ciudad</th>
                  <th>Nombre Región</th>
                  <th>Actualizar</th>
                  <th>Eliminar</th>
                </tr>
              </thead>
              <tbody>
               
               @foreach($result as $results)
                
                <tr>
                    <td>{{$res->nombre}}</td>
                    <td>{{$res->nombre_region}}</td>
                    <td>{!!link_to_route('ciudad.edit', $title = 'Editar', $parameters = $ciudad->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
                    <td>{!!Form::open(['route'=>['region.destroy',$ciudad->id], 'method'=>'DELETE'])!!}
                    {!!Form::submit('Eliminar', ['class'=>'btn btn-danger'])!!}
          {!!Form::close()!!}</td>
                </tr>
              
             @endforeach 
             </tbody>
              </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
