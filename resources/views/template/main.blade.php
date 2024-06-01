@include('template.navbar')
@include('template.sidebar')

<main id="main" class="main">
    @yield('content')
</main><!-- End #main -->

@include('template.footer')