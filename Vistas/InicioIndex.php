<?php namespace Vistas; ?>

<div class="container" style="padding: 150px">
    <div class="row">
        <div>
            <h1> Bienvenido a ChapitasPHP </h1>
            <form role= "form" method="POST" action="<?php echo DIR.'usuario/buscarUsuario'?>">
                <div class= "row">
                    <div class= "form-group">
                        <label>Email</label>
                        <input type="text" name="email" id="email" required placeholder="Ingrese su Email">
                    </div>
                </div>
                <div class= "row">
                    <div class= "form-group">
                        <label>Password</label>
                        <input type="password" name="password" id="password" required placeholder="Ingrese su contrasena">
                    </div>
                </div>
                <div class= "row">
                    <div class= "form-group">
                        <input type="submit" class="btn btn-success btn-block" style="color: black" value="Ingresar">
                        <input type="reset" class="btn btn-danger btn-block" style="color: black" value="Limpiar Campos">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>