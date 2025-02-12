<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Le rechauffement Climatique</title>
        <link rel="icon" type="image/x-icon" href="<?php echo site_url('assets/pngegg.ico')?> " />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts--> 
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo site_url('assets/css/styles.css') ?>" rel="stylesheet" />
        <link href="<?php echo site_url('assets/css/frontOffice.css') ?>" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" onclick="main();" href="#">ETU001284</a>
                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button> -->
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" onclick="sommaire();" href="#">Sommaire de ce sujet</a></li>
                        <!-- <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.html">About</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="post.html">Sample Post</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.html">Contact</a></li> -->
                    </ul>
                </div>
            </div>
        </nav>  
        <!-- Page Header-->
        <header class="masthead" style="background-image: url(<?php echo site_url('assets/assets/img/home-bg.webp')?>)">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Le Réchauffement climatique</h1>
                            <span class="subheading">causes, impacts et solutions possibles</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div id="main-container" class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="#">
                            <h2 class="post-title">Qu’est-ce que le réchauffement climatique ?</h2>
                            <h3 class="post-subtitle">Le globe se réchauffe. 
                                Les terres et les océans sont plus chauds aujourd’hui qu’ils ne l’étaient à l’époque où l’on a commencé à tenir des registres, en 1880, et les températures continuent d’augmenter. 
                                Cette augmentation de la chaleur est un réchauffement climatique, en un mot.</h3></a>
                            <p>
                            Voici les chiffres exacts,
                            selon la National Oceanic and Atmospheric Administration (NOAA) : 
                            Entre 1880 et 1980, la température mondiale annuelle a augmenté à un taux de <b>0,07 degré Celsius par décennie</b>, en moyenne.
                            Depuis 1981, le taux d’augmentation s’est accéléré pour atteindre <b>0,18 degrés C par décennie</b>. 
                            Cela a conduit à une <b>augmentation globale de 1,4 degrés C de la température moyenne mondiale</b> aujourd’hui par rapport à l’ère préindustrielle. 
                            En 2019, la température mondiale moyenne sur terre et dans les océans était supérieure de 0,95 °C à la moyenne du XXe siècle. 
                            Cela fait de 2019 la deuxième année la plus chaude jamais enregistrée, avec un retard de seulement 2016, 2020 bat tous les records quant à elle. 
                            </p>
                        <p class="post-meta">
                            source
                            <a href="https://www.jedonnedusens.com/le-rechauffement-climatique-causes-impacts-et-solutions-possibles/">https://www.jedonnedusens.com/le-rechauffement-climatique-causes-impacts-et-solutions-possibles/</a>
                        </p>
                    <center><a href="#" style="color:red" onclick="sommaire();">Voir sommaire</a></center><br>
                    </div>
                </div>
            </div>
        </div>
        <div id="question-container" class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <?php
                        foreach ($listeQuestion as $key) { ?>
                            <div class="post-preview">
                                <a href="<?php echo site_url('listequestion')."/".$key['url']."-".$key['id']; ?>">
                                <center><h2><?php echo $key['question']; ?></h2></center>
                                </a><br>
                            </div>
                    <?php }?>
                    <center><a href="#" style="color:red" onclick="main();">Revoir définition</a></center><br>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">Copyright &copy; RAKOTONIRINA Mendrika Itokiana P13-B 2022</div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo site_url('assets/js/scripts.js')?>"></script>
        <!-- Script pour permettre de voir le sommaire -->
        <script>
            var mainContainer = document.getElementById("main-container");
            var questionContainer = document.getElementById("question-container");
            mainContainer.style.display = "block";
            questionContainer.style.display = "none";
            function sommaire(){
                mainContainer.style.display = "none";
                questionContainer.style.display = "block";
            }
            function main(){
                mainContainer.style.display = "block";
                questionContainer.style.display = "none";
            }
        </script>
    </body>
</html>
