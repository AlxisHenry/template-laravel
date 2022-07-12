<nav class="navbar">

    <div class="navbar_container">
        <div class="navbar_content">
            <div class="navbar_title">
                <span class="main mb-2">CCI Campus</span>&nbsp;<span class="secondary">web application</span>
            </div>
            <div class="contain_navbar_redirections">
                <div class="navbar_redirections">
                    <a href="/project" class="underlined">Project</a>
                    <a target="_blank" href="https://github.com/AlxisHenry/alexishenry.eu" class="underlined">Github</a>
                </div>
                @if(Auth::check())
                    <x-btn-primary text="Profile" icon='<i class="fa-solid fa-arrow-right-long"></i>' to="/account" background="true"/>
                @else
                    <x-btn-primary text="Sign-in" icon='<i class="fa-solid fa-arrow-right-long"></i>' to="/login" background="true"/>
                @endif
            </div>
            <div class="navbar_burger">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>

        <div class="navbar_burger_content">
            <a href="/project" tabindex="-1" class="hover-effect">Project</a>
            <a target="_blank" tabindex="-1" class="hover-effect" href="https://github.com/AlxisHenry/alexishenry.eu">Github</a>
            @if(Auth::check())
                    <a href="/account" tabindex="-1" class="hover-effect">Profile</a>
            @else
                <a href="/login" tabindex="-1" class="hover-effect">Sign-in</a>
            @endif
        </div>

    </div>

</nav>
