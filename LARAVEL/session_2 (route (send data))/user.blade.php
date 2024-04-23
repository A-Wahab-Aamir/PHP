
<ul>
@foreach ($users as $i => $detail)
    <li>
        {{ $detail['name'] }} | {{ $detail['phone'] }} | {{ $detail['city'] }}
    </li>
@endforeach
</ul>