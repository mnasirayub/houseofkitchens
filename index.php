<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="96x96" href="imgs/hk.png">
    <title>House of Kitchens</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="imgs/hk.png" class="img-fluid"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggle-icon"><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aboutus">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Our Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="hero">
        <h1>House of Kitchens</h1>
        <p>
            Promising Luxury Kitchens Under Your Budget
        </p>
        <a class="btn btn-default" href="#services">Explore More</a>
    </div>
    <div class="aboutus" id="aboutus">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                    <small>House of Kitchens</small>
                    <h2>About us</h2>
                    <p>
                        <strong>House of Kitchen's</strong> is a Modern Kitchen Design Company, manufacturing designer
                        Kitchens & Wardrobes
                        with a team of skilled professionals working in kitchen's industry for the past 10 years, to
                        meet quality designs, functionality & durability.
                    </p>
                    <a href="#contact">Contact</a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="imgs/side_img1.jfif" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <div class="parallex">
        <img src="imgs/hk.png" class="img-fluid">
        <h1>House of Kitchens</h1>
        <h4>Luxury with Comfort to Make Your Daily Chores Easier</h4>
    </div>
    <div class="services p-5" id="services">
        <h2 class="text-center mb-5 mt-5">Our Services</h2>
        <div class="container">
            <div class="row mb-5 text-center d-flex">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="box" onclick="kitchensWardrobs()">
                        <h3>Luxury Kitchens<br>&<br>Wardrobes</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="box" onclick="mediaWall()">
                        <h3>Media Walls<br>&<br>Console</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="box" onclick="appliances()">
                        <h3>Kitchen Appliances<br>&<br>Accessories</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6"><img src="imgs/kitchen1.jfif" class="img-fluid"></div>
                <div class="col-lg-4 col-md-4 col-sm-6"><img src="imgs/kitchen2.jpg" class="img-fluid"></div>
                <div class="col-lg-4 col-md-4 col-sm-12"><img src="imgs/kitchen3.jpg" class="img-fluid"></div>
            </div>
        </div>
    </div>
    <div class="gallery" id="gallery">
        <div class="container">
            <h2 class="text-center mt-5 mb-5">Gallery</h2>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-2"><img src="imgs/gallery1.jfif" alt="" class="img-fluid"></div>
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-2"><img src="imgs/gallery2.jfif" alt="" class="img-fluid"></div>
                        <div class="col-lg-6 col-md-6 col-sm-12"><img src="imgs/gallery4.jfif" alt="" class="img-fluid"></div>
                        <div class="col-lg-6 col-md-6 col-sm-12"><img src="imgs/gallery5.png" alt="" class="img-fluid"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12"><img src="imgs/kitchen9.jfif" style="height: 100%;" alt="" class="img-fluid"></div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-6 col-md-6 col-sm-12"><img src="imgs/kitchen8.jfif" style="height: 100%;" alt="" class="img-fluid"></div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-2"><img src="imgs/kitchen7.png" alt="" class="img-fluid"></div>
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-2"><img src="imgs/kitchen8.jfif" style="height: 100%;" alt=""
                                class="img-fluid"></div>
                        <div class="col-lg-6 col-md-6 col-sm-12"><img src="imgs/kitchen9.jfif" style="height: 100%;" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12"><img src="imgs/kitchen10.jfif" alt="" class="img-fluid"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer mt-5" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="row miniRow">
                        <div class="col-lg-6 col-md-6 col-sm-12 first">
                            <div class="logo"><img src="imgs/hk.png" class="img-fluid"></div>
                            <p>Promising Luxury Kitchens Under Your Budget</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h5>Get in Touch</h5>
                            <ul>
                                <li>2nd Floor Building# 84, Main Boulevard, Phase 6 DHA Lahore Cantt</li>
                                <li>+923222344463</li>
                                <li>houseofkitchens.pk@gmail.com</li>
                            </ul>
                            <div class="social">
                                <ul>
                                    <li><a href="https://www.facebook.com/House0fkitchens/" target="blank"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com/invites/contact/?i=1y24gpoj20b28&utm_content=mgicmk3"
                                            target="blank"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <form>
                        <div class="row mb-2">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="email" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <input type="text" placeholder="Mobile Number">
                        </div>
                        <div class="form-group mb-2">
                            <textarea name="" id="" rows="5" placeholder="Your Message"></textarea>
                        </div>
                        <div class="form-group">
                            <button>Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer>
        &copy; 2021 All Rights Reserved | House of Kitchens
    </footer>
</body>
<script src="https://kit.fontawesome.com/d6fb912aa0.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
</script>
<script src="js/script.js"></script>

</html>