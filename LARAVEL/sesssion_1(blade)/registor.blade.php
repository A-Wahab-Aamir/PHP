{{-- to print text --}}
{{ "i am text, string" }}

<br> <br>
{{-- to print variable --}}

@php
    $name="Saad Kahn"
@endphp

{{ "hello " .$name }}

<br> <br>
{{-- to use html --}}

{!! "<h1 style='background-color:greenyellow;'> I AM HTML TAG </h1>" !!}

{{-- loop for each--}}

@php
    $names=["Monitor", "Mouse", "Cpu", "Keyboard", "flooopyDisk"];
@endphp

<ul type='square'>
@foreach ($names as $i)
   @if ($loop->even)
   <li style='background-color:rgb(255, 4, 0);'>{{$loop->index}} - {{ $i }}</li>
   @elseif ($loop->odd)
   <li style='background-color:rgb(38, 255, 0);'>{{$loop->index}} - {{ $i }}</li>
   {{-- @else
   <li>{{$loop->index}} - {{ $i }}</li> --}}
   @endif
@endforeach
</ul>