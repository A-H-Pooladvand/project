<!doctype html>
<html lang="{{ config('app.locale') }}" dir="{{ config('app.locale') === 'en' ? 'ltr' : 'rtl' }}">

@include('admin::_partials.head')

<body>

@include('admin::_partials.aside')

<div class="container-fluid admin__content">
    @yield('content')
</div>

</body>
</html>