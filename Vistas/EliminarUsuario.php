<?php namespace Vistas; ?>

	<div class="container" style="padding: 150px">
	    <div class="row">
	        <div>
                <h1> Eliminar Usuario </h1>
                <form role= "form" method="POST" action="<?php echo DIR . 'usuario/eliminar'?>">
	                <div class= "row">
                        <div class= "form-group">
                            <label>Nombre</label>
                            <input type="text" maxlength="50" name="email" id="email" required placeholder="Ingrese el email">
                        </div>
                    </div>
                    <div class= "row">
                        <div class= "form-group">
                            <label>Password</label>
                            <input type="text" maxlength="50" name="password" id="password" required placeholder="Ingrese el password">
                        </div>
                    </div>
                    <div class= "row">
                        <div class= "form-group">
                            <input type="submit" class="btn btn-success btn-block" style="color: black" value="Eliminar Usuario">
                            <input type="reset" class="btn btn-danger btn-block" style="color: black" value="Limpiar Campos">
                        </div>
                    </div>
                </form>
				<div style="margin-top: 10px">
					<a href=" <?php echo DIR .'Inicio/indexInicio' ?>">VOLVER AL MENU</a>
				</div>
	        </div>
	    </div>
	</div>