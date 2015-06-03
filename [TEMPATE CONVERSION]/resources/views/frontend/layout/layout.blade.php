<!DOCTYPE html>
<html lang="en">
@include('frontend/layout/head')
<body class="stretched">
@include('frontend/layout/header')


@yield('content')
@include('frontend/layout/footer')
{!! HTML::script("frontend/js/bootstrap.min.js") !!}
{!! HTML::script("frontend/js/jquery.prettyPhoto.js") !!}
{!! HTML::script("frontend/js/main.js") !!}

{!! HTML::script('frontend/js/functions.js') !!}

</body>
</html>
