<?php namespace Vistas;


?>
<section style="margin-bottom: 50px">
		<div class="container">
        	<div class="row centered-form">
		        <div class="col-md-10 col-md-offset-1">
		        	<div class="panel panel-default">
		        		<div class="panel-heading">
					    		<h3 class="panel-title">Listado de Clientes <small></small></h3>
					 	</div>
					 			<table class="table table-inverse"  border="1">
					<thead>
						<tr>
							<th width="50px">Apellido</th>
							<th width="50px">Nombre</th>
							<th width="35px">Dni</th>
							<th width="90px">Domicilio</th>
							<th width="5px">Email</th>
						</tr>
					</thead>
					<tbody>
					<?php
					if(!empty($clientes)){ 
						foreach ($clientes as $i) {
							
						?>
						<tr>
							<td><?php echo $i['Apellido'] ; ?></td>
							<td><?php echo $i['Nombre'] ; ?></td>
							<td><?php echo $i['DNI'] ; ?></td>
							<td><?php echo $i['Domicilio'] ; ?></td>
							<td><?php echo $i['Email'] ; ?></td>
						</tr>
						<?php
						}
					}
					?>
					</tbody>
				</table>
			    	</div>
		    	</div>
		    </div>
		    <div align="center" style="margin-top: 10px">
				<a href="..\index.php">VOLVER A INICIO |</a><a href="<?php echo DIR . 'cliente/altaCliente'; ?>"> CARGAR CLIENTE</a>
			</div>
    	</div>
</section>

