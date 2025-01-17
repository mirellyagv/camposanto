<div class="m-content" style="width: calc(100%);">
	<!--Begin::Main Portlet-->
	<div class="m-portlet m-portlet--full-height">
		<!--begin: Portlet Head-->
		<div class="m-portlet__head">
			<div class="m-portlet__head-caption">
				<div class="m-portlet__head-title">
					<h3 class="m-portlet__head-text">
						Generación de contrato 
						<?php
							//$prueba = controladorEmpresa::ctrtipoCambio();
						  ?>  
					</h3>
				</div>
			</div>
		</div>
		<!--end: Portlet Head-->
<!--begin: Form Wizard-->
		<div class="m-wizard m-wizard--2 m-wizard--danger" id="m_wizard">
			<!--begin: Message container -->
			<div class="m-portlet__padding-x">
				<!-- Here you can put a message or alert -->
			</div>
			<!--end: Message container -->
<!--begin: Form Wizard Head -->
			<div class="m-wizard__head m-portlet__padding-x">
				<!--begin: Form Wizard Progress -->
				<div class="m-wizard__progress">
					<div class="progress">
						<div class="progress-bar" role="progressbar"  aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
				<!--end: Form Wizard Progress -->  
<!--begin: Form Wizard Nav -->
				<div class="m-wizard__nav">
					<div class="m-wizard__steps">
						<div class="m-wizard__step m-wizard__step--current"  m-wizard-target="m_wizard_form_step_1">
							<a href="#"  class="m-wizard__step-number">
								<span>
									<i class="fa  flaticon-list-3"></i>
								</span>
							</a>
							<div class="m-wizard__step-info">
								<div class="m-wizard__step-title">
									1. Información general
								</div>
							</div>
						</div>
						<div class="m-wizard__step" m-wizard-target="m_wizard_form_step_2">
							<a href="#" class="m-wizard__step-number">
								<span>
									<i class="fa  flaticon-layers"></i>
								</span>
							</a>
							<div class="m-wizard__step-info">
								<div class="m-wizard__step-title">
									2. Detalle de la venta
								</div>
							</div>
						</div>
						<div class="m-wizard__step" m-wizard-target="m_wizard_form_step_5">
							<a href="#" class="m-wizard__step-number">
								<span>
									<i class="fa  flaticon-calendar"></i>
								</span>
							</a>
							<div class="m-wizard__step-info">
								<div class="m-wizard__step-title">
									3. Cronograma
								</div>
							</div>
						</div>
						<div class="m-wizard__step" m-wizard-target="m_wizard_form_step_6">
							<a href="#" class="m-wizard__step-number">
								<span>
									<i class="fa  flaticon-user"></i>
								</span>
							</a>
							<div class="m-wizard__step-info">
								<div class="m-wizard__step-title">
									4. Beneficiario
								</div>
							</div>
						</div>
						<div class="m-wizard__step" m-wizard-target="m_wizard_form_step_7">
							<a href="#" class="m-wizard__step-number">
								<span>
									<i class="fa  flaticon-list"></i>
								</span>
							</a>
							<div class="m-wizard__step-info">
								<div class="m-wizard__step-title">
									5. Comprobante
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="m-separator m-separator--dashed m-separator--lg"></div>
			<div class="m-wizard__form">
				<form class="m-form m-form--label-align-left- m-form--state-" id="m_form">
					<!--begin: Form Body -->
					<div class="m-portlet__body">
						<!--begin: Form Wizard Step 1-->
						<div class="m-wizard__form-step m-wizard__form-step--current" id="m_wizard_form_step_1">
							<div class="row">
								<div class="col-lg-6">
									<div class="row">
										<div class="col-lg-5">
											<label>
												<h5>Datos de programa</h5>
											</label>
										</div>
										<div class="col-lg-6 offset-lg-1">
											<table>
												<tr>
													<td>
														<label class="m-checkbox">
															Venta por regularización&nbsp;&nbsp;
														</label>
													</td>
													<td>
														<span class="m-switch m-switch--sm m-switch--outline m-switch--icon m-switch--danger">
															<label>
																<input type="checkbox"  name="">
																<span></span>
															</label>
														</span>
													</td>
												</tr>
											</table>
										</div>
									</div>
									<div class="m-input-icon m-input-icon--right">
										<div class="row">
											<div class="col-lg-9">
												<label>
													Tipo de programa *
												</label>
												<select class="form-control m-input m-select2 m-select2-general" required name="tipPro" id="tipPro" onchange="validaEspacio(this.value);">
													<option value="">
														Seleccione el tipo de programa
													</option>
													<?php
														$tabla = "vtama_tipo_recaudacion";
														$item1 = "cod_tipo_recaudacion";
														$item2 = "dsc_tipo_recaudacion";
														$prueba = controladorEmpresa::
														ctrSelects($tabla,$item1,$item2);
													  ?> 
												</select>
												<input type="hidden" name="flagIntegral" id="flagIntegral">
											</div>
										<div class="col-lg-3">
												<label class="">
												T.C.:
												</label>
												<div class="input-group m-input-group">
													<input type="text" class="form-control m-input" id="tc" name="tc" value=" <?php $prueba = controladorEmpresa::ctrtipoCambio(); ?>" placeholder="">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<label class="">
										<h5>Representante de ventas</h5>
									</label>
									<div class="row" style="margin-top: 12px;">
										<div class="col-lg-4">
											<label class="">
											Vendedor *
											</label>
											<div class="input-group m-input-group">
												<select class="form-control m-select2 m-select2-general" id="codVendedor" name="codVendedor">
													<option>
														Código
													</option>
													<?php
														$prueba = controladorEmpresa::
														ctrcodVendedor();
													  ?>
												</select>
											</div>
										</div>
										<div class="col-lg-8">
											<label class="">
												&nbsp;
											</label>
											<br>
											<div class="input-group m-input-group">
												<input type="text" class="form-control m-input" name="nomVendedor" disabled id="nomVendedor" placeholder="">
												<div class="input-group-append">
													<span data-toggle="modal" data-target="#m_modal_4">
														<button class="btn btn-danger" type="button" data-toggle="m-tooltip" data-container="body" data-placement="top" title="" data-original-title="Buscar vendedor" onclick="creaTablaVendedor();">
															<i class="la la-search"></i>
														</button>
													</span>
												</div>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-lg-6">
									<div class="row">
										<div class="col-lg-12">
											<label>
												<h5>Plan/Subtipo de servicio</h5>
											</label>
										</div>
									</div>
									<br>
									<div class="m-input-icon m-input-icon--right">
										<div class="row">
											<div class="col-lg-9">
												<label>
													Tipo de Servicio *
												</label>
												<select class="form-control m-input m-select2 m-select2-general" name="planSS" id="planSS" onchange="buscaSubtipo(this.value);">
													<option value="">
														Seleccione el tipo de Servicio
													</option>
													<?php
													  $tabla="vtama_tipo_servicio";
													  $item1="cod_tipo_servicio";
													  $item2="dsc_tipo_servicio";
					  $prueba=controladorEmpresa::ctrSelects($tabla,$item1,$item2);
													  ?> 
												</select>
											</div>
											<div class="col-lg-3">
												<label> Tipo de Nec. *</label>
												<select class="form-control m-input m-select2 m-select2-general" name="tiponec" id="tiponec">
													<option value="NF">NF</option>
													<option value="NI">NI</option>
												</select>
											</div>
										</div>
										<br>
										<div>
											<label>Subtipo *</label>
											<select class="form-control m-input m-select2 m-select2-general" id="subServicio" required name="subServicio">
												<option value="">
													Seleccione el subtipo de Servicio
												</option>
											</select>
										</div>
									</div>
								</div>
								<br><br>
								<div class="col-lg-6">
									<div class="row">
										<div class="col-lg-3">
											<label class="">
												<h5>Cliente *</h5>
											</label>
										</div>
										<div class="col-lg-3 offset-lg-5">
											<table>
												<tr>
													<td>
														<label class="m-checkbox">
															Jurídico&nbsp;&nbsp;
														</label>
													</td>
													<td>
														<span class="m-switch m-switch--sm m-switch--outline m-switch--icon m-switch--danger">
															<label>
																<input type="checkbox" id="juridico" disabled name="">
																<span></span>
															</label>
														</span>
													</td>
												</tr>
											</table>
										</div>
									</div>
									<div class="m-input-icon m-input-icon--right">
										<div class="row" style="margin-top: 10px;">
											<div class="col-lg-4">
												<label>Tipo doc: </label>
												<select disabled class="form-control m-input custom-select custom-select-danger" id="TipoDcoCliente" name="TipoDcoCliente">
													<option value="">
														Seleccione
													</option>
													<?php
											$prueba = controladorEmpresa::ctrtipoDoc();
													  ?> 
												</select>
											</div>
											<div class="col-lg-5">
												<label class="">
													&nbsp;
												</label>
												<select class="form-control m-select2 m-select2-general" id="numDocCliente" name="numDocCliente" >
													<option>
														Número de documento *
													</option>
													<?php
														$prueba = controladorEmpresa::ctrdocCliente();
													  ?>
												</select>
											</div>
											<div class="col-lg-3" style="padding-left: 0px;">
												<br><br>	
												<div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
													<div class="btn-group m-btn-group mr-2" role="group" aria-label="First group">
														<span data-toggle="modal" data-target="#m_modal_2">
														<button type="button" class="m-btn btn btn-danger" data-toggle="m-tooltip" data-container="body" data-placement="top" title="" data-original-title="Buscar cliente" onclick="creaTablaCliente();">
															<i class="la la-search"></i>
														</button>
														</span>
														&nbsp;
														<span data-toggle="modal" data-target="#m_modal_1">
														<button type="button" class="m-btn btn btn-success" data-toggle="m-tooltip" data-container="body" data-placement="top" title="" data-original-title="Registrar nuevo cliente">
															<i class="la la-user-plus"></i>
														</button>
														</span>
														&nbsp;
														<span data-toggle="modal" data-target="#m_modal_3">
														<button type="button" class="m-btn btn btn-metal" 
														data-toggle="m-tooltip" data-container="body" data-placement="top" title="" data-original-title="Buscar prospecto" onclick="creaTablaProspecto();">
															<i class="la la-users"></i>
														</button>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="m-input-icon m-input-icon--right" style="margin-top: 10px;">
										<label>Apellido y Nombre: * </label>
										<div class="input-group m-input-group">
											<input type="text" class="form-control m-input" name="nombreCliente" disabled id="nombreCliente">
										</div>
										<br>
									</div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-lg-12">
									<label>
										<h5>Datos de espacio</h5>
									</label>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-lg-3">
									<label>Camposanto *</label>
									<select class="form-control m-input m-select2 m-select2-general" name="camposanto" required id="camposanto" disabled="disabled">
										<option value="">Camposanto</option>
										<?php
										  $tabla = "vtama_camposanto";
										  $item1 = "cod_camposanto";
										  $item2 = "dsc_camposanto";
								$prueba = controladorEmpresa::ctrCamposanto();
										  ?>
									</select>
								</div>
								<div class="col-lg-3">
									<label> Tipo plataforma:</label>
									<select class="form-control m-input m-select2 m-select2-general" name="tipoPlat" disabled="disabled" id="tipoPlat" onchange="buscaPlataforma(this.value);">
										<option value="">Tipo de plataforma</option>
										<option value="TP001">NICHO</option>
										<option value="TP002">PLATAFORMAS</option>
									</select>
								</div>
								<div class="col-lg-4">
									<label>Plataforma: </label>
									<select class="form-control m-input m-select2 m-select2-general" name="plataforma" id="plataforma" disabled="disabled" onchange="buscaArea(this.value);">
										<option disabled value="">Plataforma</option>
									</select>
								</div>
								<div class="col-lg-2">
									<label>Área: </label>
									<select class="form-control m-input m-select2 m-select2-general" name="area" id="area" disabled="disabled" onchange="buscaEjex(this.value);">
										<option value="">Área</option>
									</select>			
								</div>
							</div>
							<br>
							<div class="row">
								<label class="">
									<h5>&nbsp;</h5>
								</label>
								<div class="col-lg-3">
									<div class="row">
										<div class="col-lg-6">
											<label>Eje Horiz:</label>
											<select class="form-control m-input m-select2 m-select2-general" name="ejex" id="ejex" disabled="disabled" onchange="buscaEjey(this.value);">
												<option disabled value="">Eje Hor.</option>
											</select>
										</div>
										<div class="col-lg-6">
											<label>Eje Vert:</label>
											<select class="form-control m-input m-select2 m-select2-general" name="ejey" id="ejey" disabled="disabled" onchange="buscaEspacio(this.value);">
												<option disabled value="">Eje Ver.</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-lg-3">
									<label>Espacio:</label>
									<select class="form-control m-input m-select2 m-select2-general" name="espacio" id="espacio" disabled onchange="buscanomEspacio(this.value);">
									</select>
								</div>

								<div class="col-lg-3">
									<div class="m-input-icon m-input-icon--right">
										<label>Tipo: </label>
										<input type="text" class="form-control m-input" name="tipo" id="tipo" disabled="disabled">
									</div>
								</div>
								<div class="col-lg-2">
									<div class="m-input-icon m-input-icon--right">
										<label>&nbsp; </label>
										<h3><b><p name="estado" id="estado" style="text-align: center;"></p></b></h3>
									</div>
								</div>
							</div>
							<div class="form-group m-form__group row">
								<div class="col-lg-6">
									<label>
										<h5>Contrato</h5>
									</label>
									<div class="m-input-icon m-input-icon--right">
										<div class="row">
											<div class="col-lg-6">
												<label>
												Localidad:
												</label>
												<select class="form-control m-input m-select2 m-select2-general" disabled name="localidad" id="localidad">
													<option value="00001">Empresa 1</option>
													<option value="00002">Empresa 2</option>
												</select>
											</div>
											<div class="col-lg-6">
												<label class="">
												Contrato:
												</label>
												<input type="text" class="form-control m-input"  name="ctt" id="ctt" disabled="disabled">
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<label class="">
										<h5>&nbsp;</h5>
									</label>
									<div class="row">
										<div class="col-lg-8">
											<label class="">
												Programa:
											</label>
											<div class="input-group">
												<input type="text" class="form-control m-input" placeholder="Programa" disabled>
											</div>
										</div>
										<div class="col-lg-4">
											<br>
											<table>
												<tr>
													<td>
														<label class="m-checkbox">
															Modificación&nbsp;&nbsp;
														</label>
													</td>
													<td>
														<span class="m-switch m-switch--sm m-switch--outline m-switch--icon m-switch--danger">
															<label>
																<input type="checkbox" name="modificaCtt" id="modificaCtt" onclick="modificarctt();">
																<span></span>
															</label>
														</span>
													</td>
												</tr>
											</table>			
										</div>
									</div>
								</div>
						</div>
					</div>
						<!--end: Form Wizard Step 1-->
<!--begin: Form Wizard Step 2-->
						<div class="m-wizard__form-step" id="m_wizard_form_step_2">
							<div class="row">
								<div class="col-sm-10 col-md-4">
									<label>
										<h5>Servicios principales (Planes y/o adicionales)</h5>
									</label>
								</div>
								<div class="col-sm-2 col-md-1">
									<div class="row">
										<div class="col-lg-12">
											<p style="text-align: center;"><button  class="btn btn-metal m-btn m-btn--icon m-btn--icon-only m-btn--pill" data-placement="top" data-toggle="m-tooltip" data-container="body" data-original-title="Para modificación se tomará como descuento lo ya pagado."><i class="fa fa-question"></i></button>
											</p>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-2 offset-md-3" style="align-self:start">		
									<label class="">
										<h5>CUI</h5>
									</label>
									<div class="row">
										<div class="col-lg-4">
											<label class="">
											Importe:
											</label>
										</div>
										<div class="col-lg-8"> 
											<div class="input-group">
												<input type="text" class="form-control m-input" id="importeCUI" name="importeCUI" placeholder="0,00" onchange="cambiaCUI();" style="text-align: right;">
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-2">
									<div class="row">
										<div class="col-lg-6" style="text-align: right;">
											<span data-toggle="modal" data-target="#m_modal_6">
												<button class="btn btn-success m-btn" type="button" data-toggle="m-tooltip" data-container="body" data-placement="top" title="" data-original-title="Añadir servicio" onclick="callTablaServiciosAdic();">
													<i class="fa fa-plus"></i>
												</button>
											</span>
										</div>
										<div class="col-lg-6">
											<span >
												<button class="btn btn-danger m-btn" type="button" data-toggle="m-tooltip" data-container="body" data-placement="top" title="" data-original-title="Eliminar servicio" id="m_sweetalert_demo_8">
													<i class="fa fa-minus"></i>
												</button>
											</span>
										</div>
									</div>
								</div>
								
							</div>
							<div class="form-group m-form__group row">
								<div class="col-lg-12">
									<div class="m-input-icon m-input-icon--right">
										<div class="m-section m-demo m-demo__preview">
											<div class="m-section__content" data-max-height="380">
												<div class="table-responsive">
               		 							<table class="table table-fixed" id="servAgregados">
													<thead style="text-align: center;">
														<tr>
															<th style="width:18rem;">
																Servicio
															</th>
															<th style="width:5rem;">
																Ctd
															</th>
															<th style="width:7rem;">
																P. lista
															</th>
															<th style="width:7rem;">
																P. venta
															</th>
															<th style="width:7.5rem;">
																Imp. Dscto
															</th>
															<th style="width:7.5rem;">
																Imp. total
															</th>
															<th style="width:6.7rem;">
																FOMA
															</th>
															<th style="width:9.5rem;">
																Imp. carencias
															</th>
															<th style="width:6.5rem;">
																Imp. CUI
															</th>
															<th style="width:8rem;">
																Imp. endoso
															</th>
															<th style="width:7rem;">
																Imp. saldo
															</th>
															<th style="width:5rem;">
																Acción
															</th>
														</tr>
													</thead>
													<tbody id="bodyServicio">	
													</tbody>
													<tfoot >
														<tr>
															<td width="15%" >
																&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															</td>
															<td width="8%">
																&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															</td>
															<td style="text-align: center;" class="Total" width="8%">
																<b>Totales:</b>
															</td>
															<td style="text-align: right;" class="Total A" width="7%">
																0.00
															</td>
															<td style="text-align: right;" class="Total B" width="7%">
																0.00
															</td>
															<td style="text-align: right;" class="Total C" width="8%">
																0.00
															</td>
															<td style="text-align: right;" class="Total D" width="8%">
																0.00
															</td>
															<td style="text-align: right;" class="Total E" width="7%">
																0.00
															</td>
															<td style="text-align: right;" class="Total F" width="8%">
																0.00
															</td>
															<td style="text-align: right;" class="Total G" width="8%">
																0.00
															</td>
															<td style="text-align: right;" class="Total H" width="8%">
																0.00
															</td>
															<td style="text-align: right;" width="2%">
																&nbsp;
															</td>
														</tr>
													</tfoot>
												</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group m-form__group row">
								<div class="col-lg-10">
									<label>
										<h5>Descuentos</h5>
									</label>
									<div class="m-input-icon m-input-icon--right">
										<div class="m-section  m-demo m-demo__preview">
											<div class="m-section__content" data-max-height="320">
												<div class="table-responsive">
												<table class="table table-fixed">
													<thead style="text-align: center;">
															<tr>
																<th width="10%">
																	Código
																</th>
																<th width="20%">
																	Descripción del descuento
																</th>
																<th width="10%">
																	M
																</th>
																<th width="15%">
																	Valor del dscto
																</th>
																<th width="10%">
																	Dscto libre
																</th>
																<th width="10%">
																	Dscto %
																</th>
																<th width="15%">
																	Descuento final 
																</th>
																<th width="10%">
																	Acción
																</th>
															</tr>
														</thead>
														<tbody id="bodyDscto">
															
														</tbody>
														<tfoot>
														<tr>
															<td width="10">
																&nbsp;
															</td>
															<td style="text-align: center;" width="300">
																&nbsp;
															</td>
															<td style="text-align: center;" width="30">
																&nbsp;
															</td>
															<td style="text-align: right;" width="250">
																&nbsp;
															</td>
															<td style="text-align: right;" width="150">
																<b>Total S/:</b>
															</td>
															<td style="text-align: right;" width="30">
																&nbsp;
															</td>
															<td style="text-align: right;" class="TotalD A" width="150">
																0,00
															</td>
														</tr>
														<tr>
															<td width="10">
																&nbsp;
															</td>
															<td style="text-align: center;" width="300">
																&nbsp;
															</td>
															<td style="text-align: center;" width="30">
																&nbsp;
															</td>
															<td style="text-align: right;" width="250">
																&nbsp;
															</td>
															<td style="text-align: right;" width="150">
																<b>Total USD:</b>
															</td>
															<td style="text-align: right;" width="30">
																&nbsp;
															</td>
															<td style="text-align: right;" width="150">
																0,00
															</td>
														</tr>
													</tfoot>
												</table>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-2">
									<br><br><br>
									<div class="row">
										<div class="col-lg-12">
											<div class="m-demo">
												<div class="m-demo__preview" style="padding:10px;">
													<div class="row">
														<div class="col-lg-6" style="text-align: right;">
															<span data-toggle="modal" >
																<button class="btn btn-success btn-lg m-btn" type="button" data-toggle="m-tooltip" data-container="body" data-placement="top" title="" data-original-title="Añadir descuento" onclick="callTablaDscto();">
																	<i class="fa fa-plus"></i>
																</button>
															</span>
														</div>
														<div class="col-lg-6">
															<span >
																<button class="btn btn-danger btn-lg m-btn" type="button" data-toggle="m-tooltip" data-container="body" data-placement="top" title="" data-original-title="Eliminar descuento" id="m_sweetalert_demo_9">
																	<i class="fa fa-minus"></i>
																</button>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="row" >
										<div class="m-demo">
											<div class="m-demo__preview" style="padding:10px;">
												<div>
													<p style="text-align: center;"><button disabled="disabled" class="btn btn-metal m-btn m-btn--icon btn-lg m-btn--icon-only  m-btn--pill"><i class="fa fa-question"></i></button>
													<br><br>

													Ingrese los descuentos que van a reducir el precio total por los servicios adquiridos por el usuario.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group m-form__group row">
								<div class="col-lg-9">
									<label>
										<h5>Coberturas (Endosos)</h5>
									</label>
									<div class="m-input-icon m-input-icon--right">
										<div class="m-section  m-demo m-demo__preview">
											<div class="m-section__content table-responsive-m" data-scrollbar-shown="true" data-scrollable="true" data-max-height="400"">
												<div class="table-responsive">
												<table class="table table-fixed">
													<thead style="text-align: center;">
														<tr>
															<th width="30%">
																Entidad
															</th>
															<th width="30%">
																Fecha de vencimiento
															</th>
															<th width="10%">
																M
															</th>
															<th width="20%">
																Importe
															</th>
															<th width="10%">
																Acción
															</th>
														</tr>
													</thead>
													<tbody id="bodyCobertura">
														
													</tbody>
													<tfoot>
														<tr>
															<td style="text-align: right;" width="400">
																&nbsp;
															</td>
															<td style="text-align: right;" width="220">
																<b>Total S/:</b>
															</td>
															<td style="text-align: right;" width="30">
																&nbsp;
															</td>
															<td style="text-align: right;" class="totalEndoso" width="220">
																0,00
															</td>
														</tr>
														<tr>	
															<td style="text-align: right;" width="400">
																&nbsp;
															</td>
															<td style="text-align: right;" width="220">
																<b>Total USD:</b>
															</td>
															<td style="text-align: right;" width="30">
																&nbsp;
															</td>
															<td style="text-align: right;" width="220">
																0,00
															</td>
														</tr>
													</tfoot>
												</table>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3">
									<br><br><br>
									<div class="row">
										<div class="col-lg-7 offset-lg-2">
											<div class="m-demo">
												<div class="m-demo__preview" style="padding:10px;">
													<div class="row">
														<div class="col-lg-6" style="text-align: right;">
															<span data-toggle="modal" >
																<button class="btn btn-success btn-lg m-btn" type="button" data-toggle="m-tooltip" data-container="body" data-placement="top" title="" data-original-title="Añadir descuento" onclick="callTablaEndoso();">
																	<i class="fa fa-plus"></i>
																</button>
															</span>
														</div>
														<div class="col-lg-6">
															<span >
																<button class="btn btn-danger btn-lg m-btn" type="button" data-toggle="m-tooltip" data-container="body" data-placement="top" title="" data-original-title="Eliminar descuento" id="m_sweetalert_demo_10">
																	<i class="fa fa-minus"></i>
																</button>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="row" >
										<div class="col-lg-4">
											<label class="">
											Importe total en S/.:
											</label>
										</div>
										<div class="col-lg-6"> 
											<div class="input-group">
												<input type="text" disabled class="form-control m-input" id="endoso1" name="endoso1" placeholder="0,00" style="text-align: right;">
											</div>
										</div>
									</div>
								</div>	
							</div>
								
						</div>
						<!--end: Form Wizard Step 2--> 
						<div class="m-wizard__form-step" id="m_wizard_form_step_5">
							<div class="row">
								<div class="col-lg-6">
									<div class="row">
										<div class="col-lg-2">
											<label>Saldo a financiar: </label>
										</div>
										<div class="col-lg-4">
											<input type="text" disabled id="saldoFinanciar" name="saldoFinanciar" style="text-align: right;" class="form-control m-input" placeholder="0,00">
										</div>
										<div class="col-lg-2">
											<label> N° de cuotas:</label>
										</div>
										<div class="col-lg-4" style="padding-left: 0;">
											<select class="form-control m-select2 m-select2-general" name="numCuotas" id="numCuotas" style="width: 100%">
												<option>
													Seleccione... 
												</option>
												<?php
												  $tabla="vtama_cuota";
												  $item1="num_cuotas";
												  $item2="dsc_cuota";
				 						 $prueba=controladorEmpresa::ctrSelects($tabla,$item1,$item2);
												  ?> 
											</select>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-lg-2">
											<label>1er vencimiento:</label>
										</div>
										<div class="col-lg-4">
											<div class="input-group date">
												<input type="text" class="form-control m-input"  id="m_datepicker_1" data-date-format="mm/dd/yyyy" value="<?php echo date('m/d/Y', strtotime(date('m/d/Y').'+ 1 month')); ?>"/>
												<div class="input-group-append">
													<span class="input-group-text">
														<i class="la la-calendar-check-o"></i>
													</span>
												</div>
											</div>
										</div>
										<div class="col-lg-2">
											<label>Interes:</label>
										</div>
										<div class="col-lg-4" style="padding-left: 0;">
											<select class="form-control m-select2 m-select2-general" id="interes" name="interes" style="width: 100%">
												<option>
													Seleccione...
												</option>
												<?php
													 $tabla="vtama_interes";
												  $item1="num_valor";
												  $item2="dsc_interes";
				 						 $prueba=controladorEmpresa::ctrSelects($tabla,$item1,$item2);
												  ?>
											</select>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="row">
										<div class="col-lg-6">
											<table>
												<tr>
													<td>
														<label class="m-checkbox">
															Cuotas definidas&nbsp;&nbsp;
														</label>
													</td>
													<td>
														<span class="m-switch m-switch--sm m-switch--outline m-switch--icon m-switch--danger">
															<label>
																<input type="checkbox" id="cuoDefi" onclick="desabilitar()"  name="">
																<span></span>
															</label>
														</span>
													</td>
												</tr>
											</table>
										</div>
										<div class="col-lg-2 offset-lg-4">
											<button type="button" onclick="CuoDefinidas();" class="btn btn-danger m-btn m-btn m-btn--icon m-btn--pill" disabled id="btnCuoDef">
												<span>
													<span>&nbsp;</span>
													<i class="fa fa-file-text-o"></i>
													<span>&nbsp;</span>
												</span>
											</button>
										</div>	
									</div>	
									<br>
									<div class="row">
										<div class="col-lg-4">
											<label>Cuota inicial: </label>
											<input type="text" id="cuoIni" class="form-control m-input" disabled placeholder="0">
										</div>
										<div class="col-lg-4">
											<label>Cuota final: </label>
											<input type="text" id="cuoFin" class="form-control m-input" disabled placeholder="0">			
										</div>
										<div class="col-lg-4">
											<label>Valor de cuota: </label>
											<input type="text" id="valCuo" class="form-control m-input" disabled placeholder="0,00" style="text-align: right;">			
										</div>
									</div>
									<br>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-lg-8">
									<div class="m-section__content">
										<div class="table-responsive">
										<table class="table table-fixed">
											<thead>
												<tr>
													<th style="background-color:#c4c5d6;width:7.2rem"># de Cuota</th>
													<th style="background-color:#c4c5d6;width:9rem">Tipo de cuota</th>
													<th style="background-color:#c4c5d6;width:6rem">Estado</th>
													<th style="background-color:#c4c5d6;width:9.3rem">Fecha de Venc.</th>
													<th style="background-color:#c4c5d6;width:6.5rem">Subtotal</th>
													<th style="background-color:#c4c5d6;width:6.3rem">Interés</th>
													<th style="background-color:#c4c5d6;width:6.3rem">I.G.V.</th>
													<th style="background-color:#c4c5d6;width:6.5rem">Total</th>
													<th style="background-color:#c4c5d6;width:5.2rem">Saldo</th>
												</tr>
											</thead>
											<tbody id="bodyCronograma">
												
											</tbody>
											<tfoot id="footCronograma">
												<tr>
													<td style="width:7.2rem"></td>
													<td style="width:9rem"></td>
													<td style="width:5rem"></td>
													<td style="width:9.5rem;text-align:center;" class="Suma">Total</td>
													<td style="width:6.5rem;text-align:right;" class="Suma A">0,00</td>
													<td style="width:6rem;text-align:right;" class="Suma B">0,00</td>
													<td style="width:6rem;text-align:right;" class="Suma C">0,00</td>
													<td style="width:6.3rem;text-align:right;" class="Suma D">0,00</td>
													<td style="width:5.2rem;text-align:right;" class="Suma E">0,00</td>
												</tr>
											</tfoot>
										</table>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="row">
										<div class="col-lg-6">
											<div class="input-group">
												<button type="button" onclick="cronograma();" class="btn m-btn--pill btn-danger" id="botonCrono">
													&nbsp;&nbsp;&nbsp;&nbsp;Generar cronograma&nbsp;&nbsp;&nbsp;&nbsp;
												</button>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="input-group">
												<button type="button" class="btn m-btn--pill btn-danger" id="botonCrono">
													Generar cronograma CUI
												</button>
											</div>
										</div>
									</div>
									<br>
									<label class="">
										<h5>FOMA</h5>
									</label>
									<div class="row">
										<div class="col-lg-12">
											<div class="row">
												<div class="col-lg-6">
													<label class="">
														Saldo de FOMA:
													</label>
												</div>
												<div class="col-lg-6">
													<input type="text" id="imp_saldo_foma" name="imp_saldo_foma" class="form-control m-input" disabled placeholder="0,00" style="text-align: right;">
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-lg-12">
											<div class="row">
												<div class="col-lg-6">
													<label class="">
														Numero de cuotas:
													</label>
												</div>
												<div class="col-lg-6">
													<select class="form-control m-select2 m-select2-general" name="cuota_FOMA" id="cuota_FOMA" style="width: 100%">
														<option>
														Seleccione... 
														</option>
														<?php
														  $tabla="vtama_cuota";
														  $item1="num_cuotas";
														  $item2="dsc_cuota";
						 						 $prueba=controladorEmpresa::ctrSelects($tabla,$item1,$item2);
														  ?> 
													</select>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-lg-12">
											<div class="row">
												<div class="col-lg-6">
													<label class="">
														Fecha 1ra cuota: 
													</label>
												</div>
												<div class="col-lg-6">
													<div class="input-group date">
														<input type="text" class="form-control m-input" id="m_datepicker_2_validate" data-date-format="mm/dd/yyyy" value="<?php echo date('m/d/Y',strtotime(date('m/d/Y').'+ 1 month')); ?>" />
														<div class="input-group-append">
															<span class="input-group-text">
																<i class="la la-calendar-check-o"></i>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-lg-6 offset-lg-3">
											<div class="input-group">
												<button type="button" class="btn m-btn--pill btn-danger" id="cb_generar_foma" onclick="generaFOMA()">
													Generar cuotas de FOMA
												</button>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
						<!--end: Form Wizard Step 5-->

						<div class="m-wizard__form-step" id="m_wizard_form_step_6">
							<div class="row">
								<div class="col-lg-6 ">
									<label class="">
										<h5>Beneficiarios</h5>
									</label>
									<div class="m-demo m-demo__preview">
										<div class="m-form__group rowm-scrollable" data-scrollbar-shown="true" data-scrollable="true" data-max-height="450">
											<div class="table-responsive">
											<table class="table m-table m-table--head-bg-metal table-hover" >
												<thead >
													<tr>
														<th>
															Documento
														</th>
														<th>
															Nombres
														</th>
														<th>
															Apellidos
														</th>
													</tr>
												</thead>
												<tbody id="bodyBeneficiario">
													
												</tbody>
											</table>
											</div>
										</div>
									</div>
									<div class="m-form__group row">
										<div class="col-lg-2 offset-lg-2">
											<button data-toggle="m-tooltip" data-container="body" data-placement="top" id="botonAgregarB" title="" data-original-title="Agregar beneficiario" onclick="cargaFormBenef();" class="btn btn-success btn-lg m-btn m-btn m-btn--icon">
												<span>
													<span>&nbsp;</span>
													<i class="la la-user-plus"></i>
													<span>&nbsp;</span>
												</span>
											</button>
											<button data-toggle="m-tooltip" hidden="hidden" data-container="body" data-placement="top" id="botonModificarB" title="" data-original-title="Guardar cambios" onclick="" class="btn btn-success btn-lg m-btn m-btn m-btn--icon">
												<span>
													<span>&nbsp;</span>
													<i class="la la-check"></i>
													<span>&nbsp;</span>
												</span>
											</button>
											<button data-toggle="m-tooltip" hidden="hidden" data-container="body" data-placement="top" id="botonGuardarB" title="" data-original-title="Guardar beneficiario" onclick="guardaBenef();" class="btn btn-success btn-lg m-btn m-btn m-btn--icon">
												<span>
													<span>&nbsp;</span>
													<i class="la la-check"></i>
													<span>&nbsp;</span>
												</span>
											</button>	
										</div>
										<div class="col-lg-2 offset-lg-1">
											<button data-toggle="m-tooltip" data-container="body" data-placement="top" title="" data-original-title="Editar beneficiario" id="botonEditaB" class="btn btn-metal btn-lg m-btn m-btn m-btn--icon">
												<span>
													<span>&nbsp;</span>
													<i class="flaticon-edit-1"></i>
													<span>&nbsp;</span>
												</span>
											</button>	
										</div>
										<div class="col-lg-2 offset-lg-1">
											<button data-toggle="m-tooltip" data-container="body" data-placement="top" title="" id="botonEliminarB" data-original-title="Eliminar beneficiario" class="btn btn-danger btn-lg m-btn m-btn m-btn--icon">
												<span>
													<span>&nbsp;</span>
													<i class="la la-user-times"></i>
													<span>&nbsp;</span>
												</span>
											</button>
											<button data-toggle="m-tooltip" data-container="body" data-placement="top" title="" data-original-title="Descartar cambios" id="botonDescartarB" onclick="limpiaydsi();" hidden="hidden" class="btn btn-danger btn-lg m-btn m-btn m-btn--icon">
												<span>
													<span>&nbsp;</span>
													<i class="la la-remove"></i>
													<span>&nbsp;</span>
												</span>
											</button>
											<button data-toggle="m-tooltip" data-container="body" data-placement="top" title="" data-original-title="Descartar cambios" id="botonCancelarEdicionB" hidden="hidden" class="btn btn-danger btn-lg m-btn m-btn m-btn--icon">
												<span>
													<span>&nbsp;</span>
													<i class="la la-remove"></i>
													<span>&nbsp;</span>
												</span>
											</button>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<label class="">
										<h5>Datos del beneficiario</h5>
									</label>
									<div class="row">
										<div class="col-lg-12">
											<div class="row">
												<div class="col-lg-3">
													<label class="">
														Tipo de documento:
													</label>
												</div>
												<div class="col-lg-3">
													<select class="form-control m-input custom-select custom-select-danger" disabled name="tipoDocBenef" id="tipoDocBenef">
														<option value="">
														Seleccione
														</option>
														<?php
															$prueba = controladorEmpresa::
															ctrtipoDoc();
														  ?> 		
													</select>
												</div>
												<div class="col-lg-3">
													<label class="">
														N° de documento:
													</label>
												</div>
												<div class="col-lg-3">
													<input type="text" id="numDocBenef" disabled class="form-control m-input" >
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-lg-3">
											<label class="">
												Apellido paterno:
											</label>
										</div>
										<div class="col-lg-9">
											<input type="text" disabled id="apellPaternoBenef" class="form-control m-input">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-lg-3">
											<label class="">
												Apellido materno:
											</label>
										</div>
										<div class="col-lg-9">
											<input type="text" disabled id="apellMaternoBenef" class="form-control m-input">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-lg-3">
											<label class="">
												Nombres:
											</label>
										</div>
										<div class="col-lg-9">
											<input type="text" disabled id="nombreBenef" class="form-control m-input">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-lg-2">
											<label>Fecha de nacimiento:</label>
										</div>
										<div class="col-lg-4">
											<div class="input-group date">
												<input type="text" disabled class="form-control m-input" readonly  placeholder="Seleccionar fecha" id="m_datepicker_1_modal"/>
												<div class="input-group-append">
													<span class="input-group-text">
														<i class="la la-calendar-check-o"></i>
													</span>
												</div>
											</div>
										</div>
										<div class="col-lg-2">
											<label>Fecha de deceso:</label>
										</div>
										<div class="col-lg-4">
											<div class="input-group date">
												<input type="text" disabled class="form-control m-input" readonly  placeholder="Seleccionar fecha" id="m_datepicker_2"/>
												<div class="input-group-append">
													<span class="input-group-text">
														<i class="la la-calendar-check-o"></i>
													</span>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-lg-2">
											<label class="">
												Religión:
											</label>
										</div>
										<div class="col-lg-4">
											<select disabled class="form-control m-input custom-select custom-select-danger" name="religionBenef" id="religionBenef">
												<option value="">
													Seleccione
												</option>
												<?php
												  $tabla="vtama_religion";
												  $item1="cod_religion";
												  $item2="dsc_religion";
				 						 $prueba=controladorEmpresa::ctrSelects($tabla,$item1,$item2);
												?> 
											</select>
											</select>
										</div>
										<div class="col-lg-2">
											<label class="">
												Estado civil:
											</label>
										</div>
										<div class="col-lg-4">
											<select disabled class="form-control m-input custom-select custom-select-danger" name="edoCivilBenef" id="edoCivilBenef">
												<option value="">
													Seleccione
												</option>
												<?php
				  						$prueba=controladorEmpresa::ctrestadocivil();
												?> 
											</select>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-lg-2">
											<label class="">
												Sexo:
											</label>
										</div>
										<div class="col-lg-4">
											<select disabled class="form-control m-input custom-select custom-select-danger" name="sexoBenef" id="sexoBenef">
												<option value="">
													Seleccione
												</option>
												<option value="M">
													Masculino
												</option>
												<option value="F">
													Femenino
												</option>
											</select>
										</div>
										<div class="col-lg-2">
											<label class="">
												Parentescos:
											</label>
										</div>
										<div class="col-lg-4">
											<select disabled class="form-control m-input custom-select custom-select-danger" name="parentescoBenef" id="parentescoBenef">
												<option value="">
													Seleccione
												</option>
												<?php
												  $tabla="vtama_parentesco";
												  $item1="cod_parentesco";
												  $item2="dsc_parentesco";
				 						 $prueba=controladorEmpresa::ctrSelects($tabla,$item1,$item2);
												?> 
											</select>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-lg-2">
											<label class="">
												Lugar deceso:
											</label>
										</div>
										<div class="col-lg-4">
											<select disabled class="form-control m-input custom-select custom-select-danger" name="lugarDecesoBenef" id="lugarDecesoBenef">
												<option value="">
													Seleccione
												</option>
												<?php
												  $tabla="vtama_lugar_deceso";
												  $item1="cod_lugar_deceso";
												  $item2="dsc_lugar_deceso";
				 						 $prueba=controladorEmpresa::ctrSelects($tabla,$item1,$item2);
												?>
											</select>
										</div>
										<div class="col-lg-2">
											<label class="">
												Motivo deceso:
											</label>
										</div>
										<div class="col-lg-4">
											<select disabled class="form-control m-input custom-select custom-select-danger" name="motivoDecesoBenef" id="motivoDecesoBenef">
												<option value="">
													Seleccione
												</option>
												<?php
												  $tabla="vtama_motivo_deceso";
												  $item1="cod_motivo_deceso";
												  $item2="dsc_motivo_deceso";
				 						 $prueba=controladorEmpresa::ctrSelects($tabla,$item1,$item2);
												?>
											</select>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-lg-2">
											<label class="">
												Peso:
											</label>
										</div>
										<div class="col-lg-2">
											<input disabled type="text" id="pesoBenef" class="form-control m-input" placeholder="">
										</div>
										<div class="col-lg-2">
											<label class="">
												Talla:
											</label>
										</div>
										<div class="col-lg-2">
											<input disabled type="text" id="tallaBenef" class="form-control m-input" placeholder="">
										</div>
										<div class="col-lg-4">
											<table>
												<tr>
													<td>
														<label class="m-checkbox">
															¿Pasó autopsia?
														</label>
													</td>
													<td>
														<span class="m-switch m-switch--sm m-switch--outline m-switch--icon m-switch--danger">
															<label>
																<input disabled type="checkbox" id="autopsiaBenef" name="autopsiaBenef">
																<span></span>
															</label>
														</span>
													</td>
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--end: Form Wizard Step 6-->
						<div class="m-wizard__form-step" id="m_wizard_form_step_7">
							<div class="row">
								<table>
									<tr>
										<td>
											<label class="m-checkbox">
												<h5>Generar comprobante&nbsp;&nbsp;</h5>
											</label>
										</td>
										<td>
											<span class="m-switch m-switch--sm m-switch--outline m-switch--icon m-switch--danger">
												<label>
													<input type="checkbox" id="genCom" onclick="apagar()"  name="">
													<span></span>
												</label>
											</span>
										</td>
									</tr>
								</table>
							</div>
							<br>
							<div class="row">
								<div class="col-lg-1">
									<label class="">
										Tipo:
									</label>
								</div>
								<div class="col-lg-3">
									<select id="tipoCom" disabled class="form-control m-input custom-select custom-select-danger" name="option">
										<option value="">
											Seleccione
										</option>
										<option>
											1
										</option>
										<option>
											2
										</option>
										<option>
											3
										</option>
										<option>
											4
										</option>
										<option>
											5
										</option>
									</select>
								</div>
								<div class="col-lg-3">
									<div class="input-group">
										<label class="">
											N°: &nbsp;
										</label>
										<div class="input-group-prepend">
											<select class="form-control m-input" id="numCom" disabled name="option">
												<option value="">
													1
												</option>
												<option>
													2
												</option>
											</select>
										</div>
										<input type="text" class="form-control m-input" id="nnumCom" disabled placeholder="">
									</div>
								</div>
								<div class="col-lg-4">
									<div class="row">
										<div class="col-lg-4">
											<label>Fecha de Emisión:</label>
										</div>
										<div class="col-lg-8">
											<div class="input-group date">
												<input type="text" class="form-control m-input" disabled readonly  placeholder="Seleccionar fecha" id="m_datepicker_3"/>
												<div class="input-group-append">
													<span class="input-group-text">
														<i class="la la-calendar-check-o"></i>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>	
							<br>
							<div class="row">
								<div class="col-lg-1">
									<label class="">
										Deudor:
									</label>
								</div>
								<div class="col-lg-5">
									<div class="input-group">
										<input type="text" disabled id="deuCom" class="form-control m-input" placeholder="">
										<div class="input-group-append">
											<button type="button" disabled id="btn1Com" class="btn btn-danger">
												<i class="flaticon-search"></i>
											</button>
											<button type="button" disabled id="btn2Com" class="btn btn-success">
												<i class="flaticon-plus"></i>
											</button>
										</div>
									</div>
								</div>
								<div class="col-lg-5">
									<input type="text" disabled id="nomCom" class="form-control m-input" placeholder="">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-lg-1">
									<label class="">
										Tipo de documento:
									</label>
								</div>
								<div class="col-lg-2">
									<select class="form-control m-input custom-select custom-select-danger" disabled name="option" id="docCom">
										<option value="">
											Seleccione
										</option>
										<?php
											$prueba = controladorEmpresa::
											ctrtipoDoc();
										  ?> 		
									</select>
								</div>
								<div class="col-lg-1">
									<label class="">
										Número
									</label>
								</div>
								<div class="col-lg-3">
									<input type="text" id="ndocCom" class="form-control m-input" placeholder="" disabled>
								</div>
								<div class="col-lg-1">
									<label class="">
										Teléfono
									</label>
								</div>
								<div class="col-lg-3">
									<input type="text" id="tlfCom" class="form-control m-input" placeholder="" disabled>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-lg-1">
									<label class="">
										Dirección:
									</label>
								</div>
								<div class="col-lg-10">
									<input type="text" id="dirCom" class="form-control m-input" placeholder="" disabled>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-lg-1">
									<label class="">
										Glosa:
									</label>
								</div>
								<div class="col-lg-10">
									<input type="text" id="gloCom" class="form-control m-input" placeholder="" disabled>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-lg-1 offset-md-4">
									<label class="">
										Total: 
									</label>
								</div>
								<div class="col-lg-3">
									<div class="input-group">
										<select class="form-control m-input custom-select custom-select-danger" name="option" disabled id="monCom">
											<option value="">
												S/.
											</option>
											<option>
												$
											</option>
										</select>
										<input type="text" disabled id="totCom" class="form-control m-input" placeholder="0.00">
									</div>
								</div>
							</div>
						</div>
						<!--end: Form Wizard Step 7-->
					</div>
					<!--end: Form Body -->
<!--begin: Form Actions -->
					<div class="m-portlet__foot m-portlet__foot--fit m--margin-top-40">
						<div class="m-form__actions">
							<div class="row">
								<div class="col-lg-2"></div>
								<div class="col-lg-4 m--align-left">
									<a href="#" class="btn btn-metal m-btn m-btn--custom m-btn--icon" data-wizard-action="prev">
										<span>
											<i class="la la-arrow-left"></i>
											&nbsp;&nbsp;
											<span>
												Atrás
											</span>
										</span>
									</a>
								</div>
								<div class="col-lg-4 m--align-right">
									<a href="#" class="btn btn-danger m-btn m-btn--custom m-btn--icon" data-wizard-action="submit">
										<span>
											<i class="la la-check"></i>
											&nbsp;&nbsp;
											<span>
												Finalizar
											</span>
										</span>
									</a>
									<a href="#" class="btn btn-danger m-btn m-btn--custom m-btn--icon" data-wizard-action="next">
										<span>
											<span>
												Continuar
											</span>
											&nbsp;&nbsp;
											<i class="la la-arrow-right"></i>
										</span>
									</a>
								</div>
								<div class="col-lg-2"></div>
							</div>
						</div>
					</div>
					<!--end: Form Actions -->
			<div class="modal fade" id="m_modal_3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">
								Selección de prospectos de ventas
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">
									&times;
								</span>
							</button>
						</div>
						<div class="modal-body" id="tablaProspecto" style="height: 800px;">
										
						</div>
						<div class="modal-footer">
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="m_modal_4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">
								Selección de trabajadores
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">
									&times;
								</span>
							</button>
						</div>
						<div class="modal-body" id="tablaVendedor" style="height: 1100px;">

						</div>
						<div class="modal-footer">
						</div>
					</div>
				</div>
			</div>

			<!-- ----------------Resumen------------------------ -->
			<div class="sidebar-wrapper stickResumen" id="container-button"> 
				<a href="#container" class="btn btn-danger m-btn m-btn--icon btn-lg m-btn--icon-only toggle-collapse-resumen" onclick="toggleResumen(this)" id="toggle-button">
					<i class="la la-cart-arrow-down"></i>
				</a>
				<ul class="m-nav-sticky side-nav" id="resumen2" style="margin-top: 30px;">
					<li class="m-nav-sticky__item nav-item">
						<div class="row">
							<div class="col-lg-4 offset-lg-4"><b>Resumen</b></div>
						</div>
					</li>
					<li class="m-nav-sticky__item nav-item">
						<div class="row">
							<div class="col-lg-4">
								<label class="res-label">
									Cobertura:
								</label>
							</div>
							<div class="col-lg-7">
								<input type="text" size="3" maxlength="3" disabled class="form-control m-input" id="imp_cobertura" name="imp_cobertura" placeholder="0,00" style="text-align: right;">
							</div>
						</div>
					</li>
					<li class="m-nav-sticky__item nav-item">
						<div class="row">
							<div class="col-lg-4">
								<label class="res-label">
									Dscto:
								</label>
							</div>
							<div class="col-lg-7">
								<input type="text" size="3" maxlength="3" disabled class="form-control m-input" id="imp_dscto" name="imp_dscto" placeholder="0,00" style="text-align: right;">
							</div>
						</div>
					</li>
					<li class="m-nav-sticky__item nav-item">
						<div class="row">
							<div class="col-lg-4">
								<label class="res-label">
									CUI total:
								</label>
							</div>
							<div class="col-lg-7">
								<input type="text" disabled class="form-control m-input" id="cuitotal" name="cuitotal" placeholder="0,00" style="text-align: right;">
							</div>
						</div>
					</li>
					<li class="m-nav-sticky__item nav-item">
						<div class="row">
							<div class="col-lg-4">
								<label class="res-label">
									Total:
								</label>
							</div>
							<div class="col-lg-7">
								<input type="text" size="3" maxlength="3" disabled class="form-control m-input" id="total1" name="total1" placeholder="0,00" style="text-align: right;">
							</div>
						</div>
					</li>
					<li class="m-nav-sticky__item nav-item" >
						<div class="row">
						<div class="col-lg-4">
							<label class="res-label">
								Saldo a pagar:
							</label>
						</div>
						<div class="col-lg-7">
							<input type="text" size="3" maxlength="3" disabled class="form-control m-input" id="saldopagar" name="saldopagar" placeholder="0,00" style="text-align: right;">
							<input type="hidden" id="imp_subtotal" name="imp_subtotal">
							<input type="hidden" id="imp_igv" name="imp_igv">
						</div>
					</div>
					</li>
				</ul>
			</div>
			</div>	

			</form>
			</div>
			<!--end: Form Wizard Form-->
		</div>
		<!--end: Form Wizard-->
	</div> 
	<!--End::Main Portlet-->
</div>
<?php
include "modals/modalRegCliente.php";
include "modals/modalTablaClientes.php";
include "modals/modalTablaDscto.php";
include "modals/modalTablaEndosos.php";
include "modals/modalTablaservicios.php";
?>