@extends('layouts.auth.menu')

@section('content')

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="/forms/login/images/img-01.png" alt="IMG">
            </div>

            <form method="POST" action="{{ route('register') }}" class="login100-form validate-form">
                <span class="login100-form-title">
                    Inscription
                </span>
                @csrf

                <div class="wrap-input100 validate-input" data-validate = "Un nom est requis">
                    <input class="input100" type="text" name="name" placeholder="Nom et prénoms" required>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Un email valide est requis">
                    <input class="input100" type="email" name="email" placeholder="Email" required>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Un nom de ville est requis">
                    <input class="input100" type="text" name="city" placeholder="Ville" required>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-home" aria-hidden="true"></i>
                    </span>
                    @error('city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Répondez à cette question s'il vous plaît">
                    <select class="input100" name="interest">
                        <option value="1">Réserver un studio d'enregistrement virtuel</option>
                        <option value="2">Répéter ton répertoire avec les musiciens</option>
                    </select>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                    </span>
                    @error('interest')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Le mot de passe est requis">
                    <input class="input100" type="password" name="password" placeholder="Mot de passe" required>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Le mot de passe est requis">
                    <input class="input100" type="password" name="password_confirmation" placeholder="Confirmez le mot de passe" required>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Je m'inscris
                    </button>
                </div>

                <div class="text-center p-t-12">
                    <span class="txt1">
                        J'ai oublié mon
                    </span>
                    <a class="txt2" href="#">
                        nom d'utilisateur / mot de passe
                    </a>
                </div>

                <div class="text-center p-t-136">
                    <a class="txt2" href="/register">
                        Créer un compte
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
