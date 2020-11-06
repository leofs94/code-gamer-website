<!doctype html>
<html lang="en">
<?php
include('_connect.php');
$response = new stdClass();

//$datos=array();
$datos = [];
$i = 0;
$sql = "select * from promociones";
$result = mysqli_query($con, $sql);
?>


<!-- agregar RGB a la navbar y sticky top -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />

    <title>Code Gamer</title>
</head>

<body>
    <ul class="nav d-flex justify-content-between bg-dark">
        <div class="d-flex flex-row">
            <li class="nav-item">
                <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
        </div>
        <div class="d-flex flex-row">
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </div>
    </ul>
    <header>
        <?php include 'header.php' ?>
    </header>
    <div id="divisor-rgb"></div>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php
            $i = 0;
            foreach ($result as $row) {
                $actives = '';
                if ($i == 0) {
                    $actives = 'active';
                }
            ?>
                <div class="carousel-item <?= $actives; ?>">
                    <img class="d-block w-100" src=<?= $row['ruta_imagen'] ?>>
                </div>
            <?php $i++;
            } ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="d-flex p-2">
        <img src="https://th.bing.com/th/id/OIP.N73S56_lWEfRWyOplikqHAHaE6?pid=Api&rs=1" class="img-fluid" alt="">
    </div>
    <div class="container-fluid bg-light">
        <h3>Productos Destacados</h3>
        <div class="d-flex justify-content-between " id="destacados-1">

        </div>
        <div class="d-flex justify-content-between" id="destacados-2">

        </div>
    </div>
    <div class="d-flex p-2">
        <img src="https://th.bing.com/th/id/OIP.N73S56_lWEfRWyOplikqHAHaE6?pid=Api&rs=1" class="img-fluid" alt="">
    </div>
        <div class="d-flex justify-content-center">
            <div class="container">
                <h2>Our Partners/ Our Clients</h2>
                <section class="customer-logos slider">
                    <div class="slide"><img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"></div>
                    <div class="slide"><img src="http://www.webcoderskull.com/img/logo.png"></div>
                    <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
                    <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>
                    <div class="slide"><img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></div>
                    <div class="slide"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
                    <div class="slide"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
                    <div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
                    <div class="slide"><img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div>
                </section>
            </div>
        </div>




        <footer><?php include 'footer.php' ?></footer>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
        <script>
            $(document).ready(function() {
                $.ajax({
                    url: 'get_promotions.php',
                    type: 'POST',
                    data: {},
                    success: function(data) {
                        console.log(data);
                        var html1 = '';
                        var html2 = '';
                        for (var i = 0; i < 4; i++) {
                            html1 +='<div class="d-flex">' +
                                '<div class="card" style="width:18rem;">' +
                                '<img src="'+ data.datos[i].ruta_imagen +'"'+'class="card-img-top" alt="...">' +
                                '<div class="card-body">' +
                                '<h4 class="card-title">'+data.datos[i].descripcion+'</h4>' +
                                '<h5 class="card-subtitle mb-2 text-muted">'+'$'+data.datos[i].precio+'</h5>' +
                                '<a href="#" class="btn btn-primary">Agregar al Carrito</a>' +
                                '</div>' +
                                '</div>' +
                                '</div>'
                        }
                        console.log(html1)
                        for (var i = 4; i < data.datos.length; i++) {
                            html2 += '<div class="d-flex">' +
                                '<div class="card" style="width: 18rem;">' +
                                '<img src="'+ data.datos[i].ruta_imagen +'"'+'class="card-img-top" alt="...">' +
                                '<div class="card-body">' +
                                '<h4 class="card-title">'+data.datos[i].descripcion+'</h4>' +
                                '<h5 class="card-subtitle mb-2 text-muted">'+data.datos[i].precio+'</h5>' +
                                '<a href="#" class="btn btn-primary">Agregar al Carrito</a>' +
                                '</div>' +
                                '</div>' +
                                '</div>'
                        }
                        console.log(data)
                        document.getElementById("destacados-1").innerHTML = html1;
                        document.getElementById("destacados-2").innerHTML = html2;
                    },
                    error: function(err) {
                        console.error(err);
                    }
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $('.customer-logos').slick({
                    slidesToShow: 6,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 1500,
                    arrows: false,
                    dots: false,
                    pauseOnHover: false,
                    responsive: [{
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 4
                        }
                    }, {
                        breakpoint: 520,
                        settings: {
                            slidesToShow: 3
                        }
                    }]
                });
            });
        </script>
</body>

</html>