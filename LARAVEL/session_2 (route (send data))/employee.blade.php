{{-- <h1>Hello  {{ $name }} </h1>
<h1>Age: {{ $age }}</h1>
<h1>City: {{ $city }}</h1> --}}

<ul>


@foreach ($users as $key => $value)
<li>
    {{ $key }} - {{ $value['name'] }} | {{ $value['phone'] }} | {{ $value['city'] }}
</li>
@endforeach
</ul>
