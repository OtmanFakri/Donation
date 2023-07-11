<!DOCTYPE html>
<html lang="en-US">
<head>
    @include('layouts.Head')
</head>
<body>
@if(Auth::check())
    @if(Auth::guard('web')->user()->email_verified_at == null)
<div>
    <p class="items-center">Verify you mail please</p>
</div>
@endif
@endif
@yield('content')
@yield('welcome')
</body>
</html>
