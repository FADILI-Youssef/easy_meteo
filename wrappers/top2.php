<!DOCUMENT html>

<html>

    <head>
        <meta charset="utf-8" />
        <title>Easy éolienne</title>
        <link rel="stylesheet" href="style/top2.css" />
        <link rel="stylesheet" href="style/search2.css" />
        <link rel="stylesheet" href="style/periodic_display3.css" />
        <link rel="stylesheet" href="style/general_display.css" />
        <link rel="stylesheet" href="style/bottom.css" />
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" />
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script type="text/javascript" src="style/smooth_scroll.js" ></script>
        <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
        <script type="text/javascript">stLight.options({publisher: "5565ece2-98e5-4321-b0df-75db9aa059e2", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
        <script type="text/javascript" src="tools/globals.js"></script>
        <script type="text/javascript" src="search/ajax/ajax.js"></script>
        <script type="text/javascript" src="style/js_style.js"></script>
        <script type="text/javascript" src="style/animate_carousel.js"></script>
        <script type="text/javascript" src="search/scripts_js/months.js"></script>
        <script type="text/javascript" src="search/ajax/ajax_res.js"></script>
        <script type="text/javascript" src="search/ajax/ajax_station.js"></script>
        <script type="text/javascript" src="search/scripts_js/distance.js"></script>
        <script type="text/javascript" src="search/ajax/ajax_diametre.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    </head>
    
    <body onload="initialiser_mp();">
        <div id="carte" style="display: none;"></div>
        <header id="header">
            
            <nav>
                <a class="scrollTo" href="#header" id="logo"><img src="images/logo.png" width="60" height="60" /></a>
                <table>
                    <td>
                        <a class="scrollTo" href="#header" id="acceuil" onclick="setBeingVisited_a()">
                            <li>accueil</li>
                        </a>
                    </td>
                    
                    <td>
                        <a class="scrollTo" href="#formulaire_recherche" onclick="setBeingVisited_1()" id="etape1">
                            <li>étape <span class="number_style">1</span> : <span class="explication_etape">Critères de recherche</span></li>
                        </a>
                    </td>
                    
                    <td>
                        <a class="scrollTo" onclick="setBeingVisited_2()" id="etape2">
                            <li>étape <span class="number_style">2</span> : <span class="explication_etape">Résultats de la recherche</span></li>
                        </a>
                    </td>
                        
                    <td>
                        <a class="scrollTo" onclick="setBeingVisited_3()" id="etape3">
                            <li>étape <span class="number_style">3</span> : <span class="explication_etape">conseils personnalisés</span></li>
                        </a>
                    </td>
                    
                    <td>
                        <a class="scrollTo" onclick="setBeingVisited_4()" id="etape4">
                            <li>étape <span class="number_style">4</span> : <span class="explication_etape">partager sur les réseaux sociaux</span></li>
                        </a>
                    </td>
                </table>
            </nav>
            
            <section id="presentation">
                <div id="background"></div>
                <div id="presentation_text">
                    <h2>Une analyse pertinente, à la hauteur de nos clients.</h2>
                    <h1>Bienvenue sur <span id="website_name">easy éolienne</span></h1>
                    <p>Le FLRS Group, avec son nouveau produit, vous permet de choisir les lieux les plus propices en France pour placer des éoliennes. Easy Éolienne est doté d'un système de calcul de distances basé sur Google Maps et d'une exploitation intelligente de données météorologiques pour vous garantir des résultats de confiance.</p>
                    
                </div>
            </section>
            
            <section id="app_presentation"></section>
           
        </header>