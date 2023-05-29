<?php
include './php/crudFunctions.php';
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Physio-Training</title>

    <!-- CSS FILES -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">


</head>

<body id="section_1">

    <header class="site-header">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 d-flex flex-wrap">
                    <p class="d-flex me-4 mb-0">
                        <i class="bi-geo-alt me-2"></i>
                        Bogotá
                    </p>

                    <p class="d-flex mb-0">
                        <i class="bi-envelope me-2"></i>

                        <a href="mailto:Physio-Training@gmail.com">
                            physio-training@gmail.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                    <ul class="social-icon">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-twitter"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-facebook"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-instagram"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-youtube"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-whatsapp"></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                ADMINISTRADOR
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <section class="contact-section section-padding testimonial-section" id="section_6">
            <div class="container">
                <div class="row">

                  

                    <div class="col-lg-12 col-12 mx-auto">
                        <form class="custom-form contact-form" action="#" method="post" role="form">
                            <h2>Lista Usuarios</h2>

                           <?php
                           $arr = getlist();
                           //print_r($arr);
                           foreach ($arr as $row) {
                            $id = $row['id'];
                            $idUser = $row['idUser'];
                            $nameC = $row['nameC'];
                            $age = $row['age'];
                            $city = $row['city'];
                            $email = $row['email'];

                            $pathology = $row['pathology'];
                            $service = $row['service'];
                            $observations = $row['observations'];
                            
                           ?>
                            <div class="row" style="margin: 10px;">
                                <div class="col-lg-1 col-md-6 col-12">
                                    <input type="" name="ID<?=$id?>" id="ID<?=$id?>" class="form-control"
                                        placeholder="identificacion*" required value="<?=$idUser?>" style="display: none;">
                                    <p id="pID<?=$id?>" style="word-wrap: break-word;"><?=$idUser?></p>
                                </div>
                                <div class="col-lg-1 col-md-6 col-12">
                                    <input type="" name="nameC<?=$id?>" id="nameC<?=$id?>" class="form-control"
                                        placeholder="identificacion*" required value="<?=$nameC?>" style="display: none;">
                                    <p id="pnameC<?=$id?>" style="word-wrap: break-word;"><?=$nameC?></p>
                                </div>
                                <div class="col-lg-1 col-md-6 col-12">
                                    <input type="" name="age<?=$id?>" id="age<?=$id?>" class="form-control"
                                        placeholder="identificacion*" required value="<?=$age?>" style="display: none;">
                                    <p id="page<?=$id?>" style="word-wrap: break-word;"><?=$age?></p>
                                </div>
                                <div class="col-lg-1 col-md-6 col-12">
                                    <input type="" name="city<?=$id?>" id="city<?=$id?>" class="form-control"
                                        placeholder="identificacion*" required value="<?=$city?>" style="display: none;">
                                    <p id="pcity<?=$id?>" style="word-wrap: break-word;"><?=$city?></p>
                                </div>
                                <div class="col-lg-1 col-md-6 col-12">
                                    <input type="" name="email<?=$id?>" id="email<?=$id?>" class="form-control"
                                        placeholder="identificacion*" required value="<?=$email?>" style="display: none;">
                                    <p id="pemail<?=$id?>" style="word-wrap: break-word;"><?=$email?></p>
                                </div>
                                <div class="col-lg-1 col-md-6 col-12">
                                    <input type="" name="pathology<?=$id?>" id="pathology<?=$id?>" class="form-control"
                                        placeholder="identificacion*" required value="<?=$pathology?>" style="display: none;">
                                    <p id="ppathology<?=$id?>" style="word-wrap: break-word;"><?=$pathology?></p>
                                </div>
                                <div class="col-lg-1 col-md-6 col-12">
                                    <input type="" name="service<?=$id?>" id="service<?=$id?>" class="form-control"
                                        placeholder="identificacion*" required value="<?=$service?>" style="display: none;">
                                    <p id="pservice<?=$id?>" style="word-wrap: break-word;"><?=$service?></p>
                                </div>
                                <div class="col-lg-2 col-md-6 col-12">
                                    <input type="" name="observations<?=$id?>" id="observations<?=$id?>" class="form-control"
                                        placeholder="identificacion*" required value="<?=$observations?>" style="display: none;">
                                    <p id="pobservations<?=$id?>" style="word-wrap: break-word;"><?=$observations?></p>
                                </div>
                                <div class="col-lg-2 col-md-6 col-12">
                                    <button id="editbt<?=$id?>" type="submit" class="form-control" onclick="editR(<?=$id?>)">Editar</button>
                                    <button id="act<?=$id?>" type="submit" class="form-control" onclick="updateR(<?=$id?>)" style="display: none;">Actualizar</button>
                                </div>
                                <div class="col-lg-1 col-md-6 col-12">
                                    <button type="submit" class="form-control delete-button" onclick="deleteR(<?=$id?>)">
                                        <img src="./images/icons/delete.png" alt="Icono de eliminación" style="width: 35px;">
                                    </button>
                                </div>
                            </div>

                            <?php
                            }
                            ?>

                            

                            <div class="row" id="respInsertRegister">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 mb-4">
                    <img src="img/logo.png" class="logo img-fluid" alt="">
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <h5 class="site-footer-title mb-3">Link</h5>

                    <ul class="footer-menu">
                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Quienes Somos</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Servicios</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Contacto</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Galeria</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Nuestros Clientes</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mx-auto">
                    <h5 class="site-footer-title mb-3">Información de Contacto</h5>

                    <p class="-white d-flex mb-2">
                        <i class="bi-telephone me-2"></i>

                        <a href="tel: 305-240-9671" class="site-footer-link">
                            300-000-0000
                        </a>
                    </p>

                    <p class="-white d-flex">
                        <i class="bi-envelope me-2"></i>

                        <a href="mailto:info@yourgmail.com" class="site-footer-link">
                            Trainingphysio1@gmail.com
                        </a>
                    </p>

                    <p class="-white d-flex mt-3">
                        <i class="bi-geo-alt me-2"></i>
                       Bogotá
                    </p>

                    <!-- <a href="#" class="custom-btn btn mt-3">Get Direction</a> -->
                </div>
            </div>
        </div>

        <div class="site-footer-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-7 col-12">
                        <p class="copyright- mb-0">Copyright © 2023 <a href="#">Physio-Trainer</a> 
                        </p>
                    </div>

                    <div class="col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">
                        <ul class="social-icon">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-twitter"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-facebook"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-instagram"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-linkedin"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="https://youtube.com/" class="social-icon-link bi-youtube"></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>
    <script>
        function deleteR(id) {
            event.preventDefault();
            
                let formData = new FormData();
                formData.append('id', id);

                let xhr = new XMLHttpRequest();

                xhr.open('POST', './php/delete.php', true);
                
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        let response = xhr.response.trim();

                        if (response === 'true') {
                            window.location.href = "virtualOffice.php";
                        } else {
                            alert("Error eliminando el registro")
                        }
                    }
                };

                xhr.send(formData);
            
        }

        function editR(id) {
            event.preventDefault();

            let act = document.getElementById('act'+id);

            act.style.display = 'block';

            let editbt = document.getElementById('editbt'+id);

            editbt.style.display = 'none';

            let idR = document.getElementById('ID'+id);
            let nameC = document.getElementById('nameC'+id);
            let age = document.getElementById('age'+id);
            let city = document.getElementById('city'+id);
            let email = document.getElementById('email'+id);
            let pathology = document.getElementById('pathology'+id);
            let service = document.getElementById('service'+id);
            let observations = document.getElementById('observations'+id);

            idR.style.display = 'block';
            nameC.style.display = 'block';
            age.style.display = 'block';
            city.style.display = 'block';
            email.style.display = 'block';
            pathology.style.display = 'block';
            service.style.display = 'block';
            observations.style.display = 'block';

            let pidR = document.getElementById('pID'+id);
            let pnameC = document.getElementById('pnameC'+id);
            let page = document.getElementById('page'+id);
            let pcity = document.getElementById('pcity'+id);
            let pemail = document.getElementById('pemail'+id);
            let ppathology = document.getElementById('ppathology'+id);
            let pservice = document.getElementById('pservice'+id);
            let pobservations = document.getElementById('pobservations'+id);

            pidR.style.display = 'none';
            pnameC.style.display = 'none';
            page.style.display = 'none';
            pcity.style.display = 'none';
            pemail.style.display = 'none';
            ppathology.style.display = 'none';
            pservice.style.display = 'none';
            pobservations.style.display = 'none';
            
        }

        function updateR(id) {
            event.preventDefault();

            let idR = document.getElementById('ID'+id).value;
            let nameC = document.getElementById('nameC'+id).value;
            let age = document.getElementById('age'+id).value;
            let city = document.getElementById('city'+id).value;
            let email = document.getElementById('email'+id).value;
            let pathology = document.getElementById('pathology'+id).value;
            let service = document.getElementById('service'+id).value;
            let observations = document.getElementById('observations'+id).value;

            let formData = new FormData();
                formData.append('id', id);
                formData.append('IDU', idR);
                formData.append('nameC', nameC);
                formData.append('age', age);
                formData.append('city', city);
                formData.append('email', email);

                formData.append('pathology', pathology);
                formData.append('service', service);
                formData.append('observations', observations);

                let xhr = new XMLHttpRequest();

                xhr.open('POST', './php/update.php', true);
                
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        let response = xhr.response.trim();

                        if (response === 'true') {
                            window.location.href = "virtualOffice.php";
                        } else {
                            alert("Error actualizando el registro")
                        }
                    }
                };

                xhr.send(formData);

        }
    </script>

</body>

</html>