

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('layout.head')   <!-- inserisce l'head predefinito -->

    <body>
        
        @yield('content')
        
        @include('layout.header') <!-- inserisce il codice con i link della navbar -->
        
        @include('layout.footer')   <!-- inserisce il footer predefinito -->

    </body>
</html>



