<?php

$_SESSION['captcha'] = simple_php_captcha();

?>

<div class="m-grid m-grid--hor m-grid--root m-page">

	<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-1" id="m_login" style="background: linear-gradient(rgb(212, 193, 100), rgb(63, 136, 39));">

		<div class="m-grid__item m-grid__item--fluid m-login__wrapper">

			<div class="m-login__container" style="width: 400px;">

				<div class="m-login__logo" style="margin-bottom: 20px;">

						<img src="vista/img/Logo_KQ_web.png">
						
				</div>

				<div class="m-login__signin" style="background-color: #fff; padding: 20px;">

					<div class="m-login__head" style="padding: 0 20px 20px 20px;">

						<h3 class="m-login__title" style="color: #666;">
							Ingresar al sistema
						</h3>

					</div>

					<form class="m-form">

						<!-- ENTRADA PARA EL USUARIO -->

						<div class="form-group m-input-icon m-input-icon--right">

							<input class="form-control m-input" type="text" placeholder="Usuario" name="reynado" style="background-color: #fff; color: #000;" autofocus>

							<span class="m-input-icon__icon m-input-icon__icon--right">
								<span>
									<i class="fa fa-user"></i>
								</span>
							</span>

						</div>

						<!-- ENTRADA PARA LA CONTRASEÑA -->

						<div class="form-group m-input-icon m-input-icon--right">

							<input class="form-control m-input" type="text" placeholder="Contraseña" name="reynado" style="background-color: #fff; color: #000;" autofocus>

							<span class="m-input-icon__icon m-input-icon__icon--right">
								<span>
									<i class="fa fa-lock"></i>
								</span>
							</span>

						</div>						

						<!-- ENTRADA PARA EL CAPTCHA -->

						<div class="form-group m-form__group" style="padding-top: 0;">

							<?php


							echo '<img src="'.$_SESSION['captcha']['image_src'].'" alt="CAPTCHA code" style="display:block; margin: 0 auto;">';

							?>

						</div>

						<!-- ENTRADA PARA EL TEXTO DEL CAPTCHA -->

						<div class="form-group m-form__group"  style="padding-top: 0;">

							<input class="form-control m-input" type="text" placeholder="Digite el texto de la imagen" name="reynado" style="background-color: #fff; color: #000;" autofocus>

						</div>

						<!-- SELECCIONAR EMPRESA -->

						<div class="m--hide form-group m-form__group seleccioneEmpresa" style="padding-top: 0;">

							<select class="form-control m-input" id="exampleSelect1" placeholder="Seleccionar Empresa">
								<option disabled selected>Seleccionar Empresa</option>
								<option>Empresa 1</option>
								<option>Empresa 2</option>
								<option>Empresa 3</option>
							</select>

						</div>

						<!-- BOTON INGRESAR -->

						<div class="m-login__form-action">

							<div class="row">
								<div class="col m--align-center">
									<button type="reset" class="btn btn-success btnIngresar">
										Ingresar
									</button>
								</div>
							</div>

						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!--end::Page Snippets -->
	</body>
	<!-- end::Body -->
</html>
