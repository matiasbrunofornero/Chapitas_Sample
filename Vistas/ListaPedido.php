<?php namespace Vistas; ?>

<section>
    <h3> Lista de Pedidos </h3>
    <table>
        <thead>
            <tr>
                <th width="50px">Numero</th>
                <th width="50px">Tamano</th>
                <th width="50px">Nombre</th>
                <th width="50px">Telefono</th>
                <th width="50px">Cliente</th>
                <th width="50px">Petshop</th>
                <th width="50px">Direccion</th>

            </tr>
        </thead>
        <tbody>
        <?php
        if(!empty($pedidos))
        {
            foreach($pedidos as $i)
            {
                ?>
                <tr>
                    <td><?php echo $i['Numero'];?></td>
                    <td><?php echo $i['Tamano'];?></td>
                    <td><?php echo $i['Nombre'];?></td>
                    <td><?php echo $i['Telefono'];?></td>
                    <td><?php echo $i['Cliente'];?></td>
                    <td><?php echo $i['Petshop'];?></td>
                </tr>
                <?php 
            }
        }
        ?>
        </tbody>
    </table>
    <div style="margin-top: 10px">
		<a href=" <?php echo DIR."pedido/altaPedido"; ?>">INGRESAR NUEVO PEDIDO</a>
	</div>
</section>
