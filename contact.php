<?php
include('header.php');
?>
<link rel="stylesheet" href="contact.css">
<title>Me contacter</title>
<section class="odd_section">
    <div class="contact_intro">
        <h1>Vous voulez me contacter? C'est simple, voici mes coordonnées.</h1>
        <div class="mail">
               <script type="text/JavaScript">
                    var part1 = "kevinroig";
                    var part2 = Math.pow(2,6);
                    var part3 = String.fromCharCode(part2);
                    var part4 = "hotmail.com"
                    var part5 = part1 + String.fromCharCode(part2) + part4;
                    document.write("<a href=" + "mai" + "lto" + ":" + part5 + ">" + part1 + part3 + part4 + "</a>");
                </script>
        </div>
        <div class="tel">
        <a href="tel:+33680649505">06 80 64 95 05</a>
        </div>
        <div class="linkedin">
        <a href="https://www.linkedin.com/in/kevin-roig/" target="_blank">
                    <img src="images/logo_linkedin_orange.png" alt="Le logo de LinkedIn">
                </a>
        </div>
    </div>

</section>
<?php
include('footer.php');
?>