<?php

include_once("../estructura/cabecera.php");
include_once("../../control/control_eje3.php");

?>
<link rel="stylesheet" type="text/css" href="../css/bootstrap/4.5.2/style.css" media="screen" />
</div>
<div id="contenido" style="height: 720px; width: 89%;margin-left:10.5%;" >
Realizar la validación de este formulario. Chequear no solo que se hayan cargado el
usuario y la contraseña antes de ser enviados al servidor sino que también debe
realizar un control de contraseña segura (La contraseña debe tener como mínimo 8
caracteres, no puede ser igual que el nombre de usuario ingresado y debe contener
letras y números). 
 

<hr>
    
    
    <div class="modal-dialog text-center ">
        <div class="modal-content col-sm-8 shadow p-3 mb-5 bg-white rounded border-0">
            <form id="ejer3b" name="ejer3b" method="post" action="accion.php" data-toggle="validator" >
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                
                    <div class="mb-4">
                        <p class="h3 font-weight-normal">Member Login</p>
                    </div>
                
                    <div class="form-group col-sm-12"> 
                        <div class="iconoUser">
                            <span class="form-group-addon "><i class="fa fa-user"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control text-center " id="usuario" name="usuario" placeholder="Username" required>
                        
                        
                        <div class="invalid-feedback">     
                        </div>
                    </div>
                    <div class="form-group col-sm-12"> 
                        <div class="iconoPass">
                            <span class="form-group-addon"><i class="fa fa-lock"></i>
                            </span>
                        </div>
                        
                        <input type="text" class="form-control text-center" id="password" name="password" placeholder="Password" required>
                        
                        <div class="invalid-feedback">     
                        </div>
                        
                    </div>
                    <div class="form-group col-sm-12 " > 
                        <input id="btn_eje4" class="btn btn-primary btn-lg btn-block bg-success border border-success " name="btn_eje4" type="submit" value="Login">
                        
                    </div>
                
            </form>
        </div>
        
    </div>
</div>

    <div class="row">
        
    </div>
    

    


    </form>
</div>


<?php

include_once("../estructura/pie.php");
?>