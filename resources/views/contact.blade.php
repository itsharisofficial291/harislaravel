@include('welcome');

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