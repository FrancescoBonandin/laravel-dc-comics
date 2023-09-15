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

    <header>

        <div class="container">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">

                <div class="container-fluid">

                    <a class="navbar-brand" href="#">
                        Navbar
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">

                        <span class="navbar-toggler-icon"></span>

                    </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

                    <div class="navbar-nav">

                      <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>

                      <a class="nav-link" href="{{route('home.index')}}">index</a>

                    </div>

                  </div>

                </div>

            </nav>

        </div>

    </header>
   
    <main>

        <div class="container">

            <div class="row">

                <div class="col text-center">

                    <h1>

                        Home

                    </h1>

                </div>

            </div>

            <div class="row">

                <div class="col text-center">

                    <h2 class="mt-3 mb-5">

                        about us

                    </h2>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum tenetur voluptatem quibusdam ipsa autem et reiciendis omnis corrupti deleniti ducimus totam, odit necessitatibus vel? Ducimus qui vitae voluptatibus odio nemo.
                    </p>

                </div>

            </div>

        </div>

    </main>
    
</body>

</html>