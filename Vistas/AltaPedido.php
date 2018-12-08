<?php namespace Vistas; ?>

	<div class="container" style="padding: 150px">
	    <div class="row">
	        <div>
                <h1> Alta Pedido </h1>
                <form role= "form" method="POST" action="<?php echo DIR.'pedido/ingresarPedido'?>">
	                <div class= "row">
                        <div class= "form-group">
                            <label>Tamano</label>
                            <select name="tamano" id="tamano" required placeholder="Ingrese el tamano">
                                <option>Gatito</option>
                                <option>Chico</option>
                                <option>Grande</option>
                            </select>
                        </div>
                    </div>
                    <div class= "row">
                        <div class= "form-group">
                            <label>Nombre</label>
                            <input type="text" name="nombre" id="nombre" required placeholder="Ingrese el nombre a grabar">
                        </div>
                    </div>
                    <div class= "row">
                        <div class= "form-group">
                            <label>Telefono</label>
                            <input type="text" name="telefono" id="telefono" required placeholder="Ingrese el telefono a grabar">
                        </div>
                    </div>
                    <div class= "row">
                        <div class= "form-group">
                            <label>Cliente</label>
                            <input type="text" name="cliente" id="cliente" required placeholder="Ingrese el cliente">
                        </div>
                    </div>
                    <div class= "row">
                        <div class= "form-group">
                            <label>Petshop</label>
                            <select name="petshop" id="petshop" required placeholder="Ingrese Petshop">
                                <option>Libertad</option>
                                <option>Libra</option>
                                <option>Mariela</option>
                                <option>Paso</option>
                                <option>Pauli</option>
                                <option>Wilson</option>
                            </select>
                        </div>
                    </div>
                    <div class= "row">
                        <div class= "form-group">
                            <label>Numero ID</label>
                            <input type="text" name="numero" id="numero" required placeholder="Ingrese el numero identificatorio">
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
					<a href=" <?php echo DIR .'Inicio' ?>">VOLVER A INICIO</a>
				</div>
	        </div>
	    </div>
	</div>