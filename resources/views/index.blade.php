<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/js/app.js')
    <title>Index</title>

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

                        
                        <img src="{{$comic->thumb}}" alt="" class="img-fluid card-top-img">
                        
                        <div class="card-body">
                            <h3>
                                {{$comic->title}}
                            </h3>
                            
                            <h6>
                                price: ${{$comic->price}}
                            </h6>
                        </div>
                        
                        <a class="btn btn-primary" href="{{route('home.show',['home'=> $comic->id])}}">
                            Show
                        </a>
                    
                        <a class="btn btn-warning" href="{{route('home.edit',['home'=> $comic->id])}}">
                            Edit
                        </a>
                       
                        <form onsubmit="return confirm('sei certo di voler cancellare?')" action="{{route('home.destroy',['home'=> $comic->id])}}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger">
                                delete
                            </button>

                        </form>
                        
                    </div>
                </div>

            @endforeach
        </div>
    </div>
    
</body>

</html>