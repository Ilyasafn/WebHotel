<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel LeafIn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="assets/img/leaf.png" rel="shortcut icon">
  </head>
  <body>
    <header>
        <div class="ctr">
            <img src="assets/img/logoimg/leaf.png" alt="LeafIn" width="100" height="80">
            <div class="badge text" style="width: 6rem;">
                <h5>LeafIn Hotel</h5>
                <p>Jl. Mayor TNI A.D Imat Saili No.21 Sungai Ampal Kel, Sumber Rejo, Balikpapan Tengah, Kota Balikpapan, Kalimantan Timur 76114</p>
                <p>BOOK ONLINE NOW RATES STARTED FROM Rp.1.050.000,00</p>
            </div>
        </div>
    </header>
    
    <div class="container">
    <!-- NAVBAR -->
        <nav class="navbar sticky-top navbar-expand-lg " style="background-color: aquamarine;">
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
                            <a class="nav-link" href="?page=album">Photo Album</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="?page=about" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Booking
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="?page=meeting">Meetings</a></li>
                                <li><a class="dropdown-item" href="?page=wedding">Weddings</a></li>
                                <li><a class="dropdown-item" href="?page=event">Social Event</a></li>
                                <li><a class="dropdown-item" href="?page=booking">Booking Room</a></li>
                                <li><a class="dropdown-item" href="?page=book">My Booking</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="?page=about" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                About Us
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="?page=facilities">Our Facilities</a></li>
                                <li><a class="dropdown-item" href="?page=menu">Our Menu</a></li>
                                <li><a class="dropdown-item" href="?page=about">About</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- NAVBAR END -->

        <!-- CONTENT HERE -->
        <?php 
        $page = isset($_GET['page'])?$_GET['page']:null;
        switch ($page) {
            case 'home';
                include 'pages/home.php';
                break;

            case 'room';
                include 'pages/room.php';
                break;

            case 'booking';
                include 'pages/booking.php';
                break;

            case 'book';
                include 'pages/your_book.php';
                break;

            case 'album';
                include 'pages/album.php';
                break;

            case 'about';
                include 'pages/about.php';
                break;

            case 'meeting';
                include 'pages/meeting.php';
                break;

            case 'wedding';
                include 'pages/wedding.php';
                break;

            case 'event';
                include 'pages/event.php';
                break;

            case 'menu';
                include 'pages/menu.php';
                break;

            case 'facilities';
                include 'pages/facilities.php';
                break;

            default:
                include 'pages/home.php';
                break;
        }


        ?>
        <!-- CONTENT END -->
    </div>

    <footer class="ctr">
        <p class="text-center">©2024 copyright reserved.</p>
    </footer>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
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