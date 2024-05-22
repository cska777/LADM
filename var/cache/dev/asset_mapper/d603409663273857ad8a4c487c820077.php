O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:57:"/Users/dvpt/Desktop/ong2/assets/styles/css/actualites.css";s:10:"publicPath";s:66:"/assets/styles/css/actualites-d4626cbab66a7a3004b373d0483f1e74.css";s:23:"publicPathWithoutDigest";s:33:"/assets/styles/css/actualites.css";s:15:"publicExtension";s:3:"css";s:7:"content";s:2323:":root {
    --footer-1-color: #78a3b1;
    --footer-2-color: #032B43;
    --bouton-don: #FFC436;
    --bouton-autre: #F88600;
    --text-1: #ffff;
    --text-2: #A1A1A1;
}

#actualites-banner {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 60vh;
    background: url("../../images/actualites-6ee6a911c5cdfa71c3e6295f52f1b300.avif");
    background-size: cover;
    background-position: center;
    text-align: center;
    color: var(--text-1)
}

.actualitesContainer {
    display: flex;
    justify-content: center;
}

#actualitesCard {
    box-sizing: content-box;
    display: flex;
    flex-direction: row;
    width: 36em;
    height: 20em;
    margin-bottom: 4%;
    margin-right: 2%;
    border-radius: 15px;
    background-color: #ebeaea;
}

#actualites-card-img {
    width: 50%;
    height: 100%;
    border-radius: 15px 0 0 15px;
}

#actualites-card-body {
    display: flex;
    justify-content: space-evenly;
    flex-direction: column;
    align-items: center;
    width: 50%;
    height: 100%;
    /* box-sizing: border-box; */
    overflow: hidden;
    text-overflow: ellipsis;

}

.desc {
    width: 250px !important;
    overflow: hidden !important;
    text-overflow: ellipsis !important;
    white-space: nowrap !important;
}

#actualites-card-body h4,
#actualites-card-body p,
#actualites-card-body a {
    max-width: 100%;
    max-height: 100%;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.actualites-card-img{
    height:12.5em;
    width: 12.5em;
}

@media screen and (max-width: 992px) {
    #actualitesCard {
        box-sizing: content-box;
        display: flex;
        flex-direction: column;
        width: 15.5em;


    }

    #actualites-card-img {
        width: 100%;
        height: 50%;
        border-radius: 15px 15px 0 0;


    }

    #actualites-card-body {
        display: flex;
        justify-content: space-evenly;
        flex-direction: column;
        align-items: center;
        width: 100%;
        height: 50%;
    }
    .desc {
        width: 10em !important;
    }
}

@media only screen and (max-width: 350px) {
    #actualitesCard {
        width: 20em;
        /* Ajuster la largeur maximale pour s'adapter aux petits écrans */
    }

    #text-card-actualites {
        width: 10em;

    }
}";s:6:"digest";s:32:"d4626cbab66a7a3004b373d0483f1e74";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:54:"/Users/dvpt/Desktop/ong2/assets/images/actualites.avif";s:10:"publicPath";s:63:"/assets/images/actualites-6ee6a911c5cdfa71c3e6295f52f1b300.avif";s:23:"publicPathWithoutDigest";s:30:"/assets/images/actualites.avif";s:15:"publicExtension";s:4:"avif";s:7:"content";N;s:6:"digest";s:32:"6ee6a911c5cdfa71c3e6295f52f1b300";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:22:"images/actualites.avif";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:25:"styles/css/actualites.css";}