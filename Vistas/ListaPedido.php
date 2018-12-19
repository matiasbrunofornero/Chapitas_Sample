<?php namespace Vistas; ?>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<section>
    <h3> Lista de Pedidos </h3>
    <table>
        <thead>
            <tr>
                <th width="50px">Numero</th>
                <th width="50px">Tamano</th>
                <th width="50px">Mascota</th>
                <th width="50px">Telefono</th>
                <th width="50px">Cliente</th>
                <th width="50px">Petshop</th>
                <th width="50px">Direccion</th>
                <th width="50px">Acciones</th>
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
                    <td><?php echo $i['Mascota'];?></td>
                    <td><?php echo $i['Telefono'];?></td>
                    <td><?php echo $i['Cliente'];?></td>
                    <td><?php echo $i['Nombre'];?></td>
                    <td><?php echo $i['Direccion'];?></td>
                    <td><br>
                        <form role= "form" method="POST" action="<?php echo DIR . 'pedido/eliminar'?>">
                        <input type="hidden" name="pedidos" value="<?php echo $i['Numero'];?>">
                        <button style="font-size: 12px" type="submit">Eliminar <i class="fa fa-trash-o"></i></button>
                        </form>
                    </td>
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
