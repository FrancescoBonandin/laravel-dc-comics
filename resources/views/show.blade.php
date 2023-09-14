<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/js/app.js')
    <title>Show {{ $comic->title }}</title>

</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
                
            <div class="col-6 ">
                <div class="card my-5">


                    <img src="{{$comic->thumb}}" alt="" class="img-fluid card-top-img">

                    <div class="card_body">
                        <h2>
                            {{$comic->title}}
                        </h2>

                        <h5>
                            series:{{$comic->series}}
                        </h5>

                        <p>
                            description: {{$comic->description}}
                        </p>

                        <div>
                            artists:
                            @foreach (json_decode($comic->artists) as $artist)

                                @if ($loop->last)
                                    {{$artist}}
                                @endif

                                @if (!$loop->last)
                                    {{$artist}},
                                @endif
                                
                            @endforeach
                        </div>

                        <div>
                            writers:
                            @foreach (json_decode($comic->writers) as $writer)

                                @if ($loop->last)
                                    {{$writer}}
                                @endif

                                @if (!$loop->last)
                                    {{$writer}},
                                @endif
                                
                            @endforeach
                        </div>

                        <h6>
                            price: ${{$comic->price}}
                        </h6>
                    </div>


                </div>
            </div>

        </div>
    </div>
    
</body>

</html>