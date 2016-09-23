Estas en : <a href="http://localhost/formulario/index.php/consultas/">Inicio</a> > <a href="http://localhost/formulario/index.php/consultas/">Empresas</a> > Registro de Empresas
<br>
<hr>
<h3>REGISTRO DE EMPRESAS</h3>

<fieldset class="fieldset1">INFORMACION BASICA</fieldset>
<form role="form" action="http://localhost/formulario/index.php/cform/nueva_empresa" method="post" accept-charset="utf-8">
	<input class="sub" type="submit" name="mysubmit" value="GUARDAR!" />
	<div class="cont">
		<div class="form-group">
			<div class="row row1">
				<label class="control-label" for="nombre">Nombre Comercial</label>
				
				<input class="form-control input-md nombre" type="text" name="nombre" value="" id="nombre"  />
			</div>
			<div class="row row2">
				<label class="control-label" >Tipologia de la Empresa</label>
				<select class="form-control" name="tipologia">
					<option value="SA">Sociedad Anonina (SA)</option>
					<option value="CA">Compañia Anonia (CA)</option>
					<option value="CO">Cooperativa (CO)</option>
					<option value="FU">Fundacion (FU)</option>
				</select>		
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="form-group" style="margin-top: 25px;">
			<div class="row row3">
				<label class="control-label" >Pais</label>
					<select  class="form-control"  name="pais">
					<option value="VE">Venezuela</option>
					<option value="EEUU">Estados Unidos</option>
					<option value="CO">Colombia</option>
					<option value="ES">España</option>
					</select>
			</div>
			<div class="row row4">
				<label class="control-label" >Estado</label>
				<input class="form-control input-md estado" type="text" name="estado" value="" id="estado"  />
			</div>
			<div class="row row4">
				<label class="control-label" >Ciudad</label>
				<input  class="form-control input-md ciudad" type="text" name="ciudad" value="" id="ciudad"  />		
			</div>		
		</div>
		<div class="clearfix"></div>
		<fieldset class="fieldset2">INFORMACION DE REGISTRO</fieldset>
		<div class="form-group l_">
			<div class="row row31">
				<label class="control-label">Email/Usuario</label>
				<input class="form-control input-md email" type="text" name="email" value="" id="email"  />
			</div>

			<div class="row row4">
				<label class="control-label">Pass</label>
				<input class="form-control input-md pass" type="password" name="pass" value="" id="pass"  />		
			</div>

			<div class="row row4">
				<label class="control-label">Re  - Pass</label>
				<input class="form-control input-md re-pass" type="password" name="repass" value="" id="repass"  />
			</div>

		</div>		

	</div>

	<div class="form-group">
		<div class="row row4">
			<label class="control-label">Descripcion de la Empresa</label>
			<textarea  class="form-control descripcion" type="text" name="descripcion" value="" id="descripcion"  rows="10"></textarea>
		</div>

	</div>
	<input type="hidden" name="grabar" value="si" />

</form>
<div class="clearfix"></div><br><br>
<hr>

<?php echo validation_errors(); ?>