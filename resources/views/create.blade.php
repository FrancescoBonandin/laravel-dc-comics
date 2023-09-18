<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/js/app.js')
    <title>Create new comic</title>

</head>

<body>
    
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>
                    Crea nuovo comic
                </h1>
            </div>
        </div>
    
        <div class="row">
            <div class="col bg-dark text-white py-4">
                <form action="{{ route('home.store') }}" method="POST">
                    @csrf
    
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" maxlength="1024" class="form-control" id="title" name="title" placeholder="Enter value..." required>
                    </div>
    
                    <div class="mb-3">
                        <label for="description" class="form-label">description</label>
                        <textarea  class="form-control" id="description" name="description" placeholder="Enter value..." ></textarea>
                    </div>
    
                    <div class="mb-3">
                        <label for="thumb" class="form-label">thumb</label>
                        <input type="text" maxlength="1024" class="form-control" id="thumb" name="thumb" placeholder="Enter value..." required>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">price</label>
                        <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Enter value..." required>
                    </div>
    
                    <div class="mb-3">
                        <label for="series" class="form-label">series</label>
                        <input type="text"  class="form-control" maxlength="100" id="series" name="series" placeholder="Enter value..."required>
                    </div>
    
                    <div class="mb-3">
                        <label for="sale-date" class="form-label">sale date</label>
                        <input type="date"  class="form-control" id="sale-date" name="sale_date" placeholder="Enter value..." required>
                    </div>
    
                    <div class="mb-3">
                        <label for="type" class="form-label">type</label>
                        <input type="text" maxlength="32"  class="form-control" id="type" name="type" rows="3" required>
                    </div>

                    <div class="mb-3">
                        <label for="artists" class="form-label">artists</label>
                        <textarea  class="form-control" id="artists" name="artists" placeholder="Enter value..."required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="writers" class="form-label">writers</label>
                        <textarea  class="form-control" id="writers" name="writers" placeholder="Enter value..."required></textarea>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-success w-100">
                            + Aggiungi
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
