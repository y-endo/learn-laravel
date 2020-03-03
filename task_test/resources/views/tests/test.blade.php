test

@foreach($values as $value)
{{ $value }}
@endforeach

@foreach($chunks as $chunk)
    @foreach($chunk as $key => $value)
        {{ $key }}{{ $value }}
    @endforeach
@endforeach
