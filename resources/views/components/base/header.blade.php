<header>
    <div class="header-area">
        <a href="{{ route('home') }}" class="header-area-left">B7Store</a>
        <div class="header-area-right">
        @if (Auth::check()) 
            <a href="{{ route('my-account') }}" class="my-account">
                <img src="/assets/icons/userIcon.png" />
                Minha Conta
                {{-- Minha Conta - {{ Auth::user()->name }} --}}
            </a>
        @else 
            <a href="{{route('login')}}" class="my-account">
                <img src="/assets/icons/userIcon.png" />
                Login
            </a>
        @endif
        <a href="{{ route('ad-create') }}" class="announce-now">Anunciar agora →</a>
        <img class="menu-icon" src="/assets/icons/menuIcon.png" alt="Menu" />
        <div class="menu-mobile">
            @if (Auth::check()) 
                
                <a href="{{ route('my-account') }}" class="my-account-mobile">
                    <img src="/assets/icons/userIcon.png" alt="Ícone do usuário" />
                    Minha Conta
                </a>
            @else 
                <a href="{{ route('login') }}" class="my-account-mobile">
                    <img src="/assets/icons/userIcon.png" alt="Ícone do usuário" />
                    Login
                </a>
            @endif
            <a class="my-account-mobile" href="/index.html"
            ><img src="/assets/icons/logoutIcon.png" /> Sair</a
            >
        </div>
        </div>
    </div>
</header>