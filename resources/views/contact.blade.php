<h1>Haris</h1>

<center>
        <h1>Welcome to Percentage or Grade finder</h1>
 
    <nav>
        <a href="{{ route('home') }}">Welcome</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
        <a href="{{ route('calculate') }}">Percentage and Grade Calculator</a>
    </nav>
    </center>
@php
$name= ["Haris","Ahmed","Ansari","Haris","Ahmed","Ansari"]; 
@endphp    

@foreach ($name as $names)

@if($loop->even)
{{"S.no - $loop->iteration"}}<a style="color: rgb(197, 111, 12)" href="hars">{{$names}} <br></a>

@elseif($loop->odd)
{{"S.no - $loop->iteration"}}<a style="color: blue" href="hars">{{$names}} <br></a>
@else
<a style="color: rgb(255, 0, 0)" href="hars">{{$names}} <br></a>
@endif
@endforeach