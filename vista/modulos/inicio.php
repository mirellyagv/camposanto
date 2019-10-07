<div class="m-content">
	<!--Begin::Main Portlet-->
	<div class="m-portlet m-portlet--full-height">
		<div class="m-portlet__head">
			<div class="m-portlet__head-caption">
				<div class="m-portlet__head-title">
					<span class="m-portlet__head-icon">
						<i class="flaticon-clock-2"></i>
					</span>
					<h3 class="m-portlet__head-text m--font-danger">
						Visor de prestación de servicios
					</h3>
				</div>
			</div>
			<div class="m-portlet__head-tools">
				<ul class="m-portlet__nav">
					<li class="m-portlet__nav-item">
						<div class="input-group date">
							<input type="text" class="form-control m-input"   id="m_datepicker_5" data-date-format="dd/mm/yyyy" value="<?php echo date('d-m-Y',strtotime(date('d-m-Y').'+ 1 month')); ?>"/>
							<div class="input-group-append">
								<span class="input-group-text">
									<i class="la la-calendar-check-o"></i>
								</span>
							</div>
						</div>
					</li>
					<li class="m-portlet__nav-item">
						<label>
							<b>Localidad: &nbsp;&nbsp;</b>
						</label>
						<select class="form-control m-select2 m-select2-general" id="localidad" name="localidad">
						<?php
							$tabla="vtama_localidad";
						  	$item1="cod_localidad";
						 	$item2="dsc_localidad";
							$prueba=controladorEmpresa::ctrSelects($tabla,$item1,$item2);
						  ?>
					</select>
					</li>
				</ul>
			</div>
		</div>
		<div class="m-portlet__body">
			<div class="row">
				<div class="col-lg-5">
					<div class="m-section  m-demo m-demo__preview">
						<div class="m-section__content rowm-scrollable" data-scrollbar-shown="true" data-scrollable="true" data-max-height="300">
							<table class="table m-table m-table--head-bg-danger">
								<thead style="text-align: center;">
									<tr>
										<th>
											Hora
										</th>
										<th width="10">
											Tipo de autorización
										</th>
										<th>
											Estado
										</th>
										<th>
											Beneficiario (Fallecido)
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											10:00 am
										</td>
										<td style="text-align: center;">
											MI
										</td>
										<td style="text-align: center;">
											REGISTRADO
										</td>
										<td style="text-align: center;">
											Lorem ipsum dolor sit amet
										</td>
									</tr>
									<tr>
										<td>
											10:00 am
										</td>
										<td style="text-align: center;">
											MI
										</td>
										<td style="text-align: center;">
											REGISTRADO
										</td>
										<td style="text-align: center;">
											Lorem ipsum dolor sit amet
										</td>
									</tr>
									<tr>
										<td>
											10:00 am
										</td>
										<td style="text-align: center;">
											MI
										</td>
										<td style="text-align: center;">
											REGISTRADO
										</td>
										<td style="text-align: center;">
											Lorem ipsum dolor sit amet
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="col-lg-7">
					<table>
						<thead style="text-align: center;">
							<tr>
								<th width="60">
									Hora
								</th>
								<th width="60">
									Tipo de autorización
								</th>
								<th width="60">
									estado
								</th>
								<th width="300">
									Beneficiario (Fallecido)
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td width="30">
									1
								</td>
								<td width="305">
									Lorem ipsum dolor sit amet
								</td>
								<td style="text-align: center;" width="40">
									1
								</td>
								<td style="text-align: right;" width="100">
									0,00
								</td>
							</tr>
							<tr>
								<td width="30">
									1
								</td>
								<td width="305">
									Lorem ipsum dolor sit amet
								</td>
								<td style="text-align: center;" width="40">
									3
								</td>
								<td style="text-align: right;" width="100">
									0,00
								</td>
							</tr>
							<tr>
								<td width="30">
									1
								</td>
								<td width="305">
									Lorem ipsum dolor sit amet
								</td>
								<td style="text-align: center;" width="40">
									2
								</td>
								<td style="text-align: right;" width="100">
									0,00
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
