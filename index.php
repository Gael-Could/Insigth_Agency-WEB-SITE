<!DOCTYPE html>
<html lang="fr" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perrin Gaël KIBITI - Expert Data & Web</title>
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@400,500,700&f[]=cabinet-grotesk@700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body id="top">

<header>
    <div class="container nav-wrapper">
        <a href="index.php" class="logo-container" style="text-decoration: none;">
            <svg width="34" height="34" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="Logo Insight Agency">
                <path d="M6 22V14" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/>
                <path d="M12 26V8" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/>
                <path d="M18 20V12" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/>
                <path d="M24 24V10" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/>
                <circle cx="6" cy="24" r="1.6" fill="currentColor"/>
                <circle cx="12" cy="6" r="1.6" fill="currentColor"/>
                <circle cx="18" cy="10" r="1.6" fill="currentColor"/>
                <circle cx="24" cy="8" r="1.6" fill="currentColor"/>
            </svg>

            <div style="display: flex; flex-direction: column; line-height: 1.05;">
                <span style="font-family: var(--font-display); font-size: var(--text-lg); font-weight: 800; color: var(--color-text);">
                    Insight Agency
                </span>
                <span style="font-size: var(--text-sm); font-weight: 600; color: var(--color-primary); letter-spacing: 0.04em;">
                    Data &amp; Web solutions
                </span>
            </div>
        </a>
        <nav class="nav-links">
            <a href="#services">Services</a>
            <a href="#portfolio">Projets</a>
            <a href="#about">À propos</a>
            <a href="#contact" class="btn btn-primary">Me contacter</a>
            <button id="theme-toggle" aria-label="Toggle Dark Mode">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
            </button>
        </nav>
    </div>
</header>

<main>
    <!-- Hero Section -->
    <section class="section hero container">
        <h1>Transformez vos données en <span style="color: var(--color-primary);">décisions claires et actionnables</span></h1>
        <p><em>À travers Insight Agency, je mets mon expertise en analyse de données, modélisation statistique et conception web sur mesure à la disposition de vos entreprises et ONG.</em></p>
        <a href="#services" class="btn btn-primary" style="margin-right: var(--space-4);">Découvrir mes services</a>
        <a href="#portfolio" style="font-weight: 500; text-decoration: underline;">Voir mes réalisations</a>
    </section>

    <!-- Services Section -->
    <section id="services" class="section container">
        <h2 style="font-size: var(--text-2xl); margin-bottom: var(--space-4); text-align: center;">Mes Services</h2>
        <p style="text-align: center; margin: 0 auto var(--space-12); max-width: 65ch; font-size: var(--text-lg);">Des solutions complètes pour transformer vos idées en résultats concrets, de la donnée à l'outil web.</p>
        
        <div class="grid-1" style="display: grid; gap: var(--space-16);">
            <!-- Service 1 : Analyse de Données -->
            <div class="service-block grid-2" style="align-items: center; background: var(--color-surface-2); padding: var(--space-8); border-radius: var(--radius-xl); border: 1px solid var(--color-border);">
                <div>
                    <div style="display: inline-flex; align-items: center; justify-content: center; width: 48px; height: 48px; border-radius: var(--radius-md); background: var(--color-surface-offset); color: var(--color-primary); margin-bottom: var(--space-4);">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                    </div>
                    <h3 style="font-size: var(--text-xl); margin-bottom: var(--space-4);">Analyse de Données & Tableaux de bord</h3>
                    <p style="margin-bottom: var(--space-6); color: var(--color-text);">Vos données contiennent les réponses à vos plus grands défis. Ne les laissez plus dormir dans des tableurs illisibles. A travers <em>Insight Agency</em>, je vous aide à extraire la valeur cachée de vos informations et à construire des tableaux de bord clairs, interactifs et percutants pour prendre les bonnes décisions au bon moment.</p>
                    <a href="#contact" class="btn btn-primary" onclick="document.getElementById('service').value='analyse'">Discuter de vos données</a>
                </div>
                <div class="slider-container" style="border-radius: var(--radius-lg); overflow: hidden; position: relative; aspect-ratio: 4/3; box-shadow: var(--shadow-md);">
                    <div class="slider-images" style="display: flex; width: 300%; animation: slide 10s infinite alternate ease-in-out;">
                        <img src="dashboard-1.jpg" alt="Exemple de tableau de bord 1" style="width: 33.33%; object-fit: cover;" onerror="this.src='https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80'">
                        <img src="dashboard-2.jpg" alt="Exemple de tableau de bord 2" style="width: 33.33%; object-fit: cover;" onerror="this.src='https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80'">
                        <img src="dashboard-3.jpg" alt="Exemple de tableau de bord 3" style="width: 33.33%; object-fit: cover;" onerror="this.src='https://images.unsplash.com/photo-1504868584819-f8e8b4b6d7e3?auto=format&fit=crop&w=800&q=80'">
                    </div>
                </div>
            </div>

            <!-- Service 2 : Études et enquêtes -->
            <div class="service-block grid-2" style="align-items: center; padding: var(--space-8);">
                <div class="slider-container" style="border-radius: var(--radius-lg); overflow: hidden; position: relative; aspect-ratio: 4/3; box-shadow: var(--shadow-md); order: 1;">
                    <div class="slider-images" style="display: flex; width: 200%; animation: slide-2 8s infinite alternate ease-in-out;">
                        <img src="etude-1.jpg" alt="Collecte de données terrain" style="width: 50%; object-fit: cover;" onerror="this.src='https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80'">
                        <img src="etude-2.jpg" alt="Analyse statistique" style="width: 50%; object-fit: cover;" onerror="this.src='https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80'">
                    </div>
                </div>
                <div style="order: 2;">
                    <div style="display: inline-flex; align-items: center; justify-content: center; width: 48px; height: 48px; border-radius: var(--radius-md); background: var(--color-surface-offset); color: var(--color-primary); margin-bottom: var(--space-4);">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                    </div>
                    <h3 style="font-size: var(--text-xl); margin-bottom: var(--space-4);">Études Statistiques & Enquêtes</h3>
                    <p style="margin-bottom: var(--space-6); color: var(--color-text);">Une intuition ne suffit pas pour investir ou lancer un projet. De la conception du questionnaire à l'analyse terrain, je pilote vos enquêtes de A à Z avec une rigueur statistique absolue. Obtenez des résultats fiables et une vision claire de votre marché ou de votre impact.</p>
                    <a href="#contact" class="btn btn-primary" onclick="document.getElementById('service').value='etudes'">Confier une étude</a>
                </div>
            </div>

            <!-- Service 3 : Sites Web -->
            <div class="service-block grid-2" style="align-items: center; background: var(--color-surface-2); padding: var(--space-8); border-radius: var(--radius-xl); border: 1px solid var(--color-border);">
                <div>
                    <div style="display: inline-flex; align-items: center; justify-content: center; width: 48px; height: 48px; border-radius: var(--radius-md); background: var(--color-surface-offset); color: var(--color-primary); margin-bottom: var(--space-4);">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                    </div>
                    <h3 style="font-size: var(--text-xl); margin-bottom: var(--space-4);">Création de Sites Web Sur Mesure</h3>
                    <p style="margin-bottom: var(--space-6); color: var(--color-text);">Votre présence en ligne est votre première vitrine. Fini les sites vitrines génériques qui ne vous ressemblent pas : je conçois pour vous des plateformes web sur mesure, esthétiques, sécurisées et connectées à vos bases de données pour automatiser votre gestion.</p>
                    <a href="#contact" class="btn btn-primary" onclick="document.getElementById('service').value='web'">Créer votre site web</a>
                </div>
                <div class="slider-container" style="border-radius: var(--radius-lg); overflow: hidden; position: relative; aspect-ratio: 4/3; box-shadow: var(--shadow-md);">
                    <div class="slider-images" style="display: flex; width: 200%; animation: slide-2 9s infinite alternate ease-in-out;">
                        <img src="web-1.jpg" alt="Conception de site web 1" style="width: 50%; object-fit: cover; object-position: top;" onerror="this.src='https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=800&q=80'">
                        <img src="web-2.jpg" alt="Plateforme PHP MySQL" style="width: 50%; object-fit: cover; object-position: top;" onerror="this.src='https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=800&q=80'">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="section container">
        <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: var(--space-8);">
            <h2 style="font-size: var(--text-2xl); margin-bottom: 0;">Mes Réalisations</h2>
            <a href="https://github.com/Gael-Could" target="_blank" rel="noopener noreferrer" style="color: var(--color-primary); font-weight: 600; display: flex; align-items: center; gap: var(--space-2);">
                Voir tout sur GitHub 
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
        
        <div class="grid-2">
            <!-- Projet Web : RIPAC -->
            <div class="card" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
                <div class="slider-container" style="position: relative; aspect-ratio: 16/9; overflow: hidden; background: var(--color-surface-offset);">
                    <div class="slider-images" style="display: flex; width: 300%; height: 100%; animation: slide 10s infinite alternate ease-in-out;">
                        <img src="images/ripac1.png" alt="Accueil RIPAC" style="width: 33.33%; height: 100%; object-fit: cover; object-position: top;" onerror="this.src='https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=800&q=80'">
                        <img src="images/ripac2.png" alt="Admin RIPAC" style="width: 33.33%; height: 100%; object-fit: cover; object-position: top;" onerror="this.src='https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=800&q=80'">
                        <img src="images/ripac3.png" alt="Soumission RIPAC" style="width: 33.33%; height: 100%; object-fit: cover; object-position: top;" onerror="this.src='https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&w=800&q=80'">
                    </div>
                </div>

                <div style="padding: var(--space-6); flex-grow: 1;">
                    <div style="display: flex; gap: var(--space-2); margin-bottom: var(--space-3);">
                        <span style="font-size: var(--text-xs); background: var(--color-surface); padding: 2px 8px; border-radius: var(--radius-full); border: 1px solid var(--color-border);">PHP / MySQL</span>
                        <span style="font-size: var(--text-xs); background: var(--color-surface); padding: 2px 8px; border-radius: var(--radius-full); border: 1px solid var(--color-border);">Développement Web</span>
                    </div>
                    <h3 style="margin-bottom: var(--space-2);">Plateforme Académique (RIPAC)</h3>
                    <p style="font-size: var(--text-sm); margin-bottom: var(--space-4);">Développement complet d'un site web dynamique incluant une base de données relationnelle, un système d'authentification sécurisé et un espace d'administration pour la gestion des publications.</p>
                    
                    <a href="http://ripac-philosophie.org/" target="_blank" rel="noopener noreferrer" class="btn" style="background: var(--color-surface); border: 1px solid var(--color-border); padding: var(--space-2) var(--space-4); border-radius: var(--radius-md); display: inline-flex; align-items: center; gap: var(--space-2);">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                        Visiter ce site
                    </a>
                </div>
            </div>

            <!-- Portfolio Data : GitHub -->
            <div class="card" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
                <div class="slider-container" style="position: relative; aspect-ratio: 16/9; overflow: hidden; background: var(--color-surface-offset); border-bottom: 1px solid var(--color-border);">
                    <div class="slider-images" style="display: flex; width: 300%; height: 100%; animation: slide 10s infinite alternate ease-in-out;">
                        <img src="graphique-var.jpg" alt="Graphique Modèle VAR" style="width: 33.33%; height: 100%; object-fit: cover;" onerror="this.src='https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80'">
                        <img src="graphique-time-series.jpg" alt="Série Temporelle" style="width: 33.33%; height: 100%; object-fit: cover;" onerror="this.src='https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?auto=format&fit=crop&w=800&q=80'">
                        <img src="dashboard-powerbi.jpg" alt="Dashboard Power BI" style="width: 33.33%; height: 100%; object-fit: cover;" onerror="this.src='https://images.unsplash.com/photo-1555949963-ff9fe0c870eb?auto=format&fit=crop&w=800&q=80'">
                    </div>
                </div>

                <div style="padding: var(--space-6); flex-grow: 1;">
                    <div style="display: flex; gap: var(--space-2); margin-bottom: var(--space-3); flex-wrap: wrap;">
                        <span style="font-size: var(--text-xs); background: var(--color-surface); padding: 2px 8px; border-radius: var(--radius-full); border: 1px solid var(--color-border);">Séries Temporelles</span>
                        <span style="font-size: var(--text-xs); background: var(--color-surface); padding: 2px 8px; border-radius: var(--radius-full); border: 1px solid var(--color-border);">Power BI</span>
                        <span style="font-size: var(--text-xs); background: var(--color-surface); padding: 2px 8px; border-radius: var(--radius-full); border: 1px solid var(--color-border);">R / Python</span>
                    </div>
                    <h3 style="margin-bottom: var(--space-2);">Collection d'Analyses de Données</h3>
                    <p style="font-size: var(--text-sm); margin-bottom: var(--space-4);">Un portfolio technique regroupant plusieurs études de cas : modélisation économétrique (Modèles VAR, ARIMA), analyse de performance et création de tableaux de bord interactifs.</p>
                    
                    <a href="https://github.com/Gael-Could" target="_blank" rel="noopener noreferrer" class="btn" style="background: var(--color-surface); border: 1px solid var(--color-border); padding: var(--space-2) var(--space-4); border-radius: var(--radius-md); display: inline-flex; align-items: center; gap: var(--space-2);">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.865 8.166 6.839 9.489.5.092.682-.217.682-.482 0-.237-.008-.866-.013-1.7-2.782.603-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.462-1.11-1.462-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.831.092-.646.35-1.086.636-1.336-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.578 9.578 0 0112 6.836c.85.004 1.705.114 2.504.336 1.909-1.294 2.747-1.025 2.747-1.025.546 1.379.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.578.688.48C19.138 20.161 22 16.418 22 12c0-5.523-4.477-10-10-10z"/></svg>
                        Explorer les études sur GitHub
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section container">
        <h2 style="font-size: var(--text-2xl); margin-bottom: var(--space-8);">À propos de mon expertise</h2>
        <div class="grid-2" style="align-items: start; gap: var(--space-12);">
            
            <div class="profile-photo-container" style="position: sticky; top: 120px;">
                <img src="images/perrin (1).jpg" alt="Perrin Gaël KIBITI PEMBE" class="profile-photo" onerror="this.style.display='none'; this.parentElement.innerHTML='<div style=\\'width:100%;height:100%;display:flex;align-items:center;justify-content:center;color:var(--color-text-muted);\\'>Photo de profil</div>';">
            </div>

            <div style="display: flex; flex-direction: column; gap: var(--space-8);">
                <div>
                    <p style="margin-bottom: var(--space-4); font-size: var(--text-lg); font-weight: 500; color: var(--color-text);">
                        Je suis Perrin Gaël, fondateur d'Insight Agency et Consultant indépendant spécialisé en ingénierie des données et développement web sur mesure.
                    </p>
                    <p style="margin-bottom: var(--space-4);">
                        Actuellement en Master 2 MQME (Méthodes Quantitatives et Modélisation pour l'Entreprise) à l'Université de Lille, je combine une solide formation en mathématiques statistiques appliquées avec une forte expertise technique.
                    </p>
                    <p>
                        Mon objectif est simple : aider les entreprises, ONG et institutions à transformer la complexité de leurs données en décisions stratégiques claires. Qu'il s'agisse de modéliser des séries temporelles, de concevoir des tableaux de bord interactifs ou de développer des applications web fiables pour automatiser vos processus métier, je conçois des solutions pérennes et adaptées à vos enjeux.
                    </p>
                </div>

                <div style="background: var(--color-surface-2); padding: var(--space-8); border-radius: var(--radius-lg); border: 1px solid var(--color-border); box-shadow: var(--shadow-sm);">
                    <h3 style="margin-bottom: var(--space-6); font-family: var(--font-display); font-size: var(--text-xl);">Outils & Méthodologies</h3>
                    
                    <ul style="display: flex; flex-direction: column; gap: var(--space-5); list-style: none;">
                        <li style="display: flex; align-items: flex-start; gap: var(--space-3);">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2" style="flex-shrink: 0; margin-top: 2px;"><path d="M18 20V10M12 20V4M6 20v-4" /><path d="M4 12l-2 2 2 2M20 12l2 2-2 2" /></svg>
                            <div>
                                <strong style="color: var(--color-text); display: block; margin-bottom: 2px;">Ingénierie de la Donnée</strong>
                                <span style="color: var(--color-text-muted);">Python, R, SAS, MySQL, Excel Avancé</span>
                            </div>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: var(--space-3);">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2" style="flex-shrink: 0; margin-top: 2px;"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                            <div>
                                <strong style="color: var(--color-text); display: block; margin-bottom: 2px;">Statistiques & Modélisation</strong>
                                <span style="color: var(--color-text-muted);">Séries temporelles, Modèles ARIMA, Modèles VAR, Économétrie</span>
                            </div>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: var(--space-3);">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2" style="flex-shrink: 0; margin-top: 2px;"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                            <div>
                                <strong style="color: var(--color-text); display: block; margin-bottom: 2px;">Dataviz & Web</strong>
                                <span style="color: var(--color-text-muted);">Power BI, Tableau, PHP, JavaScript, MySQL, Git</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section container">
        <h2 style="font-size: var(--text-2xl); margin-bottom: var(--space-6);">Discutons de votre projet</h2>
        <p style="margin-bottom: var(--space-8);">Besoin d'une analyse experte ou d'un outil sur mesure ? Remplissez ce formulaire et je vous répondrai sous 48h.</p>
        
        <!-- BLOC DE MESSAGE DE CONFIRMATION -->
        <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
        <div style="background-color: var(--color-primary); color: var(--color-text-inverse); padding: var(--space-4); border-radius: var(--radius-md); margin-bottom: var(--space-6); max-width: 600px; display: flex; align-items: center; justify-content: flex-start; gap: var(--space-3);">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink: 0;">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                <polyline points="22 4 12 14.01 9 11.01"></polyline>
            </svg>
            <span><strong>Merci !</strong> Votre message a bien été envoyé. Un e-mail de confirmation vous a été adressé.</span>
        </div>
        <?php endif; ?>
        
        <form action="contact.php" method="POST" style="max-width: 600px; background: var(--color-surface-2); padding: var(--space-8); border-radius: var(--radius-lg); border: 1px solid var(--color-border);">
            <div class="form-group">
                <label for="name">Nom complet</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="service">Service concerné</label>
                <select id="service" name="service" style="width:100%; padding:var(--space-3); border-radius:var(--radius-md); border:1px solid var(--color-border); background:var(--color-surface);">
                    <option value="analyse">Analyse de données</option>
                    <option value="etudes">Études Statistiques / Enquêtes</option>
                    <option value="web">Site Web Sur Mesure</option>
                    <option value="autre">Autre demande</option>
                </select>
            </div>
            <div class="form-group">
                <label for="message">Votre message / Besoin</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%;">Envoyer la demande</button>
        </form>
    </section>
</main>

<footer>
    <div class="container" style="display: grid; grid-template-columns: 1fr auto 1fr; align-items: center; gap: var(--space-6);">
        <div style="display: flex; align-items: center;">
            <p class="footer-copyright" style="margin: 0; text-align: left;">&copy; 2026 Insight Agency : Data &amp; Web solutions.<br>Tous droits réservés.</p>
        </div>

        <div class="footer-socials" style="display: flex; gap: var(--space-6); justify-content: center;">
            <a href="mailto:gpkibiti@gmail.com" aria-label="M'envoyer un email" title="Email">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                    <polyline points="22,6 12,13 2,6"></polyline>
                </svg>
            </a>
            <a href="https://wa.me/33602836501?text=Bonjour%20Perrin,%20je%20vous%20contacte%20depuis%20votre%20site%20web%20pour%20un%20projet." target="_blank" rel="noopener noreferrer" aria-label="Me contacter sur WhatsApp" title="WhatsApp">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                </svg>
            </a>
            <a href="https://www.linkedin.com/in/perrin-ga%C3%ABl-kibiti-pembe-76865b206/" target="_blank" rel="noopener noreferrer" aria-label="Voir mon profil LinkedIn" title="LinkedIn">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                    <rect x="2" y="9" width="4" height="12"></rect>
                    <circle cx="4" cy="4" r="2"></circle>
                </svg>
            </a>
        </div>

        <div style="display: flex; justify-content: flex-end;">
            <a href="#top" class="logo-container" style="text-decoration: none; display: inline-flex; align-items: center; gap: var(--space-3);">
                <svg width="34" height="34" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="Logo Insight Agency">
                    <path d="M6 22V14" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/>
                    <path d="M12 26V8" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/>
                    <path d="M18 20V12" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/>
                    <path d="M24 24V10" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/>
                    <circle cx="6" cy="24" r="1.6" fill="currentColor"/>
                    <circle cx="12" cy="6" r="1.6" fill="currentColor"/>
                    <circle cx="18" cy="10" r="1.6" fill="currentColor"/>
                    <circle cx="24" cy="8" r="1.6" fill="currentColor"/>
                </svg>

                <div style="display: flex; flex-direction: column; line-height: 1.05; text-align: left;">
                    <span style="font-family: var(--font-display); font-size: var(--text-lg); font-weight: 800; color: var(--color-text);">
                        Insight Agency
                    </span>
                    <span style="font-size: var(--text-sm); font-weight: 700; color: var(--color-primary); letter-spacing: 0.04em;">
                        Data &amp; Web solutions
                    </span>
                </div>
            </a>
        </div>
    </div>
</footer>

<script>
    const t=document.getElementById('theme-toggle'),r=document.documentElement;
    let d=matchMedia('(prefers-color-scheme:dark)').matches?'dark':'light';
    r.setAttribute('data-theme',d);
    t.addEventListener('click',()=>{
        d=d==='dark'?'light':'dark';
        r.setAttribute('data-theme',d);
        t.innerHTML=d==='dark'?'<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"/><path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/></svg>':'<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>';
    });
</script>
</body>
 <script>
// Ce script nettoie l'URL pour enlever "?status=success" sans recharger la page
if (window.history.replaceState) {
    const cleanUrl = window.location.protocol + "//" + window.location.host + window.location.pathname + window.location.hash;
    window.history.replaceState({path: cleanUrl}, "", cleanUrl);
}

// Optionnel : fait disparaître le message de succès tout seul après 5 secondes
setTimeout(function() {
    const successMsg = document.querySelector('.success-message'); // Remplacez '.success-message' par la classe de votre message si elle est différente
    if(successMsg) {
        successMsg.style.display = 'none';
    }
}, 5000);
</script>
</html>
