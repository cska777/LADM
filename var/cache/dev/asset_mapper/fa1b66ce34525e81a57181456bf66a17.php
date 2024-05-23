O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:85:"/Applications/XAMPP/xamppfiles/htdocs/symfony/LADM/ladm/assets/styles/css/contact.css";s:10:"publicPath";s:63:"/assets/styles/css/contact-ff24728ff57ee2262cd3d6bf17827a49.css";s:23:"publicPathWithoutDigest";s:30:"/assets/styles/css/contact.css";s:15:"publicExtension";s:3:"css";s:7:"content";s:2650:":root {
    --footer-1-color: #78a3b1;
    --footer-2-color: #032B43 ;
    --bouton-don: #FFC436;
    --bouton-autre: #F88600;
    --text-1: #ffff;
    --text-2: #A1A1A1;
}

.bodyDivContact{
   
    margin: 0 !important;
    padding: 0 !important;
    display: flex;
    justify-content: space-between;
}

#contact-banner{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 60vh;
    background: url("../../images/imgContact-c16d6fe407a7a641a9d800e70da8e77a.avif");
    background-size: cover;
    background-position: center;

    text-align: center;
    color: var(--text-1)
}



.contact{
   /* width: 100%; */
    box-sizing: border-box;
}
.contactBody input[type="text"],
.contactBody input[type="number"],
.contactBody input[type="email"],
.contactBody select
 {
    width: 400px; /*Définir la largeur des champs à 100%
    padding: 10px; Ajouter un espace de remplissage
    margin-bottom: 20px; /* Ajouter un espacement entre les champs */
    box-sizing: border-box; /* Inclure la taille de la bordure et du padding dans la largeur */
    border: 2px solid var(--footer-1-color); /* Ajouter une bordure */
    border-radius: 8px; /* Ajouter un rayon de bordure */
    height: 45px; /* Augmenter la hauteur des champs */
}

.contactBody textarea{
    height: 80px;
    width: 100%; 
    padding: 10px; 
    margin-bottom: 20px;
    box-sizing: border-box;
    border: 2px solid var(--footer-1-color);
    border-radius: 8px; 
}

.submit-button button[type="submit"] {
    background-color: var(--bouton-autre);
    color: #fff; 
    border: none; 
    padding: 10px 20px; 
    border-radius: 5px; 
    cursor: pointer; 
    margin-bottom: 30px;
}
.switchFormContact{
    width: 80%;
}
.switchFormContact p, .switchFormContact p{
    font-size: 12px;
    margin-top: 3%;
}

.switchFormContact input:focus, .switchFormContact input:focus, .mesCoordonneesBody textarea:focus{
    border: 3px solid #1D3E56;
    outline: none;
} 




.contact{
    width: 50%;
    padding-bottom: 30px;
    padding-top: 30px;
    box-sizing: border-box;
    display: flex;
    justify-content: center;
    flex-direction: column;

}

.maCarte{
    width: 50%;
    padding-bottom: 30px;
    padding-top: 30px;
    background-color: #032B43;
    box-sizing: border-box;
    display: flex;
    justify-content: center;
    align-items: center;
}
.custom-img{
    width: 400px; 
    max-width: 80%; 
}

@media screen and (max-width: 992px) {
    .bodyDivContact{

        flex-direction: column;
        justify-content: center;
    }
    .contact, .maCarte {
        width: 100%;
    }
}










































";s:6:"digest";s:32:"ff24728ff57ee2262cd3d6bf17827a49";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:85:"/Applications/XAMPP/xamppfiles/htdocs/symfony/LADM/ladm/assets/images/imgContact.avif";s:10:"publicPath";s:63:"/assets/images/imgContact-c16d6fe407a7a641a9d800e70da8e77a.avif";s:23:"publicPathWithoutDigest";s:30:"/assets/images/imgContact.avif";s:15:"publicExtension";s:4:"avif";s:7:"content";N;s:6:"digest";s:32:"c16d6fe407a7a641a9d800e70da8e77a";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:22:"images/imgContact.avif";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:22:"styles/css/contact.css";}