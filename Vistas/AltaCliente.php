<?php namespace Vistas;
	

?>
<div class="container">
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3  class="panel-title">Alta Cliente <small></small></h3>
			 	</div>
			 	<div class="panel-body">
			    	<form role="form" method="POST" action="<?php echo DIR . 'cliente/ingresarCliente'?>">
			    		<div class="row">
		    				<div class="col-md-6 col-md-offset-2">
		    					<div class="form-group">
		    						<label>Nombre</label>
		    						<input type="text" name="nombre" id="nombre" class="form-control input-sm floatlabel" required=on placeholder="Nombre">
		    					</div>
		    				</div>
		    			</div>
		    			<div class="row">
		    				<div class="col-md-6 col-md-offset-2">
		    					<div class="form-group">
		    						<label>Apellido</label>
		    						<input type="text" name="apellido" id="apellido" class="form-control input-sm floatlabel" required=on placeholder="Apellido">
		    					</div>
		    				</div>
		    			</div>
		    			<div class="row">
		    				<div class="col-md-6 col-md-offset-2">
		    					<div class="form-group">
		    						<label>Dni</label>
		    						<input type="text" maxlength="8" name="dni" id="dni" class="form-control input-sm floatlabel" required=on>
		    					</div>
		    				</div>
		    			</div>
		    			<div class="row">
		    				<div class="col-md-6 col-md-offset-2">
		    					<div class="form-group">
		    						<label>Domicilio</label>
		    						<input type="text" name="domicilio" id="domicilio" class="form-control input-sm floatlabel" required=on placeholder="Domicilio">
		    					</div>
		    				</div>
		    			</div>

		    			<div class="row">
		    				<div class="col-md-6 col-md-offset-2">
		    					<div class="form-group">
		    						<label>Email</label>
		    						<input type="text" name="email" id="email" class="form-control input-sm floatlabel" required=on placeholder="Email">
		    					</div>
		    				</div>
		    			</div>
			    		<input type="submit" class="btn btn-success btn-block" style="color: white" value="Agregar Cliente">
			    		<input type="reset" class="btn btn-danger btn-block" style="color: white" value="Limpiar Campos">
					</div>
				</form>
				<div align="center" style="margin-top: 10px">
					<a href="<?php echo DIR .'Inicio'?>">VOLVER A INICIO</a>
				</div>
			</div>
    	</div>
   	</div>
 </div>
    

