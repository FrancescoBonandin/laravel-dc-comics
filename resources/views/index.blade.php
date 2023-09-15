<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/js/app.js')
    <title>Home</title>

</head>

<body>
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-6 text-center">
                <a class="btn btn-primary" href="{{route('home.create')}}">
                    + Aggiungi
                </a>
            </div>

        </div>

        <div class="row">
            @foreach ($comics as $comic)
                
                <div class="col-3">
                    <div class="card">

                        <a href="{{route('home.show',['home'=> $comic->id])}}">

                            <img src="{{$comic->thumb}}" alt="" class="img-fluid card-top-img">

                            <div class="card-body">
                                <h3>
                                    {{$comic->title}}
                                </h3>

                                <h6>
                                    price: ${{$comic->price}}
                                </h6>
                            </div>

                        </a>

                    </div>
                </div>

            @endforeach
        </div>
    </div>
    
</body>

</html>