O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:86:"/Applications/XAMPP/xamppfiles/htdocs/symfony/LADM/ladm/assets/styles/css/about-us.css";s:10:"publicPath";s:64:"/assets/styles/css/about-us-a9fc3082914cc7e22eb1d21298f15280.css";s:23:"publicPathWithoutDigest";s:31:"/assets/styles/css/about-us.css";s:15:"publicExtension";s:3:"css";s:7:"content";s:4037:"/* Styles généraux pour les liens désactivés, rendant le texte noir sans décoration */
.disable-link {
    text-decoration: none;
    color: #4f4f4f;
}



/* Style pour les sections de contenu, avec marge, arrière-plan, animation */
.section {
    scroll-margin-top: 40px;
    animation-name: fadeIn;
    animation-duration: 3s;
    animation-iteration-count: 1;
    animation-fill-mode: forwards;
    opacity: 0;
    margin: 20px;
    background: #fff;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

/* Conteneurs flexibles pour le layout */
.flex-container {
    display: flex;
    flex-wrap: wrap;
}
.flex-item {
    flex: 1;
    justify-content: center;
    display: flex;
    min-width: 300px;
}

/* Les délais d'animation  */
.card-1 {
    animation-delay: 0s;
    animation-name: fadeIn;
    animation-iteration-count: 1;
    animation-fill-mode: forwards;

}
.card-2 {
    animation-delay: 1s;
    animation-name: fadeIn;
    animation-iteration-count: 1;
    animation-fill-mode: forwards;

}
.card-3 {
    animation-delay: 2s;
    animation-name: fadeIn;
    animation-iteration-count: 1;
    animation-fill-mode: forwards;

}

/* Style pour la bannière en haut de la page, avec une image de fond, */
.banner {
    width: 100%;
    background-image: url("../img/african-child-661c518eb46a8fb948943383dec154b7.jpg");
    background-size: cover;
    background-position: center;
    position: relative;
    padding: 150px 0;
    text-align: center;
}

.banner::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.5);
}

.banner h1 {
    position: relative;
    text-align: center;
    font-size: 5em;
    color: white;
    z-index: 1;
    display: inline-block;
    padding: 40px 80px;
    margin: auto;
}

/* Configuration du conteneur des cartes  */
.card-container {
    display: flex;
    justify-content: space-between;
    margin: 0 150px;
    gap: 50px;
    position: relative;
    top: -50px;
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }

    to {
        opacity: 1;
    }
}
.card-about-us {
    background-color: white;
    text-align: left;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    min-height: 300px;
    flex: 1;
    position: relative;

    opacity: 0;
}


.card-about-us:hover {
    background-color: #006CA8;
    color: white;
    transform: translateY(-5px) scale(1.05);
}

.text-width {
    max-width: 90%;
}
.disable-link h2,
.disable-link p,
.icon {
    transition: color 0.3s;
}

.card-about-us h2 {
    padding-bottom: 32px;
}
.about-us-title {
    margin-bottom: 40px;
}

.card-about-us:hover h2,
.card-about-us:hover p,
.card-about-us:hover .icon {
    color: white;
}

.icon {
    position: absolute;
    bottom: 20px;
    right: 20px;
    font-size: 2em;
    transition: color 0.3s, transform 0.3s;
}

.icon a {
    color: inherit;
    text-decoration: none;
}

.card-about-us:hover .icon a {
    color: orange;
}

.image-about {
    max-width: 90%;
    border-radius: 8px;
    height: auto;
}

.section {
    scroll-margin-top: 40px;
}

@media(max-width: 1024px) {
    .banner h1 {
        font-size: 1.5em;
    }
}

@media(max-width: 768px) {
    .about-us-title {
        margin-bottom: 12px;
        margin-top: 12px;
    }
    .card-about-us{
        display:none
    }
    .image-about {
        max-width: 100%;
        border-radius: 8px;
        height: auto;
        margin-bottom: 20px;
    }
    
    .text-width {
        max-width: 100%;
    }
    .section {
        padding:16px;
        margin: 0px;
 
    }
    .flex-item {
        flex: 1;
        justify-content: center;
        display: contents;
     }
    .card-about-us h2 {
        padding-bottom: 0px;
    }
    .card-container {
        flex-direction: column;
        margin: 0;
        top: 0;
    }

    .card-about-us {
        margin-bottom: 20px;
    }
}";s:6:"digest";s:32:"a9fc3082914cc7e22eb1d21298f15280";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:91:"/Applications/XAMPP/xamppfiles/htdocs/symfony/LADM/ladm/assets/styles/img/african-child.jpg";s:10:"publicPath";s:69:"/assets/styles/img/african-child-661c518eb46a8fb948943383dec154b7.jpg";s:23:"publicPathWithoutDigest";s:36:"/assets/styles/img/african-child.jpg";s:15:"publicExtension";s:3:"jpg";s:7:"content";N;s:6:"digest";s:32:"661c518eb46a8fb948943383dec154b7";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:28:"styles/img/african-child.jpg";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:23:"styles/css/about-us.css";}