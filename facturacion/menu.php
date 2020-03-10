

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
		
		<a class="navbar-brand" href="/">
			<img src="../img/logo_small.jpg" class="" width="40px">
		</a>
		
    
		<ul class="nav navbar-nav mr-auto">
			<?php if($_COOKIE["permiso_usuarios"] == "administrador" ){?>
				<li class="nav-item">
					<a class="nav-link" href="../ventas/index.php">
						<i class="fas fa-dollar-sign"></i> Ventas
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../inventarios/movimientos.php?tipo_movimiento=ENTRADA">
						<i class="fas fa-arrow-left"></i> Entradas
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../inventarios/movimientos.php?tipo_movimiento=SALIDA">
						<i class="fas fa-arrow-right"></i> Salidas
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../inventarios/inventarios.php">
						<i class="fas fa-boxes"></i> Inventarios
					</a> 
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../productos/productos.php">
						<i class="fas fa-box-open"></i> Productos
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../catalogos/departamentos.php">
						<i class="fas fa-list"></i> Categorías
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../catalogos/vendedores.php">
						<i class="fas fa-user-tie"></i> Vendedores
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../facturacion/facturas.php">
						<i class="fas fa-qrcode"></i> Facturación
						<span class="badge badge-secondary"><?php echo $timbres_restantes;?></span>
						
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../clientes">
						<i class="fas fa-users"></i> Clientes
					</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link" href="../usuarios/usuarios.php">
						<i class="fas fa-user"></i> Usuarios
					</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-chart-bar"></i> Reportes
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="../reportes/comisiones.php">Comisiones</a>
						<a class="dropdown-item" href="../reportes/cuentas_por_cobrar.php">Cuentas Por Cobrar</a>
					</div>
				</li>
				<?php
				}
				else{ ?>
				<li class="nav-item">
					<a class="nav-link" href="../productos/productos.php">
						<i class="fas fa-box-open"></i> Productos
					</a>
				</li>
				<?php	
				}
			?>
		</ul>
    <ul class="nav navbar-nav navbar-right">
     <li class="nav-item">
				<a class="nav-link" href="#1">
					<i class="fas fa-user"></i>	<?php echo $_COOKIE["nombre_usuarios"]?>
					<input type="hidden" id="cookie_id_usuarios" value="<?php echo $_COOKIE["id_usuarios"]?>">
					<input type="hidden" id="cookie_nombre_usuarios" value="<?php echo $_COOKIE["nombre_usuarios"]?>">
					<input type="hidden" id="cookie_permiso_usuarios" value="<?php echo $_COOKIE["permiso_usuarios"]?>">
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="../login/logout.php">
					<i class="fas fa-sign-out-alt"></i>	Salir
				</a>
			</li>
		</ul>
	</div>
</nav>