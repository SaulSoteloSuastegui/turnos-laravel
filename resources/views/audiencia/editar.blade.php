@extends('layouts')

@section('contenido')
<style>

#contenedor_pages{
    margin: 0 auto;
}

.audiencia_pages{
    width: 100%;
    /*text-align: center;*/
    vertical-align: top;
}

#paginas ul{
    margin: 3px 0;
    padding: 0;
}

#paginas li{
    display: inline-block;
    margin: 0;
    padding: 3px;
}

#paginas li a{
    background: #ddf0f1;
    border-radius: 2px;
    color: rgb(50, 50, 50);
    padding: 3px 8px;
    text-decoration: none;
    font-size: 0.97em;
}

#paginas li a:hover {
  background-color:  #5bc0c5;
}

.actual{
    background: rgb(20, 69, 124) !important;
    color: rgb(255, 255, 255) !important;
}

.info_titulo{
    text-align: center;
}
.info_tipo_audiencia{
    width:300px;
    text-align: center;
}
.info_delito{
    width:300px;
    text-align: center;
}
.info_fecha{
    width:200px;
    text-align: center;
}
.info_hora{
    width:65px;
    text-align: center;
}
.info_editar_datos{
    width:95px;
    text-align: center;
}
.visor_video{ /*Modificar el tamaño de los videos en consultar*/
    width:90%;
    padding: 0px;
    margin: 0px;
}



.casilla_vacia{
    border: none !important;
}


.titulo_id{
    border-right: none !important;
    text-align: left;
    font-family:  'Consolas', Trebuchet MS, Segoe UI, sans-serif;
    font-size: 0.95em;
    background-color: #3a084e !important;
    color: #f8f7ec;
    padding-left: 15px;
}

.titulo_tabla{
    border-left: none !important;
    text-align: center;
    background-color: #3a084e !important;
    color: #f8f7ec;
    font-size: 1.1em;
    font-family: Trebuchet MS, Tahoma, sans-serif;
}

.titulo_seccion{
    text-align: center;
}

.titulo_herramienta{
    text-align: center;
}

.espacio{
    background: rgb(216, 216, 216) !important;
}

.titulo_datos{
    word-wrap: break-word;
    min-width: 160px;
    width: 160px;
    white-space:normal;
}



#contenedor_pages{
    margin: 0 auto;
}

.audiencia_pages{
    width: 100%;
    /*text-align: center;*/
    vertical-align: top;
}

#paginas ul{
    margin: 3px 0;
    padding: 0;
}

#paginas li{
    display: inline-block;
    margin: 0;
    padding: 3px;
}

#paginas li a{
    background: #ddf0f1;
    border-radius: 2px;
    color: rgb(50, 50, 50);
    padding: 3px 8px;
    text-decoration: none;
    font-size: 0.97em;
}

#paginas li a:hover {
  background-color:  #5bc0c5;
}

.actual{
    background: rgb(20, 69, 124) !important;
    color: rgb(255, 255, 255) !important;
}

.info_titulo{
    text-align: center;
}
.info_tipo_audiencia{
    width:300px;
    text-align: center;
}
.info_delito{
    width:300px;
    text-align: center;
}
.info_fecha{
    width:200px;
    text-align: center;
}
.info_hora{
    width:65px;
    text-align: center;
}
.info_editar_datos{
    width:95px;
    text-align: center;
}
.visor_video{ /*Modificar el tamaño de los videos en consultar*/
    width:90%;
    padding: 0px;
    margin: 0px;
}



.casilla_vacia{
    border: none !important;
}


.titulo_id{
    border-right: none !important;
    text-align: left;
    font-family:  'Consolas', Trebuchet MS, Segoe UI, sans-serif;
    font-size: 0.95em;
    background-color: #3a084e !important;
    color: #f8f7ec;
    padding-left: 15px;
}

.titulo_tabla{
    border-left: none !important;
    text-align: center;
    background-color: #3a084e !important;
    color: #f8f7ec;
    font-size: 1.1em;
    font-family: Trebuchet MS, Tahoma, sans-serif;
}

.titulo_seccion{
    text-align: center;
}

.titulo_herramienta{
    text-align: center;
}

.espacio{
    background: rgb(216, 216, 216) !important;
}

.titulo_datos{
    word-wrap: break-word;
    min-width: 160px;
    width: 160px;
    white-space:normal;
}


</style>
<br>
<div class='container' class='cuerpo'>
    <h1>Editar audiencia</h1>

    <div id="paginas" class="text-center">
      
 
    <table class='table-sm table-responsive table-bordered p-0 m-0'>
        <thead>
                    <tr> 
                <th class='titulo_id'> ID:2429 Sala:1</th>
                <th class='titulo_tabla' style='width:94%'>Audiencia C-42/2022 Fecha: 25/04/200</th>
            </tr>
        </thead>

        <tbody id='tbody-audiencias'>
            <tr>
            <td colspan='2'>
                <div class='row pr-0 mr-0'>
                        <div class='col-md-2 mb-3'>
                            <ul class='nav nav-pills flex-column' id='myTab' role='tablist'>
                                <li class='nav-item'>
                                    <a class='nav-link'  data-toggle='tab' href='#home1' >Integrante</a>
                                </li>

                                <li class='nav-item'>
                                    <a class='nav-link'  data-toggle='tab' href='#video'  >Delito</a>
                                </li>

                                <li class='nav-item'>
                                    <a class='nav-link'  data-toggle='tab' href='#home3' >Documento</a>
                                </li>
                            </ul>
                        </div>  

                        <div class='col-md-10'>
                            <div class='tab-content' id='myTabContent'>
                                <div class='tab-pane fade show active' id='home1' role='tabpanel'>
                       
                            
                                        <div class='tab-content float-right  ' >
                                            <button  type="button" class="float-right btn btn-primary " data-toggle="modal" data-target="#myModal" >
                                            Open modal
                                            </button>
                                        </div>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Firstname</th>
                                                <th>Lastname</th>
                                                <th>Email</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>John</td>
                                                <td>Doe</td>
                                  
                                            </tbody>
                                        </table>
                                    
                                </div>                            
                    
                                <div class='tab-pane fade ' id='video' role='tabpanel'>
                       
                                        <!-- Button to Open the Modal -->
                                        <button type="button" class="float-right btn btn-primary " data-toggle="modal" data-target="#myModal" >
                                        Open modal
                                        </button>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Firstname</th>
                                                <th>Lastname</th>
                                                <th>Email</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>John</td>
                                                <td>Doe</td>
                                                <td>john@example.com</td>
                                            </tr>                                        
                                            </tbody>
                                        </table>
                        
                                </div>
                            
                                <div class='tab-pane fade' id='home3' role='tabpanel' >
                                        <br>
                                        <div class="panel-body">
                                            33333333333333333333
                                        </div>
                                </div>
                            </div>
                        </div>
                </div>
            </td>
            </tr> 
        </tbody>               
    </table>
                                            
</div>



</div>



@endsection




<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="/action_page.php" style="padding:20px;">

            <div class="form-group">
            <label for="email">Carpeta:</label>
            <input type="text" class="form-control" placeholder="Carpeta" id="email">
            </div>



            <div class="form-group">
            <label for="email">Sala:</label>
            <input type="text" class="form-control" placeholder="Carpeta" id="email">
            </div>
            <div class="form-group">
            <label for="email">Fecha:</label>
            <input type="text" class="form-control" placeholder="Carpeta" id="email">
            </div>

            <div class="form-group">
            <label for="email">Tipo:</label>
            <input type="text" class="form-control" placeholder="Carpeta" id="email">
            </div>
            <a  href="" type="submit" class="btn btn-primary">Submit</a>
            </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
