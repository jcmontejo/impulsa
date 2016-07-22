@include('alerts.errors')
<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
            <div class="box-header with-border">
              
            </div>
<div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre Comercial</label>
                  <input type="Text" name="tradename" class="form-control"  placeholder="Nombre de la Empresa">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Razón Social</label>
                  <input type="text" name="business_name" class="form-control"  placeholder="Razón Social registrada en el SAT">
                </div>

                 <div class="form-group">
                  <label for="exampleInputPassword1">RFC</label>
                  <input type="text" name="rfc" class="form-control"  placeholder="RFC de la Empresa">
                </div>

                 <div class="form-group">
                  <label for="exampleInputPassword1">Giro o Actividad Prioritaria</label>
                 <select id="ddIndustry" name="turn" class="form-control" data-msg-required="Debes seleccionar un sector">
						<option selected="selected" value="0">Selecciona el sector</option>
						<option value="Agricultura / Pesca / Ganader&#237;a">Agricultura / Pesca / Ganader&#237;a</option>
						<option value="Construcci&#243;n / obras">Construcci&#243;n / obras</option>
						<option value="Educaci&#243;n">Educaci&#243;n</option>
						<option value="Energ&#237;a">Energ&#237;a</option>
						<option value="Entretenimiento / Deportes">Entretenimiento / Deportes</option>
						<option value="Fabricaci&#243;n">Fabricaci&#243;n</option>
						<option value="Finanzas / Banca">Finanzas / Banca</option>
						<option value="Gobierno / No Lucro">Gobierno / No Lucro</option>
						<option value="Hosteler&#237;a / Turismo">Hosteler&#237;a / Turismo</option>
						<option value="Inform&#225;tica / Hardware">Inform&#225;tica / Hardware</option>			
						<option value="Internet">Internet</option>
						<option value="Legal / Asesor&#237;a">Legal / Asesor&#237;a</option>
						<option value="Materias Primas">Materias Primas</option>
						<option value="Medios de Comunicaci&#243;n">Medios de Comunicaci&#243;n</option>
						<option value="Publicidad / RRPP">Publicidad / RRPP</option>
						<option value="RRHH / Personal">RRHH / Personal</option>
						<option value="Salud / Medicina">Salud / Medicina</option>
						<option value="Servicios Profesionales">Servicios Profesionales</option>
						<option value="Telecomunicaciones">Telecomunicaciones</option>
						<option value="Transporte">Transporte</option>
						<option value="Venta al consumidor">Venta al consumidor</option>
						<option value="Venta al por mayor">Venta al por mayor</option>

				</select>


                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Gerente o Director</label>
                  <input type="text" name="manager" class="form-control"  placeholder="Nombre">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Contacto</label>
                  <input type="text" name="contact" class="form-control"  placeholder="Nombre del Contacto con Impulsa">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Cargo</label>
                  <input type="text" name="position" class="form-control"  placeholder="Puesto que ocupa">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Horario de Localización</label>
                  <input type="text" name="location" class="form-control"  placeholder="Hora">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Teléfono</label>
                  <input type="text" name="phone" class="form-control"  placeholder="Tel. Oficina">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Celular</label>
                  <input type="text" name="cell" class="form-control"  placeholder="Número de Celular">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Correo Electrónico</label>
                  <input type="text" name="email" class="form-control"  placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Página Web</label>
                  <input type="text" name="web" class="form-control"  placeholder="Sitio web ">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Domicilio Comercial</label>
                  <input type="text" name="business_address" class="form-control"  placeholder="Domicilio">
                </div>

                
              </div>
              <!-- /.box-body -->
              <div class="box-header with-border">
              	<h3 class="box-title">Domicilio Fiscal</h3>
              </div>
              <div class="box-body">
               	<div class="form-group">
                  <label for="exampleInputPassword1">Calle y Número</label>
                  <input type="text" name="street" class="form-control"  placeholder="Domicilio">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Colonia</label>
                  <input type="text" name="colony" class="form-control"  placeholder="Domicilio">
                </div>
                <div class="form-group">
                	<label >Ciudad</label>
                	 <select  id="ddCity" class="form-control" name="city" data-msg-required="Debes seleccionar una ciudad">
	<option selected="selected"  value="0">Selecciona una ciudad</option>
	
	<option value="Acacoyagua">Acacoyagua </option>
	<option value="Acala ">Acala</option>
	<option value="Acapetahua">Acapetahua</option>
	<option value="Aldama">Aldama</option>
	<option value="Altamirano ">Altamirano  </option>
	<option value="Amatán  ">Amatán </option>
	<option value="Amatenango de la Frontera">Amatenango de la Frontera</option>
	<option value="Amatenango del Valle">Amatenango del Valle</option>
	<option value="Angel Albino Corzo">Angel Albino Corzo</option>
	<option value="Arriaga">Arriaga</option>
	<option value="Bejucal de Ocampo">Bejucal de Ocampo</option>
	<option value="Bella Vista">Bella Vista</option>
	<option value="Benemérito de las Américas">Benemérito de las Américas</option>
	<option value="Berriozábal">Berriozábal</option>
	<option value="Bochil">Bochil</option>
	<option value="Cacahoatán">Cacahoatán</option>
	<option value="Catazajá">Catazajá</option>
	<option value="Chalchihuitán"></option>
	<option value="Chamula ">Chamula </option>
	<option value="Chanal">Chanal</option>
	<option value="Chapultenango">Chapultenango</option>
	<option value="Chenalhó ">Chenalhó </option>
	<option value="Chiapa de Corzo">Chiapa de Corzo</option>
	<option value="Chiapilla">Chiapilla</option>
	<option value="Chicoasén">Chicoasén</option>
	<option value="Chicomuselo ">Chicomuselo </option>
	<option value="Chilón">Chilón</option>
	<option value="Cintalapa">Cintalapa</option>
	<option value="Coapilla">Coapilla</option>
	<option value="Comitán de Domínguez">Comitán de Domínguez</option>
	<option value="Copainalá">Copainalá</option>
	<option value="El Bosque">El Bosque</option>
	<option value="El Porvenir">El Porvenir</option>
	<option value="Escuintla">Escuintla</option>
	<option value="Francisco León">Francisco León</option>
	<option value="Frontera Comalapa">Frontera Comalapa</option>
	<option value="Frontera Hidalgo">Frontera Hidalgo</option>
	<option value="Huehuetán">Huehuetán</option>
	<option value="Huitiupán">Huitiupán</option>
	<option value="Huixtán">uixtán</option>
	<option value="Huixtla">Huixtla</option>
	<option value="Jiquipilas">Jiquipilas</option>
	<option value="La Concordia ">La Concordia </option>
	<option value="La Trinitaria">La Trinitaria</option>
	<option value="Las Margaritas">Las Margaritas </option>
	<option value="Mazapa de Madero">Mazapa de Madero</option>
	<option value="Mazatán">Mazatán</option>
	<option value="Motozintla">Motozintla</option>
	<option value="Ocosingo">Ocosingo</option>
	<option value="Ocozocoautla de Espinosa">Ocozocoautla de Espinosa</option>
	<option value="Pijijiapan">Pijijiapan</option>
	<option value="San Cristóbal de las Casas">San Cristóbal de las Casas</option>
	<option value="San Fernando">San Fernando</option>
	<option value="Simojovel">Simojovel</option>
	<option value="Suchiapa">Suchiapa</option>
	<option value="Tapachula">Tapachula</option>
	<option value="Tapilula">Tapilula</option>
	<option value="Teopisca">Teopisca</option>
	<option value="Tonalá">Tonalá</option>
	<option value="Tuxtla Chico">Tuxtla Chico</option>
	<option selected="selected" value="Tuxtla Gutiérrez">Tuxtla Gutiérrez </option>
	<option value="Villa Comaltitlán">Villa Comaltitlán</option>
	<option value="Villaflores">Villaflores</option>
	<option value="Yajalón">Yajalón</option>
	<option value="Zinacantán">Zinacantán</option>

	<option value=" Cd de México"> Cd de México</option>
	<option value="Guadalajara">Guadalajara</option>
	<option value="Monterrey">Monterrey</option>
	<option value="Puebla">Puebla</option>
	<option value="Acapulco">Acapulco</option>
	<option value="Cancún">Cancún</option>
	<option value="Guanajuato">Guanajuato</option>
	<option value="León">León</option>
	<option value="Zacatecas">Zacatecas</option>
	<option value="Tijuana">Tijuana</option>
	<option value="Otra">Otra</option>
</select>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Código Postal</label>
                  <input type="text" name="postal" class="form-control"  placeholder="Código Postal que te corresponde">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Teléfono</label>
                  <input type="text" name="telephone" class="form-control"  placeholder="Número teléfonico">
                </div>

    <div class="form-group">
                  <label for="exampleInputPassword1">País</label>
                  <select  id="ddCountry" name="country" class="form-control" data-msg-required="Debes seleccionar un país">
	<option value="0">Selecciona un pa&#237;s</option>
	<option value="Argentina">Argentina</option>
	<option value="Bolivia">Bolivia</option>
	<option value="Canada">Canada</option>
	<option value="Chile">Chile</option>
	<option value="Colombia">Colombia</option>
	<option value="Costa Rica">Costa Rica</option>
	<option value="Cuba">Cuba</option>
	<option value="Ecuador">Ecuador</option>
	<option value="El Salvador">El Salvador</option>
	<option value="España">Espa&#241;a</option>
	<option value="EUA">EUA</option>
	<option value="Guatemala">Guatemala</option>
	<option value="Honduras">Honduras</option>
	<option selected="selected" value="México">M&#233;xico</option>
	

</select>

                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Estado</label>
                  <select  id="ddLocalization" name="state" class="form-control"  data-msg-required="Debes seleccionar un estado">
	<option selected="selected" value="0">Selecciona el estado</option>
	<option value="D.F">Distrito Federal</option>
	<option value="Aguascalientes">Aguascalientes</option>
	<option value="Baja California">Baja California</option>
	<option value="Baja California Sur">Baja California Sur</option>
	<option value="Campeche">Campeche</option>
	<option value="Coahuila">Coahuila</option>
	<option value="Colima">Colima</option>
	<option selected="selected" value="Chiapas">Chiapas</option>
	<option value="Chihuahua">Chihuahua</option>
	<option value="Durango">Durango</option>
	<option value="Guanajuato">Guanajuato</option>
	<option value="Guerrero">Guerrero</option>
	<option value="Hidalgo">Hidalgo</option>
	<option value="Jalisco">Jalisco</option>
	<option value="Estado de México">Estado de M&#233;xico</option>
	<option value="Michoacan">Michoac&#225;n</option>
	<option value="Morelos">Morelos</option>
	<option value="Nayarit">Nayarit</option>
	<option value="Nuevo Le&#243;n">Nuevo Le&#243;n</option>
	<option value="Oaxaca">Oaxaca</option>
	<option value="Puabla">Puebla</option>
	<option value="Quer&#233;taro">Quer&#233;taro</option>
	<option value="Quintana Roo">Quintana Roo</option>
	<option value="San Luis Potos&#237;">San Luis Potos&#237;</option>
	<option value="Sinaloa">Sinaloa</option>
	<option value="Sonora">Sonora</option>
	<option value="Tabasco">Tabasco</option>
	<option value="Tamaulipas">Tamaulipas</option>
	<option value="Tlaxcala">Tlaxcala</option>
	<option value="Veracruz">Veracruz</option>
	<option value="Yucat&#225;n">Yucat&#225;n</option>
	<option value="Zacatecas">Zacatecas</option>
	<option value="Extranjero">Extranjero</option>

</select><br>
<p align="justify"><code>La UNICACH a través de la Dirección de Competitividad e Innovación se compromete a  emplear los datos aquí suscritos para efectos de contacto y vinculación con la Bolsa de Trabajo, siendo el objetivo principal la publicación de vacantes en los distintos medios de la Bolsa de Trabajo, como es la red social Impulsa, Bolsa de Trabajo Universitaria en Facebook y para efectos del Corte de Vacantes que se envía cada quincena a la comunidad unicachense así como usuarios externos inscritos.</code></p>

                </div>
<div class="box-footer">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" name="limpiar" class="btn btn-danger">Cancelar</button>  
              </div>
                </div>
             </div>
		</div>
	</div>