 <!DOCTYPE html>
 <html>

 <head>
     <title>@yield('title')</title>
 </head>

 <body>

     @include('partials.nav')

     <div class="container">
         @yield('content')
     </div>

     @foreach ($users as $user)
         <p>{{ $user }}</p>
     @endforeach

     @if ($user)
         <p>data loaded</p>
 
     @else
         <p>error</p>
     @endif

 </body>

 </html>
