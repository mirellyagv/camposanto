<div class="m-grid m-grid--hor m-grid--root m-page">

	<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-1" id="m_login" style="background: linear-gradient(rgb(212, 193, 100), rgb(63, 136, 39));">

		<div class="m-grid__item m-grid__item--fluid m-login__wrapper">

			<div class="m-login__container">

				<div class="m-login__logo">
					<a href="#">
						<img src="vista/assets/app/media/img//logos/logo-1.png">
					</a>
				</div>

				<div class="m-login__signin">

					<div class="m-login__head">

						<h3 class="m-login__title">
							Ingresar al sistema
						</h3>

					</div>

					<form class="m-login__form m-form">

						<!-- ENTRADA PARA EL USUARIO -->

						<div class="form-group m-form__group">

							<input class="form-control m-input" type="text" placeholder="Usuario" id="reynaldo" name="reynado" style="background-color: #fff; color: #000;" autofocus>

						</div>

						<!-- ENTRADA PARA LA CONTRASEÑA -->

						<div class="form-group m-form__group">

							<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Contraseña" name="password" style="background-color: #fff; color: #000;">

						</div>

						<!-- SELECCIONAR EMPRESA -->

						<div class="form-group m-form__group">

							<select class="form-control m-input m-input--air m-input--pill" id="exampleSelect1" style="background-color: #fff; color: #000; height: auto;">
								
								<option>Seleccione una empresa</option>
								<option>
									Empresa 1
								</option>
								<option>
									Empresa 2
								</option>
								<option>
									Empresa 3
								</option>
								

							</select>

						</div>

						<!-- ENTRADA PARA EL CAPTCHA -->

						<div class="form-group m-form__group">

							<div id="recaptcha_widget" class="m-recaptcha" style="border: none; padding: 1.5rem 1rem">

								<div class="m-recaptcha__img">

									<a id="recaptcha_image" href="javascript:;"></a>
									<div class="recaptcha_only_if_incorrect_sol display-none">
										Incorrect please try again
									</div>

								</div>

								<div class="input-group">
									<input type="text" class="form-control" id="recaptcha_response_field" name="recaptcha_response_field" style="background-color: #fff; color: #000; border-radius: inherit; padding: inherit; margin-top: inherit;">
									<div class="input-group-append">
										<a class="btn btn-secondary" href="javascript:Recaptcha.reload()">
											<i class="la la-refresh"></i>
										</a>
									</div>
								</div>
								<div class="m-form__help">
									<span class="recaptcha_only_if_image" style="color: #000;">
										Escribe las palabras del cuadro
									</span>
								</div>

							</div>

							<script type="text/javascript">
								var RecaptchaOptions = {
							    	theme : 'custom',
							    	custom_theme_widget: 'recaptcha_widget'
							    };
							</script>
							<script type="text/javascript" src="https://www.google.com/recaptcha/api/challenge?k=6LcrK9cSAAAAALEcjG9gTRPbeA0yAVsKd8sBpFpR"></script>

						</div>

						<div class="m-login__form-action">

							<button id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primary" style="background-color: #58964d; border-color: #7a963d;">
								Ingresar
							</button>

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
