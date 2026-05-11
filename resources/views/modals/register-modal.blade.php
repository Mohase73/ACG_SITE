

	<!--Registrate form -->
	<div class="modal ls" id="registrate_modal">
		<div class="modal_login_form">
			<div class="menu-img ds d-flex flex-column align-items-center justify-content-center s-overlay cover-image p-20 text-center">
				<img src="images/events/08.jpg" alt="bg" class="img-fluid">
				<h5 class="special-heading">
					<span>Vous avez un compte?</span>
				</h5>
				<div class="divider-40"></div>
				<p>Cliquez sur le boutton d'en bas pour vous connecter.</p>
				<div class="divider-30"></div>
				<button type="submit" class="btn btn-short btn-maincolor2 login_modal_window modal_window">Se connecter</button>
			</div>

			<div class="menu-form ls text-center">

				<a href="#" data-dismiss="modal" aria-label="Close" class="remove"><i class="fas fa-times"></i></a>

				<h4 class="special-heading underline">
					<span>Créer un compte</span>
				</h4>

				<div class="divider-35"></div>

				<div class="social-icons">
					<a href="https://www.facebook.com/acgburkinafaso" class="fab fa-facebook-f" title="facebook"></a>
                    {{-- <a href="#" class="fab fa-telegram-plane" title="telegram"></a> --}}
                    <a href="https://twitter.com/ConsultingAfric"  target="_blank" class="fab fa-twitter-square " title="twitter"></a>
                    <a href="https://www.linkedin.com/company/afric-consulting-group" class="fab fa-linkedin" title="linkedin"></a>
                    {{-- <a href="#" class="fab fa-instagram" title="instagram"></a>
                    <a href="#" class="fab fa-youtube" title="youtube"></a> --}}
				</div>
				<div class="divider-20"></div>
				<p class="color-darkgrey">Ou utilisez votre E-mail</p>
				<div class="divider-20"></div>
				<form id="form-sign-up" action="{{route('register')}}" method="POST">
                    @csrf
					<div class="form-group has-placeholder">
						<label for="reg-login-name">Nom</label>
						<input type="text" name="nom" class="form-control" id="reg-login-name" placeholder="Votre nom">
					</div>
					<div class="form-group has-placeholder">
						<label for="reg-login-name">Prénom</label>
						<input type="text" name="prenom" class="form-control" id="reg-login-name" placeholder="Votre prénom">
					</div>

					<div class="form-group has-placeholder">
						<label for="reg-login-email">Email</label>
						<input type="email" name="email" class="form-control" id="reg-login-email" placeholder="Votre Email">
					</div>

                    <div class="form-group has-placeholder">
						<label for="reg-login-email">Téléphone</label>
						<input type="phone" name="tel" class="form-control" id="reg-login-email" placeholder="Votre numéro de téléphone">
					</div>

					<div class="form-group has-placeholder">
						<label for="reg-login-password">Mot de passe</label>
						<input type="password" name="password" class="form-control" id="reg-login-password" placeholder="Votre mot de passe">
					</div>

					<div class="form-group has-placeholder">
						<label for="reg-login-password-confirm">Confirmer le mot de passe</label>
						<input type="password" name="password_confirmation" class="form-control" id="reg-login-password-confirm" placeholder="Confirmer votre mot de passe">
					</div>

				    <div class="divider-45"></div>

				    <button form="form-sign-up" type="submit" class="btn btn-short btn-maincolor2">Inscription</button>
				</form>
			</div>
		</div>
	</div>
