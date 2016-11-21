<!DOCTYPE html>
<html lang="es">
<head>
  <title>Sistema Bodega</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  {!!Html::style('css/bootstrap.min.css')!!}
  {!!Html::style('css/bootstrap-responsive.min.css')!!}
  {!!Html::style('css/fullcalendar.css')!!}
  {!!Html::style('css/matrix-style.css')!!}
  {!!Html::style('css/matrix-media.css')!!}
  {!!Html::style('css/jquery.gritter.css')!!}
  {!!Html::style('font-awesome/css/font-awesome.css')!!}






  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

  <!--Header-part-->
  <div id="header">
    <h1><a href="dashboard.html">Sistema Bodega</a></h1>
  </div>
  <!--close-Header-part--> 


  <!--top-Header-menu-->
  <div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
      <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Bienvenido</span><b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
          <li class="divider"></li>
          <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
          <li class="divider"></li>
          <li><a href="login.html"><i class="icon-key"></i> Salir</a></li>
        </ul>
      </li>
      <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text"></span>  <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i></a></li>
          <li class="divider"></li>
          <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
          <li class="divider"></li>
          <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
          <li class="divider"></li>
          <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
        </ul>
      </li>
      <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Administración</span></a></li>
      <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Salir</span></a></li>
    </ul>
  </div>
  <!--close-top-Header-menu-->
  <!--start-top-serch-->

  <!--close-top-serch-->
  <!--sidebar-menu-->
  <div id="sidebar"><a href="{!!URL::to('#')!!}" class="visible-phone"><i class="icon icon-home"></i> Menu Principal</a>
    <ul>
      <li class="active"><a href="{!!URL::to('/')!!}"><i class="icon icon-home"></i> <span>Menu Principal</span></a> </li>
      <li> <a href="charts.html"><i class="icon icon-signal"></i> <span>Clientes</span></a> </li>
      <li> <a href="widgets.html"><i class="icon icon-inbox"></i> <span>Ventas</span></a> </li>
      <li><a href="tables.html"><i class="icon icon-th"></i> <span>Proveedores</span></a></li>
      <li><a href="grid.html"><i class="icon icon-fullscreen"></i> <span>Compras</span></a></li>
      <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Forms</span> <span class="label label-important">3</span></a>
        <ul>
          <li><a href="form-common.html">Basic Form</a></li>
          <li><a href="form-validation.html">Form with Validation</a></li>
          <li><a href="form-wizard.html">Form with Wizard</a></li>
        </ul>
      </li>
      <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
      <li><a href="interface.html"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>
      <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">5</span></a>
        <ul>
          <li><a href="index2.html">Dashboard2</a></li>
          <li><a href="gallery.html">Gallery</a></li>
          <li><a href="calendar.html">Calendar</a></li>
          <li><a href="invoice.html">Invoice</a></li>
          <li><a href="chat.html">Chat option</a></li>
        </ul>
      </li>
      <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>Administración</span> </a>
        <ul>
          <li><a href="{!!URL::to('/region/create')!!}">Regiones</a></li>
          <li><a href="error404.html">Ciudades</a></li>
          <li><a href="error405.html">Impuestos</a></li>
          <li><a href="error500.html">Medios De Pago</a></li>

        </ul>
      </li>
      
      
    </ul>
  </div>
  <!--sidebar-menu-->

  <!--main-container-part-->
  <div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
     
      <!--End-breadcrumbs-->


      @yield('content')



      <div class="row-fluid">
        <div id="footer" class="span12"> 2016 &copy; Sistema Bodega. Christian Carrasco  </div>
      </div>

      <!--end-Footer-part-->
      {!!Html::script('js/jquery.min.js')!!} 
      {!!Html::script('css/bootstrap.min.css')!!}
      {!!Html::script('js/excanvas.min.js')!!} 
      {!!Html::script('js/jquery.ui.custom.js')!!} 
      {!!Html::script('js/bootstrap.min.js')!!} 
      {!!Html::script('js/jquery.flot.min.js')!!} 
      {!!Html::script('js/jquery.flot.resize.min.js')!!} 
      {!!Html::script('js/jquery.peity.min.js')!!} 
      {!!Html::script('js/fullcalendar.min.js')!!} 
      {!!Html::script('js/matrix.js')!!} 
      {!!Html::script('js/matrix.dashboard.js')!!} 
      {!!Html::script('js/jquery.gritter.min.js')!!} 
      {!!Html::script('js/matrix.interface.js')!!} 
      {!!Html::script('js/matrix.chat.js')!!} 
      {!!Html::script('js/jquery.validate.js')!!} 
      {!!Html::script('js/matrix.form_validation.js')!!} 
      {!!Html::script('js/jquery.wizard.js')!!} 
      {!!Html::script('js/jquery.uniform.js')!!} 
      {!!Html::script('js/select2.min.js')!!} 
      {!!Html::script('js/matrix.popover.js')!!} 
      {!!Html::script('js/jquery.dataTables.min.js')!!} 
      {!!Html::script('js/matrix.tables.js')!!}   


      <script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
        
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
            resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
        }
      }

// resets the menu selection upon entry to this page:
function resetMenu() {
 document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>