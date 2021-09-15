
	<!--Contact form -->
	<div class="modal ls" id="contact_modal">
		<div class="modal_login_form">
			<div class="menu-form ls ">

				<a href="#" data-dismiss="modal" aria-label="Close" class="remove"><i class="fas fa-times"></i></a>

				<h5 class="special-heading underline">
					<span>Nous contacter</span>
				</h5>

				<div class="divider-35"></div>

				<p class="color-darkgrey">Une question?, une récommandation?, un projet?</p>
				<div class="divider-35"></div>
				<form class="modal-contact-form" method="post" action="{{url('contact')}}">

					<div class="row c-mb-10 c-gutter-10">

						<div class="col-sm-6">
							<div class="form-group has-placeholder">
								<label for="modal-name">Entrer votre nom<span class="required"></span></label>
								<input type="text" aria-required="true" size="30" value="" name="name" id="modal-name" class="form-control" placeholder="Entrer votre nom">
							</div>
						</div>

						<div class="col-sm-6">
							<div class="form-group has-placeholder">
								<label for="modal-email">Entrer votre email<span class="required"></span></label>
								<input type="email" aria-required="true" size="30" value="" name="email" id="modal-email" class="form-control" placeholder="Entrer votre email">
							</div>
						</div>
					</div>
					<div class="row mb-45">

						<div class="col-sm-12 mb-0">

							<div class="form-group has-placeholder">
								<label for="modal-message">Entrer votre message</label>
								<textarea aria-required="true" rows="5" cols="45" name="message" id="modal-message" class="form-control" placeholder="Entrer votre message"></textarea>
							</div>
						</div>

					</div>
					<div class="row d-flex align-items-center">

						<div class="col-12">

							<div class="form-group ">
								<button type="submit" id="contact_form_submit_modal"  class="btn btn-maincolor2 btn-short ">Envoyer</button>
							</div>

							<div class="mb--5"></div>
						</div>
					</div>

				</form>

			</div>

		</div>
	</div>
