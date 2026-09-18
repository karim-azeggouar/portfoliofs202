<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Formation FullStack — 2ème année</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f7fb;
            color: #1e293b;
        }

        /* ================= HEADER ================= */

        header {
            background: #0f172a;
            color: white;
            padding: 18px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo {
            font-size: 22px;
            font-weight: bold;
        }

        .logo span {
            color: #38bdf8;
        }

        nav a {
            color: #cbd5e1;
            text-decoration: none;
            margin-left: 25px;
            font-size: 15px;
        }

        nav a:hover {
            color: white;
        }

        .menu-toggle {
            display: none;
            border: 1px solid #475569;
            border-radius: 8px;
            background: transparent;
            color: white;
            cursor: pointer;
            font: inherit;
            font-size: 14px;
            padding: 9px 12px;
        }

        .menu-toggle:hover,
        .menu-toggle:focus-visible {
            background: #1e293b;
            outline: 2px solid #38bdf8;
            outline-offset: 2px;
        }

        /* ================= HERO ================= */

        .hero {
            background: linear-gradient(135deg, #0f172a, #1e3a8a);
            color: white;
            padding: 80px 7%;
        }

        .hero-content {
            max-width: 850px;
        }

        .badge {
            display: inline-block;
            background: rgba(255,255,255,.12);
            border: 1px solid rgba(255,255,255,.2);
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 13px;
            margin-bottom: 20px;
        }

        .hero h1 {
            font-size: 45px;
            margin-bottom: 18px;
        }

        .hero h1 span {
            color: #38bdf8;
        }

        .hero p {
            color: #dbeafe;
            font-size: 18px;
            line-height: 1.7;
            max-width: 750px;
        }

        /* ================= CONTAINER ================= */

        .container {
            width: 86%;
            max-width: 1200px;
            margin: auto;
        }

        section {
            padding: 60px 0;
        }

        .section-title {
            margin-bottom: 30px;
        }

        .section-title h2 {
            font-size: 28px;
            margin-bottom: 8px;
        }

        .section-title p {
            color: #64748b;
        }

        /* ================= MODULE ================= */

        .module {
            background: white;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(15,23,42,.07);
            border: 1px solid #e2e8f0;
        }

        .module-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            margin-bottom: 30px;
        }

        .module-number {
            width: 55px;
            height: 55px;
            border-radius: 14px;
            background: #dbeafe;
            color: #1d4ed8;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            font-size: 18px;
        }

        .module-title {
            flex: 1;
        }

        .module-title h3 {
            font-size: 24px;
            margin-bottom: 5px;
        }

        .module-title p {
            color: #64748b;
        }

        /* ================= CARDS ================= */

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .card {
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            padding: 24px;
            transition: .2s;
            background: #fff;
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(15,23,42,.09);
        }

        .card-icon {
            font-size: 28px;
            margin-bottom: 15px;
        }

        .card h4 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .card p {
            color: #64748b;
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 18px;
        }

        /* ================= BUTTON ================= */

        .btn {
            display: inline-block;
            padding: 10px 16px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
            transition: .2s;
        }

        .btn-primary {
            background: #2563eb;
            color: white;
        }

        .btn-primary:hover {
            background: #1d4ed8;
        }

        .btn-outline {
            border: 1px solid #cbd5e1;
            color: #334155;
        }

        .btn-outline:hover {
            background: #f1f5f9;
        }

        /* ================= LIST ================= */

        .resource-list {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .resource {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 18px;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            background: white;
        }

        .resource-info {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .pdf-icon {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            background: #fee2e2;
            color: #dc2626;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            font-size: 12px;
        }

        .resource strong {
            display: block;
            margin-bottom: 3px;
        }

        .resource small {
            color: #64748b;
        }

        /* ================= PROJECT ================= */

        .project {
            background: #0f172a;
            color: white;
            border-radius: 18px;
            padding: 35px;
        }

        .project h3 {
            font-size: 25px;
            margin-bottom: 12px;
        }

        .project p {
            color: #cbd5e1;
            line-height: 1.7;
            max-width: 800px;
            margin-bottom: 20px;
        }

        /* ================= FOOTER ================= */

        footer {
            background: #0f172a;
            color: #94a3b8;
            text-align: center;
            padding: 30px;
            margin-top: 30px;
        }

        /* ================= RESPONSIVE ================= */

        @media(max-width: 850px) {

            header {
                padding: 14px 7%;
                flex-wrap: wrap;
            }

            .logo {
                font-size: 20px;
            }

            .menu-toggle {
                display: block;
            }

            .cards {
                grid-template-columns: 1fr;
            }

            .hero h1 {
                font-size: 34px;
            }

            nav {
                display: none;
                width: 100%;
                flex-direction: column;
                align-items: stretch;
                padding-top: 12px;
                gap: 4px;
            }

            nav.is-open {
                display: flex;
            }

            nav a {
                margin-left: 0;
                padding: 12px;
                border-radius: 8px;
            }

            nav a:hover,
            nav a:focus-visible {
                background: #1e293b;
            }

            .module-header {
                align-items: flex-start;
            }

            .resource {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
        }
    </style>
</head>


<body>

<!-- ================= HEADER ================= -->

<header>

    <div class="logo">
        Full<span>Stack</span> Academy
    </div>

    <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="main-navigation">
        Menu
    </button>

    <nav id="main-navigation">
        <a href="#modules">Modules</a>
        <a href="#cours">Cours</a>
        <a href="#tp">TP</a>
        <a href="#projets">Mini-projets</a>
        <a href="#badge-portfolio">Badge portfolio</a>
    </nav>

</header>


<!-- ================= HERO ================= -->

<section class="hero">

    <div class="hero-content">

        <div class="badge">
            Formation Développement Web FullStack
        </div>

        <h1>
            2ème année <span>FullStack</span>
        </h1>

        <p>
            Espace pédagogique destiné aux stagiaires.
            Retrouvez ici les cours, travaux pratiques,
            exercices, mini-projets et énoncés PDF
            nécessaires à votre progression.
        </p>

    </div>

</section>


<!-- ================= MODULES ================= -->

<section id="modules">

    <div class="container">

        <div class="section-title">
            <h2>Parcours de formation</h2>
            <p>Les modules et ressources disponibles pour la formation.</p>
        </div>


        <!-- MODULE 01 -->

        <div class="module">

            <div class="module-header">

                <div class="module-number">
                    M01
                </div>

                <div class="module-title">

                    <h3>Préparer un projet Web</h3>

                    <p>
                        Analyse, conception, organisation et préparation
                        d'un projet Web avant son développement.
                    </p>

                </div>

            </div>


            <div class="cards">

                <!-- COURS -->

                <div class="card">

                    <div class="card-icon">
                        📚
                    </div>

                    <h4>Cours</h4>

                    <p>
                        Supports de cours et notions essentielles
                        pour préparer et analyser un projet Web.
                    </p>

                    <a href="/docs/UML.pptx"
                       class="btn btn-primary"
                       download>
                        Télécharger le cours
                    </a>

                </div>


                <!-- TP -->

                <div class="card">

                    <div class="card-icon">
                        🛠️
                    </div>

                    <h4>Travaux pratiques</h4>

                    <p>
                        Exercices et travaux pratiques permettant
                        d'appliquer progressivement les notions du module.
                    </p>

                    <a href="#tp"
                       class="btn btn-outline">
                        Voir les TP
                    </a>

                </div>


                <!-- MINI PROJET -->

                <div class="card">

                    <div class="card-icon">
                        🚀
                    </div>

                    <h4>Mini-projet</h4>

                    <p>
                        Mise en pratique des connaissances à travers
                        un projet Web réalisé progressivement.
                    </p>

                    <a href="#projets"
                       class="btn btn-outline">
                        Voir le projet
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= COURS ================= -->

<section id="cours">

    <div class="container">

        <div class="section-title">

            <h2>📚 Cours</h2>

            <p>
                Supports pédagogiques du Langage de modélisation UML
                « Préparer un projet Web ».
            </p>

        </div>


        <div class="resource-list">

            <div class="resource">

                <div class="resource-info">

                    <div class="pdf-icon">
                        PPT
                    </div>

                    <div>
                        <strong>
                            Cours — UML
                        </strong>

                        <small>
                            Support principal 
                        </small>
                    </div>

                </div>

                <a href="/docs/UML.pptx"
                   class="btn btn-primary"
                   download>
                    Télécharger
                </a>

            </div>


            <div class="resource">

                <div class="resource-info">

                    <div class="pdf-icon">
                        PNG
                    </div>

                    <div>
                        <strong>
                            UML — Résumé
                        </strong>

                        <small>
                            Modélisation et conception
                        </small>
                    </div>

                </div>

                <a href="/images/résumeuml.png"
                   class="btn btn-primary"
                   download>
                    Télécharger
                </a>

                 <div class="resource-info">

                    <div class="pdf-icon">
                        PDF
                    </div>

                    <div>
                        <strong>
                           Exercices UML
                        </strong>

                        <small>
                            Modélisation et conception
                        </small>
                    </div>

                </div>
<a href="/docs/UMLTPs.pdf"
                   class="btn btn-primary"
                   download>
                    Télécharger
                </a>
            </div>





            

        </div>

    </div>

</section>








<!-- ================= FIGMA ================= -->

<section id="cours">

    <div class="container">

        <div class="section-title">

            <h2>UX / UI FIGMA</h2>

            <p>
                Formation multimédia  UX / UI design
                « Préparer un projet Web ».
            </p>

        </div>


        <div class="resource-list">



<div class="resource">

                <div class="resource-info">

                    <div class="pdf-icon">
                        PPT
                    </div>

                    <div>
                        <strong>
                            Présentation FIGMA
                        </strong>

                        
                    </div>

                </div>

              <a href="/docs/Figma.pptx"
                   class="btn btn-primary"
                   download>
                    Télécharger
                </a>  

            </div>






            <div class="resource">

                <div class="resource-info">

                    <div class="pdf-icon">
                        Vidéos
                    </div>

                    <div>
                        <strong>
                            Figma_Partie 1
                        </strong>

                        <small>
                            Outils de base. 
                        </small>
                    </div>

                </div>

                

            </div>
 <div class="resource">

                <div class="resource-info">

                    <div class="pdf-icon">
                        Vidéos
                    </div>

                    <div>
                        <strong>
                            Figma_Partie 2
                        </strong>

                        <small>
                            Outils avancés 
                        </small>
                    </div>

                </div>


            </div>

             <div class="resource">

                <div class="resource-info">

                    <div class="pdf-icon">
                        Vidéos
                    </div>

                    <div>
                        <strong>
                            Figma_Partie 3
                        </strong>

                        <small>
                            Prototypage et animations
                        </small>
                    </div>

                </div>

               

            </div>

 





            

        </div>

    </div>

</section>



<!-- ================= TP ================= -->

<!-- ================= BADGE PORTFOLIO ================= -->

<section id="badge-portfolio">

    <div class="container">

        <div class="section-title">

            <h2>Cr&eacute;er un badge portfolio</h2>

            <p>
                Cr&eacute;ez un badge personnalis&eacute; pour votre portfolio avec l'application React.
            </p>

        </div>

        <div class="resource-list">

            <div class="resource">

                <div class="resource-info">

                    <div class="pdf-icon">
                        APP
                    </div>

                    <div>
                        <strong>
                            G&eacute;n&eacute;rateur de badge portfolio
                        </strong>

                        <small>
                            Ouvrez l'application pour cr&eacute;er votre badge.
                        </small>
                    </div>

                </div>

                <a href="https://badge-ashen-two.vercel.app/"
                   class="btn btn-primary"
                   target="_blank"
                   rel="noopener noreferrer">
                    Cr&eacute;er un badge
                </a>

            </div>

        </div>

    </div>

</section>

<section id="tp">

    <div class="container">

        <div class="section-title">

            <h2> Travaux pratiques</h2>

            <p>
                Réalisez les TP dans l'ordre proposé.
            </p>

        </div>


        <div class="resource-list">

            
            


            <div class="resource">

                <div class="resource-info">

                    <div class="pdf-icon">
                        TP
                    </div>

                    <div>
                        <strong>
                            Atelier (Application de gestion d’une société immobilière )  — Modélisation UML
                        </strong>

                        <small>
                            Cas d'utilisation, classes et scénarios
                        </small>
                    </div>

                </div>

                <a href="/docs/UML_gestion_immobilier.pdf"
                   class="btn btn-primary"
                   download>
                    Énoncé PDF
                </a>

            </div>


    

        </div>

    </div>

</section>


<!-- ================= MINI PROJET ================= -->

<section id="projets">

    <div class="container">

        <div class="project">

            <h3>
                 Mini-projet — Application Web
            </h3>

            <p>
                Réaliser une application Web en appliquant les différentes
                étapes étudiées dans le module : analyse du besoin,
                conception, modélisation UML et préparation du projet.
            </p>

            <a href="/docs/quickannonces.pdf"
               class="btn btn-primary"
               download>
                Télécharger l'énoncé PDF
            </a>

        </div>

    </div>

</section>


<!-- ================= FOOTER ================= -->

<footer>

    <p>
        Formation Développement Web FullStack — 2ème année
    </p>

    <p>
        Espace pédagogique stagiaires
    </p>

</footer>

<script>
    const menuToggle = document.querySelector('.menu-toggle');
    const navigation = document.querySelector('#main-navigation');

    menuToggle.addEventListener('click', () => {
        const isOpen = navigation.classList.toggle('is-open');
        menuToggle.setAttribute('aria-expanded', isOpen);
        menuToggle.textContent = isOpen ? 'Fermer' : 'Menu';
    });

    navigation.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            if (window.innerWidth <= 850) {
                navigation.classList.remove('is-open');
                menuToggle.setAttribute('aria-expanded', 'false');
                menuToggle.textContent = 'Menu';
            }
        });
    });
</script>

</body>
</html>
