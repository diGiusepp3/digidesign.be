<?php
/** @noinspection PhpUndefinedVariableInspection */

# Set page title
$pageTitle = "Digitaliseer vandaag, stroomlijn morgen";

# Set meta keywords (array)
$pageKeywords = ["DigiDesign", "Digitaliseer", "webdesign", "Hosting", "Ontwikkeling", "PHP"];

# Set meta description
$pageDescriptions = ["Webdesign, hosting en ontwikkeling op maat voor uw bedrijf. Ontwerpen op maat, hosting en ontwikkeling van websites, web-apps en apps. Neem contact op via Whatsapp of e-mail voor meer informatie."];

# Set active page
$activePage = "Home";

#include header
include('assets/includes/header.php');

# Require databaseverbinding
require ("assets/database/db.php");

echo "
<div class=\"container \">
    <div class='intro '> 
        <div class='title'>
            <h1 class='animatedWord'>
                <span>D</span><span>i</span><span>g</span><span>i</span><span>t</span><span>a</span><span>l</span><span>i</span><span>s</span><span>e</span><span>e</span><span>r</span><br>                
                <span>v</span><span>a</span><span>n</span><span>d</span><span>a</span><span>a</span><span>g</span>
            </h1>
            <h1 class='animatedWord'>    
                <span>s</span><span>t</span><span>r</span><span>o</span><span>o</span><span>m</span><span>l</span><span>i</span><span>j</span><span>n</span> <br>
                <span>m</span><span>o</span><span>r</span><span>g</span><span>e</span><span>n</span>
            </h1>
            <script src='assets/js/animateWords.js'></script>
        </div>
        <div class='video'>    
            <video src='assets/video/titleVideo.mp4' autoplay muted loop></video>
        </div>   
 
        <div class='underTitle'>
            <div class='mobile'>
                <h2 class='delayedText'>Digidesign is een bedrijf dat gespecialiseerd is in digitale marketingdiensten, waaronder webdesign, SEO, social media marketing en meer.</h2>
            </div>
            <div class='desktop'>
                <h2 class='delayedText'>Welkom bij Digidesign, dé partner voor al jouw digitale uitdagingen! Onze missie is om jouw idee te helpen groeien en te innoveren door middel van digitale oplossingen op maat. Of het nu gaat om het ontwikkelen van een nieuwe website, het verbeteren van je online vindbaarheid, het opzetten van een succesvolle e-commerce strategie of het ontwerpen van een digitale marketingcampagne, wij staan voor je klaar. </h2>
            </div>       
        </div><!-- // undertitle -->
    </div> <!-- // Intro -->
    
 
    <div class='content'>
        <div class='wieWeZijn hidden'>
            <div class='left'>
                <h3>Wie we zijn</h3>
                <hr>
                <h4>Hosting, ontwikkeling en webdesign</h4>
                <p>
                    Digidesign is een bedrijf dat zich richt op de ontwikkeling, hosting en het ontwerp van websites, software en apps. 
                    Wij zijn een team van professionals die toegewijd zijn aan het creëren van effectieve en gebruiksvriendelijke 
                    digitale producten die aan de wensen van onze klanten voldoen.
                </p>
            </div><!-- Left -->
            <div class='right'>
            <div class=\"image-container\">
                <img src='assets/images/mockups/home1.png' alt='responsive design'>
            </div>
            </div><!-- Right -->
        </div> <!-- // Wie we zijn -->
        <script src='assets/js/hideOutsideViewport.js'></script>
    
        <div class='watWeDoen hidden'>
            <div class='image hidden'>
                <img src='assets/gif/appIcons.gif' alt='een lijst van app icoontjes.'>
            </div>
            <div class='text'>
                <h3>Wat we doen</h3>
                <hr>
                <h4>Een complete aanpak voor al uw digitale behoeften</h4>
                <p>
                    Bij Digidesign geloven we in het bieden van een complete aanpak 
                    voor al onze klanten. Van het ontwerpen en bouwen van websites 
                    en apps tot het zorgen voor online opslag en verbinding, wij bieden 
                    alles wat nodig is om uw digitale visie tot leven te brengen.
                </p>
            </div>    
        </div> <!-- // wat we doen -->
        
    
        
        <div class='onzeVisie hidden'>
            <h3>Onze visie</h3>
            <hr>
            <h4>Maak kennis met Digidesign!</h4>
            <p>
                Onze missie is om jou te helpen groeien en te innoveren door middel van op maat gemaakte digitale oplossingen die aan jouw specifieke behoeften voldoen.
                We zijn niet zomaar een standaard digitaal bureau - we zijn er om jou te helpen bij elke stap van jouw digitale reis. Of je nu een nieuwe website nodig hebt, een app wilt laten ontwikkelen, of jouw online aanwezigheid wilt verbeteren, wij zijn er om je te helpen.
                We zijn toegewijd aan het leveren van hoogwaardige producten en diensten en bouwen graag duurzame en langdurige relaties met onze klanten. We streven er altijd naar om onze klanten te verrassen en hun verwachtingen te overtreffen.
                Dus als je op zoek bent naar een iemand die echt begrijpt wat je nodig hebt, neem dan gerust contact met ons op. We kijken er naar uit om jou te leren kennen!
            </p>    
        </div><!-- // Onze visie -->
      
        ";


// Pageview SQL
$pageviewSQL = "SELECT MAX(id) as pageviews_total FROM pageviews";
$result = mysqli_query($con, $pageviewSQL);
$row = mysqli_fetch_assoc($result);
$pageviews_total = $row['pageviews_total'];

// Subscriber SQL
$subscriberSQL = "SELECT COUNT(id) as abonnee_total FROM subscribers";
$result = mysqli_query($con, $subscriberSQL);
$row = mysqli_fetch_assoc($result);
$abonnee_total = $row['abonnee_total'];


$websiteCount = "SELECT COUNT(*) as websites_total FROM websites";
$result = mysqli_query($con, $websiteCount);
$row = mysqli_fetch_assoc($result);
$websites_total = $row ['websites_total'];



        echo"
        <div class='onzeImpact hidden'>
            <h3>Onze impact</h3>
            <hr>
            <div class='counter'>
                <div class='bezoekers'>
                    <img src='assets/icons/svg/counter/userWhite.svg' alt='Gebruikers icoon'>
                    <h4>$pageviews_total &nbsp;Bezoekers</h4>
                </div> <!-- // Pagina bezoekers --> 
                  
                <div class='subscribers'>
                    <img src='assets/icons/svg/counter/newsletterWhite.svg' alt='subscriber icoon'>
                    <h4> $abonnee_total &nbsp;Abonnee's</h4>
                </div> <!-- // subscribers -->  
                    
                <div class='websites'>
                    <img src='assets/icons/svg/counter/wwwWhite.svg' alt='gebruiker toevoegen icoon'>
                    <h4>$websites_total &nbsp;Websites</h4>
                </div> <!-- // websites -->      
            </div> <!-- Counter -->
        </div> <!-- // Onze impact -->
    </div><!-- // content -->
</div><!-- // container -->
 ";

include ('assets/includes/footer.php');
