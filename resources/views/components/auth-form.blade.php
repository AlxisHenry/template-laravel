{!! Form::open(['url' => '/auth/'.$auth_type, 'method' => 'post', 'class' => 'auth-form '.$auth_type.'-form']) !!}

    @if($auth_type === 'sign-in')
        @if(session('auth_failed'))
            <div class="form-auth-failed">
                Please check information.
            </div>
        @endisset
    @endif

    <div class="form-group">
        {{-- todo => Log-in via username/email --}}
        <div class="form-icon">
            <i class="fa-solid fa-id-badge"></i>
        </div>
        {!! Form::text('username', null, ['class' => 'auto-focus-field' . ($errors->has('username') ? ' form-error' : ''), 'required' => 'required', 'placeholder' => ($auth_type === "sign-in" ? 'Username / Email' : 'Username' )]) !!}
    </div>
    @if($errors->has('username'))
        <div class="form-group-error">
            {{ $errors->first('username') }}
        </div>
    @endif

    @if($auth_type === "sign-up")
        <div class="form-group">
            <div class="form-icon">
                <i class="fa-solid fa-at"></i>
            </div>
            {!! Form::email('email', null, ['class' => $errors->has('email') ? 'form-error' : '', 'required' => 'required', 'placeholder' => 'Email']) !!}
        </div>
    @endif
    @if($errors->has('email'))
        <div class="form-group-error">
            {{ $errors->first('email') }}
        </div>
    @endif

    <div class="form-group">
        <div class="form-icon">
            <i class="fa-solid fa-lock"></i>
        </div>
        {!! Form::password('password', ['class' => $errors->has('password') ? 'form-error ' : 'form-password', 'required' => 'required', 'placeholder' => 'Password'])!!}
    </div>
    @if($errors->has('password'))
        <div class="form-group-error">
            {{ $errors->first('password') }}
        </div>
    @endif

    @if($auth_type === "sign-in")
        <div class="reset_password">
            <a href="">Forgot your password ?</a>
        </div>
    @else
        <div class="password_indicator" data-minval="{{ $password_min_val }}">
            <div class="progress">
                <div class="indicator" style="width: 0;"></div>
            </div>
            <p>Password strength</p>
        </div>
    @endif

    @if($auth_type === "sign-in")
        <div class="remember_login stay_logged">
            <input type="checkbox" id="stay_logged"><label for="stay_logged" class="user-select-none">Keep me signed in.</label>
        </div>
    @endif

    <div class="form-group">
        <input type="submit" value="{{ $auth_type === "sign-in" ? 'sign-in' : 'sign-up' }}"/>
    </div>

    <div class="redirect_case {{ $auth_type === 'sign-in' ? 'never_register' : 'already_register' }}">
        @if($auth_type === 'sign-in')
            <p>Doesn't have account ? <a href="/sign-up" class="to-sign-up">Sign up</a>.</p>
        @elseif($auth_type === 'sign-up')
            <p>Already have an account ? <a class="to-sign-in" href="/sign-in">Sign in</a>.</p>
        @endif
    </div>

{!! Form::close() !!}
