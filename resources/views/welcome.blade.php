<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

</head>

<body>
    @forelse($travels as $travel)

    <div class="col">
        <div class="card travel">
            <div class="card-body text-black-50">
                <h3>{{$travel->destinazione}}</h3>

                <a href="{{route('house', ['house' => $house->id])}}"> Vist this place</a>
            </div>

        </div>
    </div>
    @empty

    <p>Nothing to see here sorry</p>

    @endforelse

</body>

</html>