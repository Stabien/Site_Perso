<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@3.0.0-beta.6/dist/aos.css"/>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <title>Template</title>
</head>

<body>
    <header class="navbar navbar-expand-lg position-fixed">
        <a href="#" class="navbar-brand">Bastien PIEDALLU</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content">
           <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar-content">
            <nav>
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="#anchor_presentation" class="nav-link">Présentation<span></span></a></li>
                    <li class="nav-item"><a href="#anchor_competences" class="nav-link">Compétences<span></span></a></li>
                    <li class="nav-item"><a href="#anchor_experience" class="nav-link">Expérience<span></span></a></li>
                    <li class="nav-item"><a href="#anchor_formations" class="nav-link">Formations<span></span></a></li>
                    <li class="nav-item"><a href="#anchor_projets" class="nav-link">Mes projets<span></span></a></li>
                    <li class="nav-item"><a href="#anchor_contact" class="nav-link">Contact<span></span></a></li>
                </ul>
            </nav>
        </div>
    </header>
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
        <div id="presentation_row" class="row section">
            <span class="anchor" id="anchor_presentation"></span>
            <div id="presentation" class="col-8 offset-2">
                <h2 data-aos="fade-up" data-aos-duration="1500">Présentation</h2>
                <p data-aos="fade-up" data-aos-duration="1500">Cela fait maintenant plusieurs années
                que je suis passionné par le développement informatique.
                Je me trouve actuellement en BTS SIO (option SLAM) et je suis à la recherche
                d'une alternance en tant que développeur web dans le cadre de ma deuxième année.
                </p>
                <a href="cv_bastien_piedallu.pdf" target="_blank"
                data-aos="fade" data-aos-duration="1500" data-aos-delay="400"
                data-aos-anchor-placement="top">Télécharger CV complet</a>
            </div>
        </div>
        <div id="competences-container" class="section">
            <span class="anchor" id="anchor_competences"></span>
            <h2 id="competences_title" data-aos="fade-up" data-aos-duration="1500">Compétences<h2>
            <div id="competences" class="container" data-aos="fade-up"
            data-aos-id="competences" data-aos-duration="1500">
                <div class="row">
                    <div class="col-lg">
                        <h3>Développement Web</h3>
                        <ul>
                            <li>HTML/CSS
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
                            <li>PHP/MySQL
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>WordPress
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
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
                            <li>Bootstrap
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
                </div>
                <div class="row">
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
                    <div class="col-lg">
                        <h3>Environnement</h3>
                        <ul>
                            <li>Git
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>NodeJS
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>Visual Studio
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="experience-container" class="section">
            <span class="anchor" id="anchor_experience"></span>
            <h2 data-aos="fade-up" data-aos-duration="1500">Expérience</h2>
            <div id="experience" class="container" data-aos="fade-left" data-aos-duration="1500">
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
        <div id="formations-container" class="section">
            <span class="anchor" id="anchor_formations"></span>
            <h2 data-aos="fade-up" data-aos-duration="1500">Formations</h2>
            <div id="formations" class="container">
                <div class="row">
                    <div class="col-8 offset-2 formations-content"
                    data-aos="fade-right" data-aos-duration="1500">
                        <h3>2019-2021</h3>
                        <h1>BTS SIO option SLAM</h1>
                        <h2>IPSSI</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 offset-2 formations-content"
                    data-aos="fade-left" data-aos-duration="1500">
                        <h3>2018-2019</h3>
                        <h1>Bachelor en Technologies de l'information</h1>
                        <h2>EPITECH</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 offset-2 formations-content"
                    data-aos="fade-right" data-aos-duration="1500">
                        <h3>2015-2018</h3>
                        <h1>Baccalauréat (E.S)</h1>
                        <h2>Lycée de l'Alma</h2>
                    </div>
                </div>
            </div>
        </div>
        <div id="mes-projets" class="section">
            <span class="anchor" id="anchor_projets"></span>
            <h2 data-aos="fade-up" data-aos-duration="1500"
            >Mes projets</h2>
            <div class="projets-container">
                <a href="https://www.github.com/stabien/punchline" class="projets-content"
                data-aos="zoom-in" data-aos-duration="1500"
                data-aos-anchor-placement="top-center" target="_blank">
                    <div class="miniature-container">
                        <h3>Punchline</h3>
                        <img src="images/punchline_miniature">
                    </div>
                    <h4>Application Mobile</h4>
                    <ul>
                        <li>React-Native</li>
                        <li>NodeJS</li>
                        <li>Expo</li>
                        </ul>
                </a>
                <a href="https://www.github.com/stabien/home_page_template" class="projets-content"
                data-aos="zoom-in" data-aos-delay="300" data-aos-duration="1500"
                data-aos-anchor-placement="top-center" target="_blank">
                    <div class="miniature-container">
                        <h3>Home Template</h3>
                        <img src="images/home_template_miniature">
                    </div>
                    <h4>Front-end Website</h4>
                    <ul>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>jQuery</li>
                    </ul>
                </a>
                <a href="https://www.github.com/stabien/ppe" class="projets-content"
                data-aos="zoom-in" data-aos-delay="600" data-aos-duration="1500"
                data-aos-anchor-placement="top-bottom" target="_blank">
                    <div class="miniature-container">
                        <h3>Cyaba</h3>
                        <img src="images/cyaba_miniature">
                    </div>
                    <h4>Back-end Website</h4>
                    <ul>
                        <li>PHP</li>
                        <li>MySQL</li>
                        <li>jQuery</li>
                    </ul>
                </a>
                <a href="https://www.github.com/stabien/auto_header" class="projets-content"
                data-aos="zoom-in" data-aos-delay="900" data-aos-duration="1500"
                data-aos-anchor-placement="top-bottom" target="_blank">
                    <div class="miniature-container">
                        <h3>Auto Header</h3>
                        <img src="images/Autoheader_miniature">
                    </div>
                    <h4>Logiciel</h4>
                    <ul>
                        <li>C++</li>
                        <li>Qt</li>
                    </ul>
                </a>
            </div>
            <a id="link-github" href="https://www.github.com/Stabien" target="_blank"
            data-aos="fade-up" data-aos-duration="1500">Voir tous mes projets</a>
        </div>
        <div id="contact" class="section">
            <span class="anchor" id="anchor_contact"></span>
            <div class="container">
                <div class="row">
                    <div id="infos_contact" class="col-10 offset-1 mx-auto col-lg-4 offset-lg-1">
                        <h3>Informations</h3>
                        <div id="container-infos-contact">
                            <ul id="keywords-infos">
                                <li><img src="images/mail_icone_blue.png">b.piedallu@ecole-ipssi.net</li>
                                <li><img src="images/telephone_icone_blue_2.png">07 60 75 32 74</li>
                                <li><img src="images/ville_icone_blue.png">75 Paris</li>
                            </ul>
                        </div>
                        <div id="liens">
                            <a href="http://www.github.com/stabien" target="_blank">
                                <img src="images/github_icone.png">
                            </a>
                            <a href="http://www.linkedin.com/in/bastien-piedallu-b16558182/" target="_blank">
                                <img src="images/linkedin_icone.png">
                            </a>
                        </div>
                    </div>
                    <div id="form_contact" class="col-10 offset-1 col-lg-6 offset-lg-1">
                        <form>
                            <h3>Me contacter</h3>
                            <div class="names_input_container">
                                <input type="text" class="names_input" id="input_nom" placeholder="Nom">
                                <input type="text" class="names_input" id="input_prenom" placeholder="Prénom">
                            </div>
                            <input type="email" placeholder="Adresse email">
                            <textarea type="text" placeholder="Votre message"></textarea>
                            <input type="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <a href="#banner" id="link-to-top"><img src="images/top_icone.png"></a>
    <script src="https://unpkg.com/aos@3.0.0-beta.6/dist/aos.js"></script>
    <script>
    // AOS initialisation
    AOS.init({
       once: true
    });

    // Animates the competences progress bar when aos event is triggered
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
                "opacity": "1"
            });
            $('.nav-link').attr("style", "color: black !important");
            $(".navbar-toggler-icon").css("background-image", "url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e\")");
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
                "color": "white",
                "opacity": "0.8"
            });
            $(".navbar-toggler-icon").css("background-image", "url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e\")");
        }
    });

    //link-top-icone display script
    $(document).on("scroll", function() {
        if (window.scrollY > 500)
            $('#link-to-top').fadeIn();
        else
            $('#link-to-top').fadeOut();
    });

    //link anchor animation script
    $(document).ready(function() {
        $('.nav-link, #link-to-top').on('click', function() {
            var page = $(this).attr('href');
            var speed = 1000;
            $('html, body').animate({scrollTop: $(page).offset().top}, speed);
            return false;
        });
    });

    //Underline nav-link on scroll position
    var nav_link = $('.nav-link').children();
    var sections = $('.section');
    var height_section = [0, 0, 0, 0, 0];
    var limit = document.body.offsetHeight - window.innerHeight;

    height_section[0] = 630;

    for (var i = 1; i < 7; i++) {
        height_section[i] = height_section[i - 1] + sections[i - 1].clientHeight;
    }

    $(document).on('scroll', function() {
        for (var i = 1; i < 6; i++) {
            if (window.scrollY < height_section[i] && window.scrollY >= height_section[i - 1])
                $(nav_link[i - 1]).css("width", "100%");
            else {
                if (window.scrollY == 0)
                    $('.nav-link').children().css("width", "0%");
                else
                    $(nav_link[i - 1]).css("width", "0%");
            }
        }
        if (window.scrollY >= limit - 1) {
            $('.nav-link').children().css("width", "0%");
            $(nav_link[5]).css("width", "100%");
        }
        else
            $(nav_link[5]).css("width", "0%");
    });
    </script>
</body>
</html>
