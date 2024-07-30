@extends('Layouts.App')

@section('content')


@if (session('danger'))

<div class="alert alert-danger" role="alert">
    {{session('danger')}}
</div>

    
@endif

@if (session('warning'))

<div class="alert alert-warning" role="alert">
    {{session('warning')}}
</div>

    
@endif


<hr>
<hr>
<br>
<center>
    <h1>Home page</h1>
</center>
<br>
<hr>
<hr>
<hr>


@endsection


