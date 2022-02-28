<!DOCTYPE html>
<html lang="en">
    <head>
        @include('newsite.include.head')

    </head>

<body>
   <header>


    @include('newsite.include.header')

   </header>
   @yield('content')

<footer>
    @include('newsite.include.footer')

</footer>

    <!-- Footer -->
    @include('newsite.include.script')

</body>
</html>
