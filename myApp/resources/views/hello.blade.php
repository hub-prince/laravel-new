<h1>the app name is : {{$appName}}</h1>

<form action="/post" method="POST">
    @csrf
    <input type="text" name="title">
    <button type="submit">Submit</button>
</form>

<a href="{{ route('dashboard') }}">Dashboard</a>


 