<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SneakerSneak V2</title>
    <link href="index.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,600;0,800;1,400;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
  <div class="bandana">
    <p>LIVRAISON GRATUITE POUR LES MEMBRES</p>
    <p>RETOURS ET ÉCHANGES GRATUITS PENDANT 60 JOURS</p>
    <p>ACHETER MAINTENANT. PAYER AVEC KLARNA.</p>
</div>

    <div class="firstsection">
        <div class="navbar">
            <div class="navbar-title">
                <h1>SS</h1>
            </div>
            <div class="navbar-side">
                <h2>Nouveautés</h2>
                <a href="catalogue.html"><h2>Catalogue</h2></a>
            </div>
            <div class="navbar-cart">
                <img src="sneakerbox.png" class="cart">
                <div class="vl"></div>
                <img src="carte-didentite (1).png" class="login">
            </div>         
        </div>

        <h1 class="slogan">Une nouvelle manière de réflechir à vos sneakers</h1>
        <h2 class="ad">Commencez dés maintenant afin d'avoir une avance sur tout le monde, soyez discrets, soyez Sneaky</h2>

        <div class="searchbar" data-aos="fade-left" data-aos-offset="200" data-aos-duration="900">
            <div class="searchbar-flex">
                <div class="searchbar-brand">
                    <h2>Marque</h2>
                    <input type="search" class="searchinput" placeholder="Nike ?" size="30px">
                </div>
                <div class="vv"></div>
                <div class="searchbar-model">
                    <h2>Modèle</h2>
                    <input type="search" class="searchinput" placeholder="Air Force 1 ?" size=30px>
                </div>
                <div class="vv"></div>
                <div class="size">
                    <h2>Taille</h2>
                    <select name="size" id="size-select" class="sizesort">
                        <option value="">8</option>
                        <option value="size1">9</option>
                        <option value="size2">10</option>
                        <option value="size3">11</option>
                        <option value="size4">12</option>
                        <option value="size5">13</option>
                    </select>
                </div>
                <div class="vv"></div>
                <div class="searchbar-sort">
                    <h2>Triez par</h2>
                    <select name="size" id="size-select" class="sort">
                        <option value="datesortie">Date de Sortie</option>
                        <option value="genre">Genre</option>
                        <option value="prix">Prix</option>
                        <option value="marque">Marque</option>
                        <option value="popularite">Popularité</option>
                    </select>
                </div>
                <button class="searchbargo" href="catalogue.html">Rechercher</button>
            </div>
        </div>
        <div>
          <h1 class="slogansearchbar">Reservez vos chaussures pour les prochaines raffles sans vous prendre la tête</h1>
        </div>
    </div>

    <div class="cards">
        <h1 class="slogancard">Nos nouveautés pour vous</h1>
        </div>
    </div>

    <div class="cards" data-aos="fade-left" data-aos-duration="1600">
        <div class="card" id="muslin">
            <img src="image 4.png" alt="Jordan 3 Muslin">
            <h1><?php  ?></h1>
            <p class="price">$200</p>
            <p class="def">Jordan Brand continue d’expérimenter sur le design de Tinker Hatfield, prochaine étape sur la liste, la Air Jordan 3 SE « Muslin ».</p>
            <button class="button">Ajouter au panier</button>
        </div>
        
        <div class="card" id="yeezy">
            <img src="Yeezy500B.webp" alt="Yeezy 500 Blush">
            <h1>Yeezy 500 Blush</h1>
            <p class="price">$200</p>
            <p class="def">Jordan Brand continue d’expérimenter sur le design de Tinker Hatfield, prochaine étape sur la liste, la Air Jordan 3 SE « Muslin ».</p>
            <button class="button">Ajouter au panier</button>
        </div>

        <div class="card" id="jordan">
            <img src="image 4.png" alt="Yeezy 500 Blush">
            <h1>Air Jordan 3 SE Muslin</h1>
            <p class="price">$210</p>
            <p class="def">Jordan Brand continue d’expérimenter sur le design de Tinker Hatfield, prochaine étape sur la liste, la Air Jordan 3 SE « Muslin ».</p>
            <button class="button">Ajouter au panier</button>
        </div>

        <div class="card">
            <img src="image 4.png" alt="Nike Dunk Low Panda">
            <h1>Air Jordan 3 SE Muslin</h1>
            <p class="price">$100</p>
            <p class="def">Jordan Brand continue d’expérimenter sur le design de Tinker Hatfield, prochaine étape sur la liste, la Air Jordan 3 SE « Muslin ».</p>
            <button class="button">Ajouter au panier</button>
        </div>
    </div>

    <footer class="footer">
        <div class="footer__addr">
          <h1 class="footer__logo">SneakerSneak</h1>
              
          <h2>Contact</h2>
          
          <address>
            5534 Somewhere In. The World 22193-10212<br>
                
            <a class="footer__btn" href="gleidabadjeck@gmail.com">Email Us</a>
          </address>
        </div>
        
        <ul class="footer__nav">
          <li class="nav__item">
            <h2 class="nav__title">Media</h2>
      
            <ul class="nav__ul">
              <li>
                <a href="#">Online</a>
              </li>
      
              <li>
                <a href="#">Print</a>
              </li>
                  
              <li>
                <a href="#">Alternative Ads</a>
              </li>
            </ul>
          </li>
          
          <li class="nav__item nav__item--extra">
            <h2 class="nav__title">Technology</h2>
            
            <ul class="nav__ul nav__ul--extra">
              <li>
                <a href="#">Hardware Design</a>
              </li>
              
              <li>
                <a href="#">Software Design</a>
              </li>
              
              <li>
                <a href="#">Digital Signage</a>
              </li>
              
              <li>
                <a href="#">Automation</a>
              </li>
              
              <li>
                <a href="#">Artificial Intelligence</a>
              </li>
              
              <li>
                <a href="#">IoT</a>
              </li>
            </ul>
          </li>
          
          <li class="nav__item">
            <h2 class="nav__title">Legal</h2>
            
            <ul class="nav__ul">
              <li>
                <a href="#">Privacy Policy</a>
              </li>
              
              <li>
                <a href="#">Terms of Use</a>
              </li>
              
              <li>
                <a href="#">Sitemap</a>
              </li>
            </ul>
          </li>
        </ul>
        
        <div class="legal">
          <p>&copy; 2019 Something. All rights reserved.</p>
          
          <div class="legal__links">
            <span>Made with <span class="heart">♥</span> remotely from Anywhere</span>
          </div>
        </div>
      </footer>

      <script>
          AOS.init({
      startEvent: 'load',
    });
    window.addEventListener('load', function() {
  AOS.refresh();
});
      </script>
</body>
</html>