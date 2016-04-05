<?php
	function envoyer_mail($form)
	{
        //----------------------------------------------- 
		//DECLARE LES VARIABLES 
		//----------------------------------------------- 
        
        $destinataire = 'kenny.guiougou@gmail.com';
        
		$sujet = "[kennyguiougou.fr] Nouveau message de " . $form['name'];
		$email_expediteur = 'no-reply@kennyguiougou.net'; 
		$email_reply = 'no-reply@kennyguiougou.net'; 
		
		$headers ='From: "Kenny Guiougou FR"<no-reply@kennyguiougou.net>'."\n"; 
		$headers .='Reply-To:  no-reply@kennyguiougou.net'."\n"; 
		$headers .='Content-Type: text/html; charset="iso-8859-1"'."\n"; 
		$headers .='Content-Transfer-Encoding: 8bit' . "\n";

		ob_start();
		include 'mail-view.php';
		$message_mail = ob_get_clean();	

		if(mail($destinataire,$sujet,$message_mail,$headers)) 
		{ 
            return true;
		} 
		else 
		{ 
            return false;
		} 
	}

    function afficher_message($message)
    {
        if(!empty($message))
            echo '<div class="alert alert-' . $message['class'] . ' fade in" role="alert">
                    <a href="perso/#" class="close" data-dismiss="alert">&times;</a>
                    ' . $message['texte'] . '</div>';
    }

                
    // Si le formulaire est soumis
    if(isset($_POST['submit']))
    {  
        $form_ok = true;
        // Si erreur dans le formulaire
        if(!$form_ok)
        {
            // On affiche un message d'erreur
            $message['texte'] = "Une erreur est survenue lors du traitement du formulaire. Assurez-vous d\'avoir rempli correctement tout les champs.";
            $message['class'] = "danger";
        }
        else
        {
            $infos = array();
            $infos['name'] = $_POST['name'];
            $infos['phone'] = $_POST['phone'];
            $infos['email'] = $_POST['email'];
            $infos['message'] = $_POST['message'];
            $envoie_ok = envoyer_mail($infos);

            // Si il manque des champs
            if(!$envoie_ok)
            {
                // On affiche un message d'erreur    
                $message['texte'] = "Une erreur est survenue lors de l'envoi du mail. Veuillez réesayer dans quelques instants.";
                $message['class'] = "danger";
            }
            // Sinon tout est ok, on envoie le mail
            else
            {
                // On affiche un message de confirmation d'envoi
                $message['texte'] = "Merci ! Le message a été correctement envoyé.";
                $message['class'] = "success";
            }
        }
    }
    else
    {
        // On affiche un message d'info
    }

$projets = simplexml_load_file('portfolio.xml');
$skillbars = simplexml_load_file('skillbar.xml');
?>
<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
		<meta name="keywords" content="kenny, guiougou, portfolio, site, web, developpeur, programmeur, webdesigneur, webmaster">
		<link rel="icon" type="image/png" href="perso/images/favicon.png" />
        
        <!-- Insertion de la bibliotheque jQuery -->
        <script src="perso/js/jquery-2.1.4.min.js"></script>
        
        <!-- Google Analytics -->
        <script src="perso/js/google-analytics.js"></script>
                
         <!-- FullPage -->
        <link rel="stylesheet" type="text/css" href="perso/fullPage/jquery.fullPage.css" />
        <script src="perso/fullPage/jquery.easings.min.js"></script>
        <script type="text/javascript" src="perso/fullPage/jquery.fullPage.min.js"></script>
        
        <!-- Original Hover effects -->
        <link href="perso/OriginalHoverEffects/style_common.css" rel="stylesheet">
        <link href="perso/OriginalHoverEffects/style10.css" rel="stylesheet">
        
        <!-- Animated skillbars -->
        <link rel="stylesheet" href="perso/css/skillbar.css" type="text/css" />
        
        <!-- InView -->
        <script src="perso/js/jquery.inview.min.js"></script>        

        <!-- Animated headline -->
        <link rel="stylesheet" href="perso/animated-headline/css/style.css">
        <link rel="stylesheet" href="perso/css/headline.css" type="text/css" />
        <script src="perso/animated-headline/js/modernizr.js"></script>
        <script src="perso/animated-headline/js/main.js"></script>
        
        <!-- Slimbox -->
        <script type="text/javascript" src="perso/slimbox/js/slimbox2.js"></script>
        <link rel="stylesheet" href="perso/slimbox/css/slimbox2.css" type="text/css" media="screen" />
		        
        <!-- Bootstrap -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link href="perso/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="perso/bootstrap/css/font-awesome.min.css" rel="stylesheet">
        <script src="perso/bootstrap/js/bootstrap.min.js"></script>
                
        <script type="text/javascript">
            $(document).ready(function() {
                $('#fullpage').fullpage({
                    anchors: ['accueil', 'competences', 'portfolio'],
                    menu: '#menu',
                    css3: true,
                    scrollingSpeed: 1200,
                    responsiveWidth: 991
                    
                });
                         
                /*
                $("#submit").click(function() {
                    $(this).toggleClass('disabled');
                    $(this).text("Envoi en cours");
                    
                });
                */
                           
                // InView Skills
                $('#section1').bind('inview', function(event, isInView, visiblePartX, visiblePartY) {

                  if (isInView)
                  {                        // Affichage des skillbars
                        $('.skillbar').each(function(i){
                            $(this).find('.skillbar-bar').animate({
                                width:$(this).attr('data-percent')
                            },2500);
                        });
                     // l'élément est visible
                    if (visiblePartY == 'top') 
                    {
                      // top part of element is visible
                    } else if (visiblePartY == 'bottom')
                    {
                      // bottom part of element is visible
                    } else
                    {

                    }
                  } 

                  else 
                  {
                     // l'élément n'est pas visible
                  }
                });

                
                
                // InView Portfolio
               $('#section2').bind('inview', function(event, isInView, visiblePartX, visiblePartY)
                {
                    // Portfolio
                    var delai = 350;
                    var t = delai;
                    $('.fadeInBlock').each( function(i){
                        var $this = $(this);

                        setTimeout(function() {
                           $this.animate({'opacity':'1'},500);
                        }, t);

                        t += delai;
                    });

               });
            
                
            });
        </script>

        <!-- Feuille de style perso -->
        <link rel="stylesheet" href="perso/css/main.css" type="text/css" />
        
		<title>Portfolio de Kenny GUIOUGOU</title>
	</head>
	<body>
        
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="navbar">
            <div class="container-fluid">
                <div class="navbar-header pull-right">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mobile-nav" >
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <button class="btn btn-flat navbar-btn pull-right" data-toggle="modal" data-target="#contact"><i class="fa fa-envelope fa-lg"></i> Contact</button>
                </div>
                <div id="mobile-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav pull-left" id="menu">
                        <li data-menuanchor="accueil"><a href="perso/#accueil" >Accueil</a></li>
                        <li data-menuanchor="competences"><a href="perso/#competences" >Compétences</a></li>
                        <li data-menuanchor="portfolio"><a href="perso/#portfolio" >Portfolio</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Conteneur principal -->
        <div class="container-fluid">
            
            <?php require 'modal-windows.php'; ?>
            <?php 
                if(!empty($message))
                    afficher_message($message);
            ?>
            
            <!-- Pages -->
            <div id="fullpage">
                
                <!-- Accueil -->
                <div class="row background section" id="section0">
                    <div class="col-xs-12 col-sm-10 col-sm-push-1 col-md-8 col-md-push-2 col-lg-6 col-lg-push-3 text-center" id="accueil-col">     
                        <section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cd-intro">
                            <h1 id="main_title" class="cd-headline letters type">
                                <span>Kenny GUIOUGOU <br>Développeur </span> 
                                <span class="cd-words-wrapper waiting">
                                    <b class="is-visible">Web&nbsp;</b>
                                    <b>C#&nbsp;</b>
                                    <b>C++&nbsp;</b>
                                    <b>Java&nbsp;</b>
                                </span>
                            </h1>
                            <a href="perso/cv.pdf" target="_blank" class="btn btn-flat btn-lg" id="cv-download"><i class="fa fa-download   fa-lg"></i> Télécharger mon CV</a>
                        </section>
                    </div>
                </div>
                
                <!-- Skills -->
                <div class="row section" id="section1">
                    <div class="row">
                        <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">
                            <h1 class="section-title">Mes compétences</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12 col-lg-push-3 col-md-push-2 col-sm-push-1">
                            <?php foreach ($skillbars as $skillbar): ?>
                            <div class="skillbar clearfix " data-percent="<?php echo $skillbar->percent; ?>%">
                                <div class="skillbar-title" style="background: <?php echo $skillbar->colorTitle; ?>;"><span><?php echo $skillbar->title; ?></span></div>
                                <div class="skillbar-bar" style="background: <?php echo $skillbar->colorBar; ?>;"></div>
                                <div class="skill-bar-percent"><?php echo $skillbar->percent; ?>%</div>
                            </div>                     
                            <?php endforeach; ?>
                        </div>    
                    </div>
                    
                </div>
                                
                <!-- Portfolio -->
                <div class="row section" id="section2">
                    <div class="row">
                        <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">
                            <h1 class="section-title">Mon Portfolio</h1>
                        </div>
                    </div>
                    <div class="row">
                        <?php $count_portfolio = 1; ?>
                        <?php foreach ($projets as $projet): ?>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 fadeInBlock">
                            <a href="perso/#" class="info" data-toggle="modal" data-target="#portfolio-info-<?php echo $count_portfolio; ?>">
                            <div class="view view-tenth">
                                <img src="perso/images/<?php echo $projet->image; ?>" />
                                <div class="mask">
                                    <h2><?php echo $projet->titre; ?></h2>
                                    <p>
                                        <?php echo $projet->description; ?>
                                        <br>
                                        (Cliquez pour plus de détails)
                                    </p>
                                </div>
                            </div>
                            </a>
                        </div>
                        <?php $count_portfolio++; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
         	<script src="perso/js/fittext.js"></script>
	<script type="text/javascript">
		$("#main_title").fitText();
	</script>
    </body>    
</html>