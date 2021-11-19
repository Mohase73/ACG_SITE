<!--login form -->
<div class="modal ls" id="login_modal">
    <div class="modal_login_form">
        <div class="menu-form ls text-center">

            <a href="#" data-dismiss="modal" aria-label="Close" class="remove"><i class="fas fa-times"></i></a>

            <h4 class="special-heading underline">
                <span>Se connecter</span>
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
            <form id="form-sign-in" action="{{route('login')}}" method="POST">
                @csrf
                <div class="form-group has-placeholder">
                    <label for="login-email">Email</label>
                    <input type="text" name="email" class="form-control" id="login-email" placeholder="Email">
                </div>

                <div class="form-group has-placeholder">
                    <label for="login-password">Mot de passe</label>
                    <input type="password" name="password" class="form-control" id="login-password" placeholder="Votre mot de passe">
                </div>


                <div class="divider-30"></div>
                <p class="color-darkgrey"><a href="{{url('/' . $page='forgot-password')}}" class="link-underline">Mot de passe oublié?</a></p>
                <div class="divider-45"></div>

                <button form="form-sign-in" type="submit" class="btn btn-short btn-maincolor2">Connection</button>
            </form>
        </div>

        <div class="menu-img ds d-flex flex-column align-items-center justify-content-center s-overlay cover-image p-20 text-center">
            <img src="images/events/08.jpg" alt="bg">
            <h5 class="special-heading">
                <span>Vous êtes nouveau?</span>
            </h5>
            <div class="divider-40"></div>
            <p>  Cliquez sur le boutton d'en bas pour vous inscrire.</p>
            <div class="divider-30"></div>
            <button type="submit" class="btn btn-short btn-maincolor2 registrate_modal_window modal_window">S'inscrire</button>
        </div>

    </div>
</div>
