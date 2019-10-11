<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SySHoteles</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!-- Random Code -->
    <?php
         $random_string = rand(1,90) . chr(rand(65,90)) . rand(65,90) . chr(rand(65,90)) . chr(rand(65,90)) 
         . chr(rand(65,90)) . rand(65,90) . chr(rand(65,90)) . rand(65,90) . chr(rand(65,90)) . rand(65,90); 
         ?>
    <!-- Random Code -->
</head>

<body>
    <div style="background-color:#F4F6F7;">
        <!-- Navigation Bar -->
        <header>
            <ul class="nav nav-tabs">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">Ofertas</a>
                    <div class="dropdown-menu">
                        @foreach($listaOfertas as $miembro)
                        <a class="dropdown-item" href="{{route('ofertas',$miembro)}}">{{$miembro}}</a>
                        @endforeach
                </li>
            </ul>
            <!-- Navigation Bar -->
        </header>
        <!-- Each Offer-->
        @if(!empty($nombre))
        <!-- Offer One -->
        @switch($nombre)
        @case($nombre=='Descuentos')
        <div class="container">
            <h2 id="tituloPromos" class="mt-5">¡Fantástico, has escogido {{$nombre}}!</h2>
            <br>
            <img src="https://www.dolcevitalspa.com/wp-content/uploads/sites/7/2016/11/bono-2-1024x559.png"
                class="card-img-top" alt="...">
            <p id="subtitulo">¡Enhorabuena, aquí tienes tu código promocional! <strong
                    id="codigoPromo">{{$random_string}}</strong> </p>
            <p id="avisoCodigo">Tenga en cuenta que el código promocional de {{$nombre}} adquirido es único e
                intransferible </p>
            @break
            <!-- Offer Two -->
            @case($nombre=='Bebidas Gratuitas')
            <div class="container">
                <h2 id="tituloPromos" class="mt-5">¡Fantástico, has escogido {{$nombre}}!</h2>
                <br>
                <img src="https://www.viveusa.mx/sites/default/files/field/image/alcoholic-1850052_960_720.jpg"
                    class="card-img-top" alt="...">
                <p id="subtitulo">¡Enhorabuena, aquí tienes tu código promocional! <strong
                        id="codigoPromo">{{$random_string}}</strong></p>
                <p id="avisoCodigo">Tenga en cuenta que el código promocional de {{$nombre}} adquirido es único e
                    intransferible </p>
                @break
                <!-- Offer Three -->
                @case($nombre=='Sorteo de estancia gratuita')
                <div class="container">
                    <h2 id="tituloPromos" class="mt-5">¡Fantástico, has escogido {{$nombre}}!</h2>
                    <br>
                    <img src="https://www.affilired.com/wp-content/uploads/2016/02/HRHotels.jpg" class="card-img-top"
                        alt="...">
                    <p id="subtitulo">¡Enhorabuena, aquí tienes tu código promocional! <strong
                            id="codigoPromo">{{$random_string}}</strong></p>
                    <p id="avisoCodigo">Tenga en cuenta que el código promocional de {{$nombre}} adquirido es único e
                        intransferible </p>
                    @break
                    @endswitch
                    <!-- Welcome Offers-->
                    @else
                    <form style="float:right" ; class="form-inline">
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="inputPassword2" class="sr-only">Password</label>
                            <input type="Código" class="form-control" id="inputPassword2" placeholder="Código">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2"
                            onclick="alert('Código canjeado, revise su E-Mail')">Canjear Código</button>
                   </form>
                    <div class="container">
                        <h2 style="text-align:center;margin-bottom:20px; color:black;" class="mt-5">¡Bienvenido a
                            nuestras Ofertas de verano!</h2>
                        <br>
                        <img src="http://www.viatgesiluro.com/web_2.0/images/ofertas%20de%20verano/main.jpg"
                            class="card-img-top" alt="...">
                    </div>
					
					<img style = "width:22%; margin-left:120px;" src="https://en.toppng.com/public/uploads/preview/flecha-11549411357qvki7yvtws.png"
                            class="card-img-top" alt="...">
					   <p
                        style = "width:20%; margin-left:20%;color:brown; font-size: 20px;font-family: 'Helvetica Neue';border:inset;width:55%;" 
                            class="card-img-top" alt="...">
                        Para conocer nuestras fantásticas ofertas tiene que Desplegar la pestaña
                        <strong>Ofertas</strong> de la parte superior.</p>
                    <!-- Welcome Offers-->
                    @endif

                    <!-- Optional JavaScript -->
                    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                        crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                        crossorigin="anonymous"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                        crossorigin="anonymous"></script>
                    <footer class="page-footer font-small blue">
                        <!-- Copyright -->
                        <div class="footer-copyright text-center py-3">© 2019 Copyright:
                            <a href="#"> SySHoteles.com</a>
                        </div>
                        <!-- Copyright -->
                    </footer>
</body>

</html>