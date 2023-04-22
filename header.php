<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
    <link rel="icon" href="images/favicon.svg">
</head>

</html>

<body>
    <nav id="nav_bar">
        <div id="main_container">
            <div id="link_container">
                <div id="left_link_container">
                    <a href="index.php">
                        <div id="logo">
                            <img src="images/KR_face5.png" alt="Une photo retouchée de Kevin Roig" width="450px">
                        </div>
                        <span>KEVIN ROIG</span>
                    </a>
                </div>
                <div id="right_link_container">
                    <span class="dropdown">
                        <a href="{{ path('kinesiologie') }}" class="dropdown-menu">ME DECOUVRIR</a>
                    </span>
                    <span>
                        <a href="projects.php">PROJETS</a>
                    </span>

                    <span>
                        <a href="{{ path('contact') }}">CONTACT</a>
                    </span>
                </div>
                <div id="menuToggle">
                    <input type="checkbox" id="burger" />
                    <div>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <ul id="menu">
                        <li class="dropdown-mobile" id="dropdown-mobile">
                            <a href="{{ path('kinesiologie') }}" class="dropdown-menu-mobile" id="dropdown-menu-mobile">ME DECOUVRIR</a>
                        </li>
                        <a href="projects.php">
                            <li>PROJETS</li>
                        </a>
                        <a href="{{ path('contact') }}">
                            <li>CONTACT</li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</body>