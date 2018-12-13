<?php namespace Vistas; ?>

	<div class="container" style="padding: 150px">
	    <div class="row">
	        <div>
                <h1> Nuevo Usuario </h1>
                <form role= "form" method="POST" action="<?php echo DIR.'petshop/ingresarUsuario'?>">
	                <div class= "row">
                        <div class= "form-group">
                            <label>ID</label>
                            <input type="text" name="id" id="id" required placeholder="Ingrese el ID del Usuario">
                        </div>
                    </div>
                    <div class= "row">
                        <div class= "form-group">
                            <label>Email</label>
                            <input type="text" name="email" id="email" required placeholder="Ingrese el email del usuario">
                        </div>
                    </div>
                    <div class= "row">
                        <div class= "form-group">
                            <label>Password</label>
                            <input type="text" name="password" id="password" required placeholder="Ingrese la password del usuario">
                        </div>
                    </div>
                    <div class= "row">
                        <div class= "form-group">
                            <input type="submit" class="btn btn-success btn-block" style="color: black" value="Finalizar Carga">
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