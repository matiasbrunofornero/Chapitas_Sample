<?php namespace Vistas; ?>

	<div class="container" style="padding: 150px">
	    <div class="row">
	        <div>
                <h1> Eliminar Pedido </h1>
                <form role= "form" method="POST" action="<?php echo DIR . 'pedido/eliminar'?>">
	                <div class= "row">
                        <div class= "form-group">
                            <label>Numero</label>
                            <input type="text" maxlength="8" name="numero" id="numero" required placeholder="Ingrese el numero">
                        </div>
                    </div>
                    <div class= "row">
                        <div class= "form-group">
                            <input type="submit" class="btn btn-success btn-block" style="color: black" value="Eliminar Pedido">
                            <input type="reset" class="btn btn-danger btn-block" style="color: black" value="Limpiar Campos">
                        </div>
                    </div>
                </form>
				<div style="margin-top: 10px">
					<a href=" <?php echo DIR .'Inicio' ?>">VOLVER A INICIO</a>
				</div>
	        </div>
	    </div>
	</div>