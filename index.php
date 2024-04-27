<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel LeafIn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
  </head>
  <body>
    <header>
        <div class="ctr">
            <img src="assets/leaf.png" alt="LeafIn" width="100" height="80">
            <div class="badge text" style="width: 6rem;">
                <h5>LeafIn Hotel</h5>
                <p>Jl. Mayor TNI A.D Imat Saili No.21 Sungai Ampal Kel, Sumber Rejo, Balikpapan Tengah, Kota Balikpapan, Kalimantan Timur 76114</p>
                <p>BOOK ONLINE NOW RATES STARTED FROM Rp.1.050.000,00</p>
            </div>
        </div>
    </header>




    
    <div class="container">
    <!-- NAVBAR -->
        <nav class="navbar sticky-top navbar-expand-lg bg-primary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="?page=home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=room">Rooms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Photo Album</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=book">My Booking</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=about">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- NAVBAR END -->

        <!-- BOOK MENU -->
            <div class="card text-center mt-3 mb-5">
                <div class="card-body">
                    <h5 class="card-title">BOOK LEAFIN BALIKPAPAN HOTEL</h5>
                    <form action="#">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="col mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="col mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone">
                            </div>
                        </div>
                        <div class="row">
                            <select class="col form-select mb-3 " aria-label="Default select example">
                                        <option selected>Rooms</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                            </select>
                            <select class="col form-select mb-3 " aria-label="Default select example">
                                        <option selected>Adults</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                            </select>
                            <select class="col form-select mb-3 " aria-label="Default select example">
                                        <option selected>Children</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                            </select>
                        </div>
                            <div class=" mb-3">
                                <label for="checkin" class="form-label">Check In</label>
                                <input type="date" class="form-control" id="checkin">
                            </div>
                            <div class=" mb-3">
                                <label for="checkin" class="form-label">Check Out</label>
                                <input type="date" class="form-control" id="checkout">
                            </div>
                            <a href="#" >
                                <button onclick="myBook()" class="btn btn-primary">BOOK!</button>
                            </a>
                    </form>
                </div>
                    
            </div>
        <!-- BOOK MENU END -->
        <!-- CONTENT HERE -->
        <?php 
        $page = $_GET['page'];
        switch ($page) {
            case 'home';
                include 'pages/home.php';
                break;

            case 'room';
                include 'pages/room.php';
                break;

            case 'book';
                include 'pages/book.php';
                break;

            case 'about';
                include 'pages/about.php';
                break;

            default:
                include 'pages/home.php';
                break;
        }

        
        ?>
        <!-- CONTENT END -->
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        function myBook() {
                alert("Your Booking has been sent!");
                document.location.href = "index.php";
            }
    </script>
    
  </body>
</html>