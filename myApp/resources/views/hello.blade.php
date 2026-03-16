<h1>the app name is : {{$appName}}</h1>

<form action="/post" method="POST">
    
    <input type="text" name="title">
    <button type="submit">Submit</button> {{'without csrf not working 419 expired'}}
</form>

<form action="/post" method="POST">
    @csrf
    <input type="text" name="title">
    <button type="submit">Submit</button> {{'with csrf working'}}
</form>

<a href="{{ route('dashboard') }}">Dashboard</a>


 