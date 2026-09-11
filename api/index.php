<?php
// index.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Portfolio | Développeur Full Stack</title>

    <meta name="description"
          content="Portfolio de développeur Full Stack : projets, compétences et parcours professionnel.">

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, sans-serif;
        }

        .hero {
            min-height: 90vh;
            display: flex;
            align-items: center;
        }

        .hero img {
            width: 280px;
            height: 280px;
            object-fit: cover;
            border-radius: 50%;
        }

        section {
            padding: 80px 0;
        }

        .project-card {
            transition: transform 0.2s ease;
        }

        .project-card:hover {
            transform: translateY(-5px);
        }

        footer {
            padding: 30px 0;
        }
    </style>
</head>

<body>

<!-- ================= NAVBAR ================= -->

<nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
    <div class="container">

        <a class="navbar-brand fw-bold" href="#">
            Mon Portfolio
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="#accueil">Accueil</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#apropos">À propos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#competences">Compétences</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#projets">Projets</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>

            </ul>

        </div>
    </div>
</nav>


<!-- ================= ACCUEIL ================= -->

<section id="accueil" class="hero">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-7">

                <p class="text-primary fw-bold">
                    DÉVELOPPEUR FULL STACK
                </p>

                <h1 class="display-4 fw-bold">
                    Bonjour, je suis
                    <span class="text-primary">
                       FS202
                    </span>
                </h1>

                <p class="lead mt-3">
                    Je conçois et développe des applications web modernes,
                    performantes et adaptées aux besoins des utilisateurs.
                </p>

                <div class="mt-4">

                    <a href="#projets" class="btn btn-primary btn-lg me-2">
                        Voir mes projets
                    </a>

                    <a href="#contact" class="btn btn-outline-dark btn-lg">
                        Me contacter
                    </a>

                </div>

            </div>

            <div class="col-md-5 text-center mt-5 mt-md-0">

                <img
                    src="/images/photo.png"
                    alt="Photo de profil"
                    class="img-fluid"
                >

            </div>

        </div>

    </div>

</section>


<!-- ================= À PROPOS ================= -->

<section id="apropos" class="bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">
                À propos de moi
            </h2>

            <p class="text-muted">
                Quelques informations sur mon parcours
            </p>

        </div>

        <div class="row justify-content-center">

            <div class="col-lg-9">

                <p>
                    Je suis développeur Full Stack spécialisé dans la conception
                    et le développement d'applications web.
                </p>

                <p>
                    J'interviens sur différentes étapes d'un projet :
                    analyse des besoins, conception, développement,
                    intégration, tests et mise en production.
                </p>

                <p>
                    J'aime particulièrement travailler sur des projets
                    permettant de transformer une idée en une application
                    fonctionnelle et accessible.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- ================= COMPÉTENCES ================= -->

<section id="competences">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">
                Mes compétences
            </h2>

        </div>

        <div class="row g-4">

            <div class="col-md-4">

                <div class="card h-100 shadow-sm">

                    <div class="card-body text-center">

                        <i class="bi bi-code-slash display-4 text-primary"></i>

                        <h4 class="mt-3">
                            Front-End
                        </h4>

                        <p>
                            HTML5, CSS3, JavaScript, Bootstrap,
                            responsive design...
                        </p>

                    </div>

                </div>

            </div>


            <div class="col-md-4">

                <div class="card h-100 shadow-sm">

                    <div class="card-body text-center">

                        <i class="bi bi-server display-4 text-primary"></i>

                        <h4 class="mt-3">
                            Back-End
                        </h4>

                        <p>
                            PHP, bases de données, APIs,
                            architecture serveur...
                        </p>

                    </div>

                </div>

            </div>


            <div class="col-md-4">

                <div class="card h-100 shadow-sm">

                    <div class="card-body text-center">

                        <i class="bi bi-git display-4 text-primary"></i>

                        <h4 class="mt-3">
                            Outils & Déploiement
                        </h4>

                        <p>
                            Git, GitHub, Vercel,
                            gestion de versions et déploiement.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= PROJETS ================= -->

<section id="projets" class="bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">
                Mes projets
            </h2>

            <p class="text-muted">
                Une sélection de mes réalisations
            </p>

        </div>


        <div class="row g-4">


            <!-- Projet 1 -->

            <div class="col-md-4">

                <div class="card project-card h-100 shadow-sm">

                    <img
                        src="/images/photo.png"
                        class="card-img-top"
                        alt="Projet 1"
                    >

                    <div class="card-body">

                        <h4 class="card-title">
                            Projet 1
                        </h4>

                        <p class="card-text">
                            Description courte du projet,
                            ses objectifs et les fonctionnalités principales.
                        </p>

                        <span class="badge bg-primary">
                            PHP
                        </span>

                        <span class="badge bg-secondary">
                            Bootstrap
                        </span>

                    </div>

                    <div class="card-footer bg-white">

                        <a href="#" class="btn btn-outline-primary">
                            Voir le projet
                        </a>

                    </div>

                </div>

            </div>


            <!-- Projet 2 -->

            <div class="col-md-4">

                <div class="card project-card h-100 shadow-sm">

                    <img
                        src="/images/photo.png"
                        class="card-img-top"
                        alt="Projet 2"
                    >

                    <div class="card-body">

                        <h4 class="card-title">
                            Projet 2
                        </h4>

                        <p class="card-text">
                            Description courte du projet,
                            ses objectifs et les fonctionnalités principales.
                        </p>

                        <span class="badge bg-primary">
                            JavaScript
                        </span>

                        <span class="badge bg-secondary">
                            API
                        </span>

                    </div>

                    <div class="card-footer bg-white">

                        <a href="#" class="btn btn-outline-primary">
                            Voir le projet
                        </a>

                    </div>

                </div>

            </div>


            <!-- Projet 3 -->

            <div class="col-md-4">

                <div class="card project-card h-100 shadow-sm">

                    <img
                        src="/images/photo.png"
                        class="card-img-top"
                        alt="Projet 3"
                    >

                    <div class="card-body">

                        <h4 class="card-title">
                            Projet 3
                        </h4>

                        <p class="card-text">
                            Description courte du projet,
                            ses objectifs et les fonctionnalités principales.
                        </p>

                        <span class="badge bg-primary">
                            HTML
                        </span>

                        <span class="badge bg-secondary">
                            CSS
                        </span>

                    </div>

                    <div class="card-footer bg-white">

                        <a href="#" class="btn btn-outline-primary">
                            Voir le projet
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= CONTACT ================= -->

<section id="contact">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">
                Contact
            </h2>

            <p class="text-muted">
                N'hésitez pas à me contacter
            </p>

        </div>

        <div class="row justify-content-center">

            <div class="col-md-7">

                <form method="POST" action="contact.php">

                    <div class="mb-3">

                        <label for="nom" class="form-label">
                            Nom
                        </label>

                        <input
                            type="text"
                            id="nom"
                            name="nom"
                            class="form-control"
                            required
                        >

                    </div>


                    <div class="mb-3">

                        <label for="email" class="form-label">
                            Email
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            class="form-control"
                            required
                        >

                    </div>


                    <div class="mb-3">

                        <label for="message" class="form-label">
                            Message
                        </label>

                        <textarea
                            id="message"
                            name="message"
                            class="form-control"
                            rows="5"
                            required
                        ></textarea>

                    </div>


                    <button type="submit" class="btn btn-primary">
                        Envoyer
                    </button>

                </form>

            </div>

        </div>

    </div>

</section>


<!-- ================= FOOTER ================= -->

<footer class="bg-dark text-white text-center">

    <div class="container">

        <p class="mb-2">
            © <?php echo date("Y"); ?> Votre Nom
        </p>

        <div>

            <a href="#" class="text-white me-3">
                <i class="bi bi-github"></i>
            </a>

            <a href="#" class="text-white me-3">
                <i class="bi bi-linkedin"></i>
            </a>

            <a href="#" class="text-white">
                <i class="bi bi-envelope"></i>
            </a>

        </div>

    </div>

</footer>


<!-- Bootstrap JS -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>