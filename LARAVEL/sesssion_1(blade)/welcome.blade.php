{{-- WE ARE LEARNING ABOUT BLADE SYNTAX --}}



{{ "our first laarvel blade syntax" }}

{!! "<center><b><p style='background-color:red'>THIS IS TEXT IN CENTER OF BODY</p></b></center>" !!}


@php
    $name= ["anas", "muzammil" , "jamshed" , "bushra" , "fayaz", "abdul"];
@endphp

<ul type="circle">
@foreach ($name as $item)


   @if ($loop-> even)
                <li style="background-color: green"> {{$loop->iteration}} - {{ $item }}</li>
   
    @elseif($loop-> odd)    
                <li style="background-color: rgb(234, 71, 71)">{{$loop->iteration}} -  {{ $item }}</li>
    @else
    <li> {{$loop->iteration}} - {{ $item }}</li>
   
   @endif



@endforeach
</ul>

