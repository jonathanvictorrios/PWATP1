<?php

include_once("../estructura/cabecera.php");
include_once("../../control/control_eje4.php");

?>
<link rel="stylesheet" type="text/css" href="../css/bootstrap/4.5.2/style.css" media="screen" />
</div>

<!-- <div id="contenido" style="height: 720px; width: 89%;margin-left:10.5%;" > -->

    <div class="modal-dialog modal-lg font-weight-bold">
        <div class="modal-content shadow p-3 mb-5 bg-white rounded border-0">
            <div class="modal-header">
                <div class="row">
                    <div class="col-lg-4">
                        <h5 class="modal-title text-info">Cinem@as</h5>

                    </div>
                    <div class="col-lg-6">
                        <div class="iconojer4 text-info">
                            <span class="form-group-addon "><i class="fa fa-user"></i>
                            </span>
                        </div>
                    </div>
                </div>
                
                        
                
            </div>
            
            <form id="eje4" name="eje4" method="post" action="accion.php" data-toggle="validator" >
                    
                <div class="row">

                    <div class="form-group col-lg-6">
                    <label for="titulo" class="control-label">Titulo</label>
                        <input class="form-control" id="titulo" name="titulo" placeholder="Titulo" required
                        type="text" >
                        <div class="invalid-feedback">
                        </div>
                    </div>  
                    <div class="form-group col-lg-6">
                    <label for="actores" class="control-label">Actores</label>
                        <input class="form-control" id="actores" name="actores" placeholder="Actores" required
                        type="text" >
                        <div class="invalid-feedback">
                        </div>
                    </div> 
                </div>
                <div class="row">

                    <div class="form-group col-lg-6">
                        <label for="director" class="control-label">Director</label>
                        <input class="form-control" id="director" name="director" placeholder="Director" required
                        type="text" >
                        <div class="invalid-feedback">
                        </div>
                    </div>  
                    <div class="form-group col-lg-6">
                        <label for="guion" class="control-label">Guion</label>
                        <input class="form-control" id="guion" name="guion" placeholder="Guion" required
                        type="text" >
                        <div class="invalid-feedback">
                        </div>
                    </div> 
                </div>
                <div class="row">

                    <div class="form-group col-lg-6">
                        <label for="produccion" class="control-label">Produccion</label>
                        <input class="form-control" id="produccion" name="produccion" placeholder="Produccion" required
                        type="text" >
                        <div class="invalid-feedback">
                        </div>
                    </div>  
                    <div class="form-group col-lg-2">
                        <label for="año" class="control-label">Año</label>
                        <input class="form-control" id="año" name="año" placeholder="Año" required
                        type="text" >
                        <div class="invalid-feedback">
                        </div>
                    </div>  
                </div>
                <div class="row">

                    <div class="form-group col-lg-6">
                        <label for="nacionalidad" class="control-label">Nacionalidad</label>
                        <input class="form-control" id="nacionalidad" name="nacionalidad" placeholder="nacionalidad" required
                        type="text" >
                        <div class="invalid-feedback">
                        </div>
                    </div>  
                    <div class="form-group col-lg-6">
                        <label for="genero" class="control-label">Genero</label>
                        <select class="form-control form-control" id="genero" name="genero">
                                <option>Comedia</option>
                                <option>Drama</option>
                                <option>Terror</option>
                                <option>Romanticas</option>
                                <option>Suspenso</option>
                                <option>Otras</option>
                        </select>
                        <div class="invalid-feedback">
                        </div>
                    </div>  
                    
                    
                </div>
                <div class="row">
                    <div class="form-group col-lg-4 ">
                        <label for="duracion" class="control-label">Duracion</label>
                        <input class="form-control" id="duracion" name="duracion" placeholder="Duracion" required
                        type="text" >
                        <p class="font-weight-normal">(minutos)</p>
                        <div class="invalid-feedback">
                        </div>
                    </div>  
                    <div class="form-group col-lg-8 ">
                    <label for="restriccion" class="control-label">Restricciones de edad</label>
                        <div class="radioRestriccion">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="restriccion" id="todo" value="todoPublico" checked>
                                <label class="form-check-label font-weight-normal" for="todo">Todo Publico</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="restriccion" id="mayor7" value="mayor7">
                                <label class="form-check-label font-weight-normal" for="mayor7">Mayores de 7 años</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="restriccion" id="mayor18" value="mayor18">
                                <label class="form-check-label font-weight-normal" for="mayor18">Mayores de 18 años</label>
                            </div>
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        
                    </div> 

                </div>
                <div class="row">
                    <div class="form-group col-lg-12 ">
                        <div class="form-group">
                            <label for="sinopsis">Sinopsis</label>
                            <textarea class="form-control" id="sinopsis" name="sinopsis" rows="2"></textarea>
                        </div>
                        <div class="invalid-feedback">

                            </div>
                    </div>
                </div>   
                <div class="row">
                    
                    <div class="col-lg-11">
                        <input id="btn_eje4" class="btn btn-primary float-right" name="btn_eje4" type="submit" value="Enviar">
                        
                    </div> 
                    <div class="col-lg-1">
                            <input id="btn_eje4" class="btn btn-primary float-right" name="btn_eje4" type="reset" value="Borrar"> 
                        </div> 
                </div>
                

            


            </form>
            
        </div>
    </div>     
<!-- </div> -->


<?php

include_once("../estructura/pie.php");
?>