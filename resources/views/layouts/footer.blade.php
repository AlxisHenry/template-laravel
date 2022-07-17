<footer>

    <div class="footer_high">

        <div class="footer_logo">

            <img src="https://alexishenry.eu/assets/icons/apple-touch-icon-180x180.png" alt="">

        </div>

        <div class="footer_society_name">
            CCI Campus
        </div>

    </div>

    <div class="footer_mid">

        <newsletter>
            {{ Form::open(['url' => '/', 'method' => 'post', 'class' => 'newsletter']) }}

            <div class="form-group">
                {{ Form::label('email', 'Join our newsletter') }}
                <div class="form-confirm">
                    {{ Form::email('email', null, ['placeholder' => 'Your email']) }}
                    {{ Form::button('<i class="fa-solid fa-location-arrow"></i>', ['class'=>'button button-red','type'=>'button','id'=>'id-button']) }}
                </div>
            </div>

            {{ Form::close() }}

            <div class="switch_color_theme">
                <span>Switch website theme</span>
                <label id="switch" class="switch">
                    <input type="checkbox" id="slider">
                    <span class="slider round"></span>
                </label>
            </div>

        </newsletter>

        <div class="footer_navigation">
            <div class="ml-4">
                <ul>
                    <li class="title mb-3">Navigation</li>
                    <li class="mb-2"><a href="">Project</a></li>
                    <li class="mb-2"><a href="">Github</a></li>
                    @if(Auth::check())
                        <li class="mb-2"><a href="">Profile</a></li>
                    @else
                        <li class="mb-2"><a href="">Sign-in</a></li>
                    @endif
                </ul>
            </div>
            <div class="ml-4">
                <ul>
                    <li class="title mb-3">Account</li>
                    <li class="mb-2"><a href="">Project</a></li>
                    <li class="mb-2"><a href="">Github</a></li>
                    <li class="mb-2"><a href="">Sign-in</a></li>
                </ul>
            </div>
            <div class="ml-4">
                <ul>
                    <li class="title mb-3">Policy</li>
                    <li class="mb-2"><a href="">Project</a></li>
                    <li class="mb-2"><a href="">Github</a></li>
                    <li class="mb-2"><a href="">Sign-in</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="footer_bottom">
        <span class="legal_notice">
            <a href="">Privacy Policy</a> &#8239; &bull; &#8239; <a href="">Terms and conditions</a>
        </span>
        <span class="social-networks">
            <a href="">Portfolio</a> &#8239; &bull; &#8239; <a href="">Linkedin</a> &#8239; &bull; &#8239; <a href="">Github</a>
        </span>
    </div>

</footer>
