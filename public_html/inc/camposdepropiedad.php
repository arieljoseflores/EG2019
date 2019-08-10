	<div class="form-group">
	<label for="iddepartamento">Departamento</label>
	<select id="iddepartamento" name="iddepartamento" class="form-control">
	<?php
	$sql="SELECT * FROM departamentos ORDER BY 1";
	$result=mysqli_query($conn,$sql);
	while ($data=mysqli_fetch_array($result)) {
		$id=$data['id'];
		$nomdepartamento=$data['nomdepartamento'];
		$opcion=($id==$iddepartamento ? "selected" : "disabled");
		echo "<option value='$id' $opcion>$id - $nomdepartamento</option>";
	}
	mysqli_free_result($result);
	?>
	</select>
	</div>

	<div class="form-group">
	<label for="matricula">Matricula</label>
	<input type="text" id="matricula" name="matricula" class="form-control form-control-sm" value="<?=$matricula?>" readonly>
	</div>

	<div class="form-group">
	<label for="submatricula">Submatricula</label>
	<input type="text" id="submatricula" name="submatricula" class="form-control form-control-sm" value="<?=$submatricula?>" readonly>
	</div>

	<div class="form-group">
	<label for="idlocalidad">Localidad</label>
	<select id="idlocalidad" name="idlocalidad" class="form-control">
	<?php
	$sql="SELECT * FROM localidades WHERE idprovincia='S' ORDER BY nomlocalidad";
	$result=mysqli_query($conn,$sql);
	while ($data=mysqli_fetch_array($result)) {
		$id=$data['id'];
		$nomlocalidad=$data['nomlocalidad'];
		$opcion=($id==$idlocalidad ? "selected" : "disabled");
		echo "<option value='$id' $opcion>$nomlocalidad</option>";
	}
	mysqli_free_result($result);
	?>
	</select>
	</div>

	<div class="form-group">
	<label for="idzona">Zona</label>
	<select id="idzona" name="idzona" class="form-control">
	<?php
	$sql="SELECT * FROM zonas ORDER BY 1";
	$result=mysqli_query($conn,$sql);
	while ($data=mysqli_fetch_array($result)) {
		$id=$data['id'];
		$nomzona=$data['nomzona'];
		$opcion=($id==$idzona ? "selected" : "disabled");
		echo "<option value='$id' $opcion>$nomzona</option>";
	}
	mysqli_free_result($result);
	?>
	</select>
	</div>

	<div class="form-group">
	<label for="ncatastral">Nomenclatura Catastral</label>
	<input type="text" id="ncatastral" name="ncatastral" class="form-control form-control-sm" value="<?=$ncatastral?>" readonly>
	</div>

	<div class="form-group">
	<label for="pinmobiliaria">Partida inmobiliaria</label>
	<input type="text" id="pinmobiliaria" name="pinmobiliaria" class="form-control form-control-sm" value="<?=$pinmobiliaria?>" readonly>
	</div>

	<div class="form-group">
	<label for="calle">Calle</label>
	<input type="text" id="calle" name="calle" class="form-control form-control-sm" value="<?=$calle?>" readonly>
	</div>

	<div class="form-group">
	<label for="nrocalle">Numero</label>
	<input type="text" id="nrocalle" name="nrocalle" class="form-control form-control-sm" value="<?=$nrocalle?>" readonly>
	</div>

	<div class="form-group">
	<label for="lote">Lote</label>
	<input type="text" id="lote" name="lote" class="form-control form-control-sm" value="<?=$lote?>" readonly>
	</div>

	<div class="form-group">
	<label for="manzana">Manzana</label>
	<input type="text" id="manzana" name="manzana" class="form-control form-control-sm" value="<?=$manzana?>" readonly>
	</div>

	<div class="form-group">
	<label for="superficie">Superficie</label>
	<input type="text" id="superficie" name="superficie" class="form-control form-control-sm" value="<?=$superficie?>" readonly>
	</div>

	<div class="form-group">
	<label for="nroplano">Numero plano</label>
	<input type="text" id="nroplano" name="nroplano" class="form-control form-control-sm" value="<?=$nroplano?>" readonly>
	</div>

	<div class="form-group">
	<label for="anioplano">Anio plano</label>
	<input type="text" id="anioplano" name="anioplano" class="form-control form-control-sm" value="<?=$anioplano?>" readonly>
	</div>

	<div class="form-group">
	<label for="ecalles">Entre calles</label>
	<input type="text" id="ecalles" name="ecalles" class="form-control form-control-sm" value="<?=$ecalles?>" readonly>
	</div>

	<div class="form-group">
	<label for="arranque">Arranque</label>
	<input type="text" id="arranque" name="arranque" class="form-control form-control-sm" value="<?=$arranque?>" readonly>
	</div>

	<div class="form-group">
	<label for="rumbos">Rumbos</label>
	<input type="text" id="rumbos" name="rumbos" class="form-control form-control-sm" value="<?=$rumbos?>" readonly>
	</div>

	<div class="form-group">
	<label for="unidad">Unidad</label>
	<input type="text" id="unidad" name="unidad" class="form-control form-control-sm" value="<?=$unidad?>" readonly>
	</div>

	<div class="form-group">
	<label for="parcela">Parcela</label>
	<input type="text" id="parcela" name="parcela" class="form-control form-control-sm" value="<?=$parcela?>" readonly>
	</div>

	<div class="form-group">
	<label for="supexclu">Superficie exclusiva</label>
	<input type="text" id="supexclu" name="supexclu" class="form-control form-control-sm" value="<?=$supexclu?>" readonly>
	</div>

	<div class="form-group">
	<label for="supcomun">Superficie comun</label>
	<input type="text" id="supcomun" name="supcomun" class="form-control form-control-sm" value="<?=$supcomun?>" readonly>
	</div>

	<div class="form-group">
	<label for="valorpro">Valor proporcional</label>
	<input type="text" id="valorpro" name="valorpro" class="form-control form-control-sm" value="<?=$valorpro?>" readonly>
	</div>

	<div class="form-group">
	<label for="planta">Planta</label>
	<input type="text" id="planta" name="planta" class="form-control form-control-sm" value="<?=$planta?>" readonly>
	</div>

	<div class="form-group">
	<label for="destino">Destino</label>
	<input type="text" id="destino" name="destino" class="form-control form-control-sm" value="<?=$destino?>" readonly>
	</div>
