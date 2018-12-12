<?php namespace Vistas; ?>

	<div class="container" style="padding: 150px">
	    <div class="row">
	        <div>
                <h1> Alta Pedido </h1>
                <form role= "form" method="POST" action="<?php echo DIR.'petshop/ingresarPetshop'?>">
	                <div class= "row">
                        <div class= "form-group">
                            <label>ID</label>
                            <input type="text" name="id" id="id" required placeholder="Ingrese el ID del Petshop">
                        </div>
                    </div>
                    <div class= "row">
                        <div class= "form-group">
                            <label>Nombre</label>
                            <input type="text" name="nombre" id="nombre" required placeholder="Ingrese el nombre del petshop">
                        </div>
                    </div>
                    <div class= "row">
                        <div class= "form-group">
                            <label>Direccion</label>
                            <input type="text" name="direccion" id="direccion" required placeholder="Ingrese la direccion del petshop">
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