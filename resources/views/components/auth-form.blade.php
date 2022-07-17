{!! Form::open(['url' => '/', 'method' => 'post', 'class' => 'auth-form '.$auth_type.'-form']) !!}

    <div class="form-group">
        {{-- todo => Log-in via username/email --}}
        <div class="form-icon">
            <i class="fa-solid fa-id-badge"></i>
        </div>
        {!! Form::text('name', null, ['class' => 'auto-focus-field' . ($errors->has('name') ? ' form-error' : ''), 'required' => 'required', 'placeholder' => ($auth_type === "sign-in" ? 'Name / Email' : 'Name' )]) !!}

    </div>

    @if($auth_type === "sign-up")
        <div class="form-group">
            <div class="form-icon">
                <i class="fa-solid fa-at"></i>
            </div>
            {!! Form::email('email', null, ['class' => $errors->has('email') ? 'form-error' : '', 'required' => 'required', 'placeholder' => 'Email']) !!}
        </div>
    @endif

    <div class="form-group">
        <div class="form-icon">
            <i class="fa-solid fa-lock"></i>
        </div>
        {!! Form::password('password', ['class' => $errors->has('password') ? 'form-error' : '', 'required' => 'required', 'placeholder' => 'Password'])!!}
    </div>
    @if($auth_type === "sign-in")
        <div class="reset_password">
            <a href="">Forgot your password ?</a>
        </div>
    @endif

    @if($auth_type === "sign-in")
        <div class="remember_login stay_logged">
            <input type="checkbox" id="stay_logged"><label for="stay_logged" class="">Keep me signed in.</label>
        </div>
    @endif

    <div class="form-group">
        <input type="submit" value="{{ $auth_type === "sign-in" ? 'sign-in' : 'sign-up' }}"/>
    </div>
    {{-- todo => Lors d'une inscription (sign-up), créer le compte puis authentifié l'utilisateur et le redirigé vers la page d'accueil --}}
    {{-- todo => Lors d'une connexion (sign-in), redirigé l'utilisateur vers la page d'accueil en l'authentifiant --}}

    <div class="redirect_case {{ $auth_type === 'sign-in' ? 'never_register' : 'already_register' }}">
        @if($auth_type === 'sign-in')
            <p>Doesn't have account ? <a href="/sign-up" class="to-sign-up">Sign up</a>.</p>
        @elseif($auth_type === 'sign-up')
            <p>Already have an account ? <a class="to-sign-in" href="/sign-in">Sign in</a>.</p>
        @endif
    </div>

{!! Form::close() !!}
