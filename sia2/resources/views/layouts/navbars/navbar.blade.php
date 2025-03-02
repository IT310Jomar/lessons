@auth()
    @include('layouts.navbars.navs.auth')
@endauth
{{-- @include('layouts.navbars.navs.auth') --}}
@guest()
    @include('layouts.navbars.navs.guest')
@endguest