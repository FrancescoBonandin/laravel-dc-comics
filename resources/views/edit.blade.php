<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/js/app.js')
    <title>Edit comic</title>

</head>

<body>
    
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>
                    modifica fumetto
                </h1>
            </div>
        </div>

        
        @if ($errors->any())

            <div class='alert alert-danger mb-4'>

                <ul>

                    @foreach ($errors->all() as $error)
                        <li>
                            {{$error}}
                        </li>
                    @endforeach

                </ul>

            </div>
        
        @endif
        
    
        <div class="row">
            <div class="col bg-dark text-white py-4">
                <form action="{{ route('home.update',['home'=>$comic->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
    
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" maxlength="1024" class="form-control @error('title') is-invalid @enderror"  id="title" name="title" value='{{old('title')}}' placeholder="Enter value..." required>
                    </div>

                    @error('title')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror
    
                    <div class="mb-3">
                        <label for="description" class="form-label">description</label>
                        <textarea  class="form-control @error('description') is-invalid @enderror"  id="description" name="description" placeholder="Enter value..." >{{old('description')}}</textarea>
                    </div>

                    @error('description')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror   
    
                    <div class="mb-3">
                        <label for="thumb" class="form-label">thumb</label>
                        <input type="text" maxlength="1024" class="form-control @error('thumb') is-invalid @enderror"  id="thumb" name="thumb" value="{{old('thumb')}}" placeholder="Enter value..." required>
                    </div>
                    
                    @error('thumb')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror 

                    <div class="mb-3">
                        <label for="price" class="form-label">price</label>
                        <input type="number" step="0.01" class="form-control  @error('price') is-invalid @enderror" id="price" name="price" value='{{old('price')}}' placeholder="Enter value..." required>
                    </div>

                    @error('price')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror 
    
                    <div class="mb-3">
                        <label for="series" class="form-label">series</label>
                        <input type="text"  class="form-control  @error('series') is-invalid @enderror" maxlength="100" id="series" name="series" placeholder="Enter value..."required>
                    </div>
                    
                    @error('series')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror 
    
                    <div class="mb-3">
                        <label for="sale-date" class="form-label">sale date</label>
                        <input type="date"  class="form-control @error('sale_date') is-invalid @enderror"  id="sale-date" name="sale_date" value='{{old('sale_date')}}' placeholder="Enter value..." required>
                    </div>
                    
                    @error('sale_date')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror 
    
                    <div class="mb-3">
                        <label for="type" class="form-label">type</label>
                        <input type="text" maxlength="32"  class="form-control  @error('type') is-invalid @enderror" id="type" name="type" value='{{old('type')}}' rows="3" required>
                    </div>
                    
                    @error('type')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror 

                    <div class="mb-3">
                        <label for="artists" class="form-label">artists</label>
                        <textarea  class="form-control  @error('artists') is-invalid @enderror" id="artists" name="artists" placeholder="Enter value..."required>{{old('artists')}}</textarea>
                    </div>
                    
                    @error('artists')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror 

                    <div class="mb-3">
                        <label for="writers" class="form-label">writers</label>
                        <textarea  class="form-control  @error('writers') is-invalid @enderror" id="writers" name="writers" placeholder="Enter value..."required>{{old('writers')}}</textarea>
                    </div>
                    
                    @error('writers')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror 

                    <div>
                        <button type="submit" class="btn btn-success w-100">
                            modifica
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
