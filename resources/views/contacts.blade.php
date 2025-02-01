@section('content')
    <h1>Страница контактов</h1>
    @foreach($contacts as $contact)
        <h2>{{ $contact['name'] }}</h2>
        @if($contact['age'] < 18)
            <p>Человек слишком молод</p>
        @else
            <p>{{$contact['address']}}, {{$contact['post_code']}}</p>
            @if(array_key_exists('email', $contact))
                <p>{{$contact['email']}}</p>
            @else
                <p>Адрес электронной почты не указан</p>
            @endif
            <p>{{$contact['phone']}}</p>
        @endif
    @endforeach
@stop