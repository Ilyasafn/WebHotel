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
    <link href="assets/img/logoimg/leaf.png" rel="shortcut icon">
  </head>
  <body>
    <header>
        <div class="ctr">
            <img src="assets/img/logoimg/leaf.png" alt="LeafIn" width="100" height="80">
            <div class="badge text" style="width: 6rem;">
                <h5>LeafIn Hotel</h5>
                <p>Jl. Mayor TNI A.D Imat Saili No.21 Sungai Ampal Kel, Sumber Rejo, Balikpapan Tengah, Kota Balikpapan, Kalimantan Timur 76114</p>
                <p>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                </svg>
                BOOK ONLINE OR CALL (+62 123-666)
            </p>
            </div>
        </div>
    </header>
    
    <div class="container">
    <!-- NAVBAR -->
        <nav class="navbar sticky-top navbar-expand-lg" style="background-color: #75A47F;">
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

            case 'review';
                include 'pages/review.php';
                break;

            default:
                include 'pages/home.php';
                break;
        }


        ?>
        <!-- CONTENT END -->
        <hr>
        <footer>
            <br>
            <div class="row">
                <!-- MAPS -->
                <div class="col">
                <h6>Location</h6>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.480406311779!2d116.8504845!3d-1.2491769!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df147190e229de9%3A0xe9f21f4d0e15bcec!2sLP3I%20BALIKPAPAN!5e0!3m2!1sid!2sid!4v1714295076533!5m2!1sid!2sid" width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
                <!-- MAPS END -->

                <!-- ALAMAT -->
                <div class="col">

                <!-- AREA INFORMATION -->
                <h6>Area Information</h6>
                <p>Jl. Mayor TNI A.D Imat Saili No.21 Sungai Ampal Kel, Sumber Rejo, Balikpapan Tengah, Kota Balikpapan, Kalimantan Timur 76114</p>
                <!-- AREA INFORMATION END -->
                
                <!-- ATTRACTION -->
                <h6>Other Attractions</h6>
                <p>Shopping Center</p>
                <ul>
                    <li>E-Walk Mall <sub> - 7 km</sub></li>
                    <li>Balikpapan Baru Mall <sub> - 1.7 km</sub></li>
                    <li>Living Plaza Balikpapan <sub> - 3.2 km</sub></li>
                </ul>
                <p>Others</p>
                <ul>
                    <li>Islamic Center Mosque <sub> - 5 km</sub></li>
                    <li>Perpustakaan Kota Balikpapan<sub> - 4.6 km</sub></li>
                </ul>
                <!-- ATTRACTION END -->


                </div>
                <!-- ALAMAT END -->


                <!-- SOSMED -->
                <!-- SOSMED LI 1 -->
                <ul class="col-2" style="list-style: none;">
                    <h6>Our Social Media</h6>
                        <li>
                            <p class="col">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                            </svg>
                                <a class="link-secondary link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="https://instagram.com">Instagram</a>
                            </p>
                        </li>

                        <li class="">
                            <p class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                            </svg>
                                <a class="link-secondary link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="https://youtube.com">Youtube</a>
                            </p>
                        </li>

                        <li class="">
                            <p class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                            <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                            </svg>
                                <a class="link-secondary link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="https://twitter.com">Twitter</a>
                            </p>
                        </li>

                    <!-- CONTACTS -->
                        <div class="card" style="width: 18rem;">
                            <div class="card-header">
                                <h6 class="text-center">Contact Us</h6>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">+62 831-2346-8942</li>
                                <li class="list-group-item">+62 0808 123-321</li>
                                <li class="list-group-item">+62 888 321-123</li>
                            </ul>
                        </div>
                    <!-- CONTACTS END -->


                </ul>
                <!-- SOSMED LI 1 END -->

                <!-- SOSMED LI 2 -->
                <ul class="col-2 mt-4" style="list-style: none;">
                <span></span>

                    <li class="">
                        <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                        </svg>
                        <a class="link-secondary link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="https://github.com">Github</a>
                        </p>
                    </li>
                    <li class="">
                        <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                        </svg>
                        <a class="link-secondary link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="https://facebook.com">Facebook</a>
                        </p>
                    </li>
                    <li class="">
                        <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                        </svg>
                        <a class="link-secondary link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="https://whatsapp.com">Whatsapp</a>
                        </p>
                    </li>
                </ul>
                <!-- SOSMED LI 2 END -->
                <!-- SOSMED END -->

            </div>
            <hr>
            <div class="p-1">
                <h6 class="text-center">© 2024 copyright reserved.</h6>
            </div>
        </footer>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        function myBook() {
                alert("Your Booking has been sent!");
                document.location.href = "index.php";
            }
        
        function myReview() {
            alert("Your Review has been sent!");
            document.location.href = "index.php";
        }

        function mySchedule() {
            alert("Check your email to verify your schedule!");
            document.location.href = "index.php";
        }
    </script>
    
  </body>
</html>