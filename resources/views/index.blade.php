<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        

        
        </div>
    </nav>

    <div class="container section">
        <div class="row mb-6 ">
            <div class="col-md-6 home-content mt-5">
                <h1 class="mt-5">PROGRAMMING</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus atque consectetur delectus, omnis saepe corporis labore harum error, assumenda totam numquam tempora aperiam.</p>
                <a class="btn btn-primary mt-2" href="{{ route('verify') }}">Verify Your Certificate Number</a>
            </div>
            <div class="col-md-6 home-img">
                <img style="width: 40rem;" src="{{ asset('assets/images/img/banner-image.png') }}" alt="">
            </div>
        </div>
    </div>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('assets/images/img/person1.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Lorem, ipsum dolor.</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, eligendi. Eum vel vitae ad non!</p>
                        <a href="#" class="btn btn-primary">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('assets/images/img/person2.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Lorem, ipsum dolor.</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum sint, officia excepturi dolore sequi accusantium.</p>
                        <a href="#" class="btn btn-primary">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('assets/images/img/person3.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Lorem, ipsum dolor.</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, repellat ab? Placeat consectetur libero commodi!</p>
                        <a href="#" class="btn btn-primary">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=" bg-info mb-3 p-5">
        <footer class="">
            <div class="row">
                <div class="col-md-4">
                    <ul>
                        <li><a href="">Navbar</a></li>
                        <li><a href="">Facebook</a></li>
                        <li><a href="">Twitter</a></li>
                        <li><a href="">Instagram</a></li>
                        <li><a href="">LindIn</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3 class="text-uupercase">services</h3>
                    <ul>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3 class="text-uupercase">Contact Us</h3>
                    <ul>
                        <li>08097112947</li>
                        <li>52,Owoseni street Oshodi Lagos</li>
                        <li>santos.philip385@gmail.com</li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
    
    

    <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.3.1.js') }}"></script>
    
</body>
</html>