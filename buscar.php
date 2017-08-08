<?php 

$valor =  $_POST['valorBusqueda'];

//Filtro anti-XSS
$caracteres_malos = array("<", ">", "\"", "'", "/", "<", ">", "'", "/");
$caracteres_buenos = array("& lt;", "& gt;", "& quot;", "& #x27;", "& #x2F;", "& #060;", "& #062;", "& #039;", "& #047;");
$consulta = str_replace($caracteres_malos, $caracteres_buenos, $valor);


switch ($consulta) {
	case 'tinta':
	echo '<div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="http://ssl-product-images.www8-hp.com/digmedialib/prodimg/lowres/c02838747.png" alt="">
                    <div class="caption">
                        <h3>Tinta HP 11</h3>
                        <p>Tinta Hp 11 Yellow 2200c/cp1700/ojpro K850 (c4838a)</p>
                        <p>
                            <a href="#" class="btn btn-primary">Agregar</a> <a href="#" class="btn btn-default">Mas información</a>
                        </p>
                    </div>
                </div>
            </div>';
		break;
	
	default:
	echo '<p class="alert alert-warning">No esta disponible el producto solicitado</p>';
		break;
}


 ?>