	<div class="form-group">
	<label for="persona">Persona</label>
	<select id="persona" name="persona" class="form-control" onchange="cambioPersona()">
		<option value="F"<?=$persona=="F"?" selected":" disabled"?>>Fisica</option>
		<option value="J"<?=$persona=="J"?" selected":" disabled"?>>Juridica</option>
	</select>
	</div>

	<div id="fisica1">

	<div class="form-group">
	<label for="sexo">Sexo</label>
	<select id="sexo" name="sexo" class="form-control">
		<option value="F"<?=$sexo=="F"?" selected":" disabled"?>>Femenino</option>
		<option value="M"<?=$sexo=="M"?" selected":" disabled"?>>Masculino</option>
	</select>
	</div>

	<div class="form-group">
	<label for="apellido">Apellido</label>
	<input type="text" id="apellido" name="apellido" class="form-control form-control-sm" value="<?=$apellido?>" readonly>
	</div>

	<div class="form-group">
	<label for="nombres">Nombres</label>
	<input type="text" id="nombres" name="nombres" class="form-control form-control-sm" value="<?=$nombres?>" readonly>
	</div>

	<div class="form-group">
	<label for="nacionalidad">Nacionalidad</label>
	<select id="idnacionalidad" name="idnacionalidad" class="form-control">
	<?php
	$sql="SELECT * FROM nacionalidades ORDER BY nacionalidad";
	$result=mysqli_query($conn,$sql);
	while ($data=mysqli_fetch_array($result)) {
		$id=$data['id'];
		$nacionalidad=$data['nacionalidad'];
		$opcion=($id==$idnacionalidad ? "selected" : "disabled");
		echo "<option value='$id' $opcion>$nacionalidad</option>";
	}
	mysqli_free_result($result);
	?>
	</select>
	</div>

	<div class="form-group">
	<label for="idtipodocumento">Tipo documento</label>
	<select id="idtipodocumento" name="idtipodocumento" class="form-control">
	<?php
	$sql="SELECT * FROM tipodocumentos ORDER BY nomdocumento";
	$result=mysqli_query($conn,$sql);
	while ($data=mysqli_fetch_array($result)) {
		$id=$data['id'];
		$nomdocumento=$data['nomdocumento'];
		$opcion=($id==$idtipodocumento ? "selected" : "disabled");
		echo "<option value='$id' $opcion>$nomdocumento</option>";
	}
	mysqli_free_result($result);
	?>
	</select>
	</div>

	<div class="form-group">
	<label for="nrodocumento">Nro documento</label>
	<input type="text" id="nrodocumento" name="nrodocumento" class="form-control form-control-sm" value="<?=$nrodocumento?>" readonly>
	</div>

	</div>

	<div id="juridica1">

	<div class="form-group">
	<label for="razonsocial">Razon social</label>
	<input type="text" id="razonsocial" name="razonsocial" class="form-control form-control-sm" value="<?=$razonsocial?>" readonly>
	</div>

	</div>

	<div class="form-group">
	<label for="nrocuit">CUIT</label>
	<input type="text" id="nrocuit" name="nrocuit" class="form-control form-control-sm" value="<?=$nrocuit?>" readonly>
	</div>

	<div id="fisica2">

	<div class="form-group">
	<label for="fechanac">Fecha nacimiento</label>
	<input type="text" id="fechanac" name="fechanac" class="form-control form-control-sm" value="<?=$fechanac?>" readonly>
	</div>

	<div class="form-group">
	<label for="idestcivil">Estado civil</label>
	<select id="idestcivil" name="idestcivil" class="form-control">
	<?php
	$sql="SELECT * FROM estciviles ORDER BY nomcivil";
	$result=mysqli_query($conn,$sql);
	while ($data=mysqli_fetch_array($result)) {
		$id=$data['id'];
		$nomcivil=$data['nomcivil'];
		$opcion=($id==$idestcivil ? "selected" : "disabled");
		echo "<option value='$id' $opcion>$nomcivil</option>";
	}
	mysqli_free_result($result);
	?>
	</select>
	</div>

	<div class="form-group">
	<label for="nupcias">Nupcias</label>
	<input type="text" id="nupcias" name="nupcias" class="form-control form-control-sm" value="<?=$nupcias?>" readonly>
	</div>

	<div class="form-group">
	<label for="conyuge">Conyuge</label>
	<input type="text" id="conyuge" name="conyuge" class="form-control form-control-sm" value="<?=$conyuge?>" readonly>
	</div>

	</div>

	<div id="juridica2">

	<div class="form-group">
	<label for="tomorpc">Tomo R.P.C.</label>
	<input type="text" id="tomorpc" name="tomorpc" class="form-control form-control-sm" value="<?=$tomorpc?>" readonly>
	</div>

	<div class="form-group">
	<label for="foliorpc">Folio R.P.C.</label>
	<input type="text" id="foliorpc" name="foliorpc" class="form-control form-control-sm" value="<?=$foliorpc?>" readonly>
	</div>

	<div class="form-group">
	<label for="nrorpc">Nro R.P.C.</label>
	<input type="text" id="nrorpc" name="nrorpc" class="form-control form-control-sm" value="<?=$nrorpc?>" readonly>
	</div>

	<div class="form-group">
	<label for="fecharpc">Fecha R.P.C.</label>
	<input type="text" id="fecharpc" name="fecharpc" class="form-control form-control-sm" value="<?=$fecharpc?>" readonly>
	</div>

	</div>

	<div class="form-group">
	<label for="calle">Calle</label>
	<input type="text" id="calle" name="calle" class="form-control form-control-sm" value="<?=$calle?>" readonly>
	</div>

	<div class="form-group">
	<label for="nrocalle">Nro calle</label>
	<input type="text" id="nrocalle" name="nrocalle" class="form-control form-control-sm" value="<?=$nrocalle?>" readonly>
	</div>

	<div class="form-group">
	<label for="idprovincia">Provincia</label>
	<select id="idprovincia" name="idprovincia" class="form-control">
	<?php
	$sql="SELECT * FROM provincias ORDER BY nomprovincia";
	$result=mysqli_query($conn,$sql);
	while ($data=mysqli_fetch_array($result)) {
		$id=$data['id'];
		$nomprovincia=$data['nomprovincia'];
		$opcion=($id==$idprovincia ? "selected" : "disabled");
		echo "<option value='$id' $opcion>$nomprovincia</option>";
	}
	mysqli_free_result($result);
	?>
	</select>
	</div>

	<div class="form-group">
	<label for="idlocalidad">Localidad</label>
	<select id="idlocalidad" name="idlocalidad" class="form-control">
	<?php
	$sql="SELECT * FROM localidades ORDER BY nomlocalidad";
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
	<label for="porcentaje">Porcentaje</label>
	<input type="text" id="porcentaje" name="porcentaje" class="form-control form-control-sm" value="<?=$porcentaje?>" readonly>
	</div>
