<?php namespace Vistas; ?>

	<div class="container" style="padding: 150px">
	    <div class="row">
	        <div>
                <h1> Alta Pedido </h1>
                <form role= "form" method="POST" action="<?php echo DIR . 'pedido/ingresarPedido'?>">
	                <div class= "row">
                        <div class= "form-group">
                            <label>Tamano</label>
                            <input type="text" name="tamano" id="tamano" required placeholder="Ingrese el tamano">
                        </div>
                    </div>


                        <input type="submit" value="FINALIZAR CARGA" 
                        style="width: 230px" onclick="location=''">
                        <br><br>

	                </div>
	        </div>
	    </div>
	</div>