<nav class="navbar">
    <div class="navbar_container">
        <div class="navbar_content">
            <div class="navbar_title">
                <a href="/">
                    <p class="main mb-2">CCI Campus</p>
                </a>&nbsp;
                <p class="secondary">web application</p>
            </div>
            <div class="contain_navbar_redirections">
                <div class="navbar_redirections">
                    <a href="/project" class="underlined select-none">Project</a>
                    <a target="_blank" href="https://github.com/AlxisHenry/alexishenry.eu" class="underlined select-none">Github</a>
                </div>
                <x-btn-primary content="{{Auth::check() ? 'Profile' : 'Sign-in' }}" url="/{{ Auth::check() ? 'profile' : 'sign-in' }}" background="true"/>
            </div>
            <div class="navbar_burger">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
        <div class="navbar_burger_content">
            <a href="/" tabindex="-1" class="grayscale select-none">Home</a>
            <a href="/project" tabindex="-1" class="grayscale select-none">Project</a>
            <a target="_blank" tabindex="-1" class="grayscale select-none" href="https://github.com/AlxisHenry/alexishenry.eu">Github</a>
            <x-btn-primary content="{{Auth::check() ? 'Profile' : 'Sign-in' }}" url="/{{ Auth::check() ? 'profile' : 'sign-in' }}" background="true"/>
        </div>
    </div>
</nav>
