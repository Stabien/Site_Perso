<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@3.0.0-beta.6/dist/aos.css"/>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <title>Template</title>
</head>

<body>
    <?php include('header.php'); ?>
    <div id="banner">
        <img src="images/banniere.png">
        <div id="titles">
            <h1>Bastien Piedallu</h1>
            <h2>DÉVELOPPEUR WEB JUNIOR</h2>
        </div>
    </div>
    <div id="profil">
        <img src="images/profil.jpg">
    </div>
    <main class="container-fluid">
        <div id="presentation_row" class="row">
            <div id="presentation" class="col-8 offset-2" data-aos="fade-up" data-aos-duration="1500">
                <h2>Présentation</h2>
                <p>Cela fait maintenant plusieurs années
                que je suis passionné par le développement informatique.
                Je me trouve actuellement en BTS SIO (option SLAM) et je suis à la recherche
                d'une alternance en tant que développeur web dans le cadre de ma deuxième année.
                </p>
            </div>
        </div>
        <div id="competences-container" data-aos="fade-up" data-aos-duration="1500" data-aos-id="competences" data-aos-anchor-placement="top-center">
            <h2 id="competences_title">Compétences<h2>
            <div id="competences" class="container">
                <div class="row">
                    <div class="col-lg">
                        <h3>Développement Web</h3>
                        <ul>
                            <li>HTML & CSS
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>JavaScript
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>PHP & MySQL
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg">
                        <h3>Langages de programmation</h3>
                        <ul>
                            <li>C
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>C++
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>Python
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg">
                        <h3>Frameworks</h3>
                        <ul>
                            <li><span>jQuery</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>React
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>Symfony
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg">
                        <h3>Langues</h3>
                        <ul>
                            <li>Français
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>Anglais
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>Espagnol
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="50"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="experience-container">
            <h2 data-aos="fade-up" data-aos-duration="1500">Expérience</h2>
            <div id="experience" class="container" data-aos="fade-left" data-aos-duration="1500" data-aos-anchor-placement="top-center">
                <div class="row">
                    <a href="experience/Rapport_de_stage.pdf" target="_blank" id="experience-content" class="col-10 offset-1">
                        <img src="images/image_stage.png">
                        <div id="content-stage">
                            <div id="content-stage-left">
                                <h3>IFGPE</h3>
                                <h4>Développeur Web Junior</h4>
                                <p>- Création d'un site regroupant des produits immobiliers sous WordPress</p>
                                <p>- Conception et mise en place d'une simulation pour certains produits
                                permettant aux clients de faire une projection financière</p>
                            </div>
                            <div id="content-stage-right">
                                <h4>(2 mois)<h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div id="formations-container">
            <h2 data-aos="fade-up" data-aos-duration="1500"
            data-aos-anchor-placement="top-center">Formations</h2>
            <div id="formations" class="container">
                <div class="row">
                    <div class="col-8 offset-2 formations-content"
                    data-aos="fade-right" data-aos-duration="1500" data-aos-anchor-placement="top-center">
                        <h3>2019-2021</h3>
                        <h1>BTS SIO option SLAM</h1>
                        <h2>IPSSI</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 offset-2 formations-content"
                    data-aos="fade-left" data-aos-duration="1500" data-aos-anchor-placement="top-center">
                        <h3>2018-2019</h3>
                        <h1>Bachelor en Technologies de l'information</h1>
                        <h2>EPITECH</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 offset-2 formations-content"
                    data-aos="fade-right" data-aos-duration="1500" data-aos-anchor-placement="top-center">
                        <h3>2015-2018</h3>
                        <h1>Baccalauréat (E.S)</h1>
                        <h2>Lycée de l'Alma</h2>
                    </div>
                </div>
            </div>
        </div>
        <div id="mes-projets">
            <h2 data-aos="fade-up" data-aos-duration="1500"
            data-aos-anchor-placement="top-center">Mes projets</h2>
            <div class="projets-container">
                <a href="#" class="projets-content" data-aos="fade-zoom-in"
                data-aos-duration="1500" data-aos-anchor-placement="top-center">
                    <div class="miniature-container">
                        <h3>Punchline</h3>
                        <img src="images/punchline_miniature">
                    </div>
                    <h4>Punchline</h4>
                    <ul>
                        <li>React-Native</li>
                        <li>NodeJS</li>
                        <li>Expo</li>
                    </ul>
                </a>
                <a href="#" class="projets-content" data-aos="fade-zoom-in" data-aos-delay="200"
                data-aos-duration="1500" data-aos-anchor-placement="top-center">
                    <div class="miniature-container">
                        <h3>Home Template</h3>
                        <img src="images/home_template_miniature">
                    </div>
                    <h4>Home Template</h4>
                    <ul>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>jQuery</li>
                    </ul>
                </a>
                <a href="#" class="projets-content" data-aos="fade-zoom-in" data-aos-delay="400"
                data-aos-duration="1500" data-aos-anchor-placement="top-center">
                    <div class="miniature-container">
                        <h3>Cyaba</h3>
                        <img src="images/cyaba_miniature">
                    </div>
                    <h4>Cyaba</h4>
                    <ul>
                        <li>PHP</li>
                        <li>MySQL</li>
                        <li>jQuery</li>
                    </ul>
                </a>
                <a href="#" class="projets-content" data-aos="fade-zoom-in" data-aos-delay="600"
                data-aos-duration="1500" data-aos-anchor-placement="top-center">
                    <div class="miniature-container">
                        <h3>Auto Header</h3>
                        <img src="images/Autoheader_miniature">
                    </div>
                    <h4>Auto Header</h4>
                    <ul>
                        <li>C++</li>
                        <li>Qt</li>
                    </ul>
                </a>
            </div>
        </div>
    </main>
    <script src="https://unpkg.com/aos@3.0.0-beta.6/dist/aos.js"></script>
    <script>
    // AOS initialisation
    AOS.init({
        once: true
    });

    // Animate the competences progress bar when aos event is triggered
    $(document).on("aos:in:competences", function() {
        $(".progress-bar").css("width", function() {
            return $(this).attr("aria-valuenow") + "%";
        });
    });

    // Animation of the navbar on scroll
    $(document).on("scroll", function() {
        if (window.scrollY > 0) {
            $("header").css({
                "transition": "0.6s",
                "background": "white",
                "box-shadow": "0 10px 30px rgba(0, 0, 0, 0.19), 0 6px 10px rgba(0, 0, 0, 0.23)",
            });
            $(".navbar-brand").css({
                "transition": "0.6s",
                "color": "black"
            });
            $(".nav-link").css({
                "transition": "0.6s",
                "color": "black"
            });
        }
        else {
            $("header").css({
                "transition": "0.3s",
                "background": "none",
                "box-shadow": "none"
            });
            $(".navbar-brand").css({
                "transition": "0.3s",
                "color": "white"
            });
            $(".nav-link").css({
                "transition": "0.3s",
                "color": "white"
            });
        }
    });
    </script>
</body>
</html>
