<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@3.0.0-beta.6/dist/aos.css"/>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=600, maximum-scale=1">
    <title>Bastien PIEDALLU</title>
</head>

<body>
    <header class="navbar navbar-expand-lg position-fixed">
        <span class="navbar-brand">Bastien PIEDALLU</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content">
           <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar-content">
            <nav>
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="#anchor_presentation" class="nav-link">Présentation<span></span></a></li>
                    <li class="nav-item"><a href="#anchor_competences" class="nav-link">Compétences<span></span></a></li>
                    <li class="nav-item"><a href="#anchor_experience" class="nav-link">Expériences<span></span></a></li>
                    <li class="nav-item"><a href="#anchor_formations" class="nav-link">Formations<span></span></a></li>
                    <li class="nav-item"><a href="#anchor_projets" class="nav-link">Projets<span></span></a></li>
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
        <img src="images/profil.png">
    </div>
    <main class="container-fluid">
        <div id="presentation_row" class="row section">
            <span class="anchor" id="anchor_presentation"></span>
            <div id="presentation" class="col-8 offset-2">
                <div id="aos-animation-container" data-aos="fade-up" data-aos-duration="1500">
                    <h2>Présentation</h2>
                    <p> Étudiant en BTS SIO (SLAM) à l'école IPSSI située à Paris, je suis actuellement
                    en alternance chez ZencarZ. Passionné par le développement informatique,
                    je maîtrise aussi bien les langages Front-End que Back-End ainsi que certains langages de programmations.
                    </p>
                </div>
                <a href="documents/cv_bastien_piedallu.pdf" target="_blank"
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
                            <li>HTML / CSS
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>JavaScript
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>SQL / NoSQL
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>PHP
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>TypeScript
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
                            <li>React.js
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>React Native
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>Node.js
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>Vue.js
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>Angular
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="55"
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
                            <li>C#
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="65"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>Python
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="65"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg">
                        <h3>Environnements</h3>
                        <ul>
                            <li>Git
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>Jira
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>Glide
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>Visual Studio
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
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
            <h2 data-aos="fade-up" data-aos-duration="1500">Expériences</h2>
            <div class="container experience" data-aos="fade-right" data-aos-duration="1500">
                <div class="row">
                    <div class="experience-content col-10 offset-1">
                        <div class="content-stage">
                            <h3>Développeur Full Stack</h3>
                            <h4>Zorro en Couleur</h4>
                            <span>Mai 2021 - Aujourd'hui</span>
                            <ul>
                                <li>Création d'un site e-commerce avec Vue.js</li>
                                <li>Utilisation de Node.js et SQL Server</li>
                                <li>Mise en place d'une API REST</li>
                                <li>Intégration d'une maquette Figma</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container experience" data-aos="fade-right" data-aos-duration="1500">
                <div class="row">
                    <div class="experience-content col-10 offset-1">
                        <div class="content-stage">
                            <h3>Développeur Full Stack</h3>
                            <h4>ZencarZ</h4>
                            <span>Décembre 2020 - Juillet 2021</span>
                            <ul>
                                <li>Création d'une application de gestion des véhicules de l'entreprise</li>
                                <li>Conception et création l’application sur Glide</li>
                                <li>Mise en place d'un système de tag d'image pour la gestion des sinistres
                                en HTML / CSS / JavaScript relié à l'application</li>
                                <li>Création d'une API REST avec Node.js et Express.js</li>
                                <li>Utilisation de MongoDB pour gérer une partie des données</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container experience" data-aos="fade-left" data-aos-duration="1500">
                <div class="row">
                    <div class="experience-content col-10 offset-1">
                        <div class="content-stage">
                            <h3>Développeur Web Junior</h3>
                            <h4>IFGPE</h4>
                            <span>Mars 2020 - Avril 2020</span>
                            <ul>
                              <li>Création d'un site regroupant des produits immobiliers sous WordPress</li>
                              <li>Conception et mise en place d'une simulation pour certains produits
                              permettant aux clients de faire une projection financière</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="formations-container" class="section">
            <span class="anchor" id="anchor_formations"></span>
            <h2 data-aos="fade-up" data-aos-duration="1500">Formations</h2>
            <div id="formations" class="container">
              <div class="row" data-aos="fade-right" data-aos-duration="1500">
                  <div class="col-8 offset-2 formations-content">
                      <h3>2021-2022</h3>
                      <h1>Bachelor Développement Full Stack et DevOps</h1>
                      <h2>IPSSI</h2>
                  </div>
              </div>
                <div class="row" data-aos="fade-left" data-aos-duration="1500">
                    <div class="col-8 offset-2 formations-content">
                        <h3>2019-2021</h3>
                        <h1>BTS SIO option SLAM</h1>
                        <h2>IPSSI</h2>
                    </div>
                </div>
                <div class="row" data-aos="fade-right" data-aos-duration="1500">
                    <div class="col-8 offset-2 formations-content">
                        <h3>2018-2019</h3>
                        <h1>Bachelor en Technologies de l'information</h1>
                        <h2>EPITECH</h2>
                    </div>
                </div>
                <div class="row" data-aos="fade-left" data-aos-duration="1500">
                    <div class="col-8 offset-2 formations-content">
                        <h3>2015-2018</h3>
                        <h1>Baccalauréat (E.S)</h1>
                        <h2>Lycée de l'Alma</h2>
                    </div>
                </div>
            </div>
        </div>
        <div id="mes-projets" class="section">
          <div class="container">
            <span class="anchor" id="anchor_projets"></span>
            <h2 data-aos="fade-up" data-aos-duration="1500">Projets</h2>
            <div class="projets-container">
                <a href="#" class="projets-content"
                data-aos="zoom-in" data-aos-duration="1500"
                data-aos-anchor-placement="top-bottom" target="_blank">
                    <div class="miniature-container">
                        <h3>Zorro en Couleur</h3>
                        <img src="images/cyaba_miniature.png">
                    </div>
                    <h4>Site e-commerce</h4>
                    <ul>
                        <li>Vue.js</li>
                        <li>Node.js</li>
                        <li>API REST</li>
                        <li>SQL Server</li>
                    </ul>
                </a>
                <a href="#" class="projets-content"
                data-aos="zoom-in" data-aos-duration="1500"
                data-aos-anchor-placement="top-bottom" target="_blank">
                    <div class="miniature-container">
                        <h3>Nutrifinder</h3>
                        <img src="images/ppe2.png">
                    </div>
                    <h4>Application mobile</h4>
                    <ul>
                        <li>React Native</li>
                        <li>Node.js</li>
                        <li>Redux</li>
                        <li>SQL Server</li>
                    </ul>
                </a>
                <a href="#" class="projets-content"
                data-aos="zoom-in" data-aos-duration="1500"
                data-aos-anchor-placement="top-bottom" target="_blank">
                    <div class="miniature-container">
                        <h3>Youtube Records</h3>
                        <img src="images/ppe2.png">
                    </div>
                    <h4>Extension Chrome</h4>
                    <ul>
                        <li>Node.js</li>
                        <li>Express.js</li>
                        <li>Socket.io</li>
                    </ul>
                </a>
                <a href="#" class="projets-content"
                data-aos="zoom-in" data-aos-duration="1500"
                data-aos-anchor-placement="top-bottom" target="_blank">
                    <div class="miniature-container">
                        <h3>Gallery Template</h3>
                        <img src="images/ppe2.png">
                    </div>
                    <h4>Galerie photo</h4>
                    <ul>
                        <li>React.js</li>
                        <li>Node.js</li>
                        <li>Bootstrap</li>
                    </ul>
                </a>
            </div>
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
                            <a href="https://www.github.com/stabien" target="_blank">
                                <img src="images/github_icone.png">
                            </a>
                            <a href="https://www.linkedin.com/in/bastien-piedallu-b16558182/" target="_blank">
                                <img src="images/linkedin_icone.png">
                            </a>
                        </div>
                    </div>
                    <div id="form_contact" class="col-10 offset-1 col-lg-6 offset-lg-1">
                        <form action="" method="POST">
                            <h3>Me contacter</h3>
                            <div class="names_input_container">
                                <input type="text" class="contact_input"
                                name="nom" id="input_nom" placeholder="Nom">
                                <input type="text" class="contact_input"
                                name="prenom" id="input_prenom" placeholder="Prénom">
                            </div>
                            <input type="text" placeholder="Adresse email"
                            name="email" id="input_email" class="contact_input">
                            <textarea type="text" placeholder="Votre message"
                            name="message" id="input_message" class="contact_input"></textarea>
                            <input type="submit" id="submit">
                            <p id="form_submit" style="display: none">Votre message a bien été envoyé ! </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <a href="#banner" id="link-to-top"><img src="images/top_icone_2.png"></a>
    <script src="https://unpkg.com/aos@3.0.0-beta.6/dist/aos.js"></script>
    <script>
    // AOS initialisation
    AOS.init({
       once: true
    });
    </script>
    <script src="js/aos_event.js"></script>
    <script src="js/button_top.js"></script>
    <script src="js/nav_scroll.js"></script>
    <script src="js/submit_form.js"></script>
    <script src="js/projet_hover_animation.js"></script>
</body>
</html>
