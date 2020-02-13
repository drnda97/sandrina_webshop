@include('inc/header')
<div class="container">
    @include('layouts/nav')
    <div class="content">
        @yield('content')
    </div>
</div>
@include('inc/footer')