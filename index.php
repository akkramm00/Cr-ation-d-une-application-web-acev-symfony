<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <h1>Création d'un projet symfony</h1>
   <h2>Création avec Composer</h2>
    <p>
      L'installation via Compser se fera avec quelques lignes de commande.
      Nous allons d'abord télécharger la structure basique de Symfony, appelée "skeleton", nous rendre dans le dossier du projet et installeer la dépendcanceWebapp qui nous permettra d'avoir toutes les ressources nécessaires pour développer une applicatio,n web complète, comme l'envoi d'e-mail, la gestion des formulaires ou dela base de données.
      L'interet de cette méthode est qu'elle ne nécessite aucune installation particulière en plus de celle de Composer. Elle est rapide , mais elle n'offre aucun outilsupplémentaire.

      Dans un terminal , on saisi les lignes suivant:
      
 <!-- Début de code -->
      composer create-project symfony/skeleton:"^5.4" mon projet
      cd mon_repertoire_de_projet
      composer require webapp
 <!-- fin  de code -->

      La dépendance "webapp" est un pack de composants à installer pour disposer de tous les outils nécessaires au développemnt d'une application web.0
      il exeiste d'autres packs officiels permettant d'etendre Symfony sur plein de sujets(ORM, debug, tests, etc). On peut retrouver ces packs sur le site de composer
    </p>


    <h2>Création d'une application Symfony avec Symfony CLI</h2>

  <p>
    La création d'un projet Symfony via Symfony CLI se fait en deux temps . Tou d'abord, il faudra installer Symfony CLI sur notre machine. Ensuite , grace à ce programme, nous pourrons créer nos applications Web.
    Symfony CLI (Command Line Interface) est un outil de développement qui nous aide à construire, exécuter et gérer nos applications Symfony directement depuis notre terminal. il est open source, fonctionne avec MacOs, Windows et Linux. Comme nous l'installons globalement à notre machine, nous ne devons l'installer qu'une seule fois sur notre système. cet outil nous simplifiera énormement le développement par la suite , donc il est fortement recommandé de l'installer.
  </p>

  <h2>Les démarches de création d'un projet avec CLI</h2>
    CLI = (Commande Line Interface)
<p>
    Pour télécharger Symfony , il faut se rendre sur le site officiel de symfony: 
    https:/symfony.com  puis ==> DOWNLOAD
  le téléchargement se fait selon notre système d'exploitation, dans le cas de "WINDOWS" /
   scoop install symfony-cli
   Binaries
  Download binaries from GiHub 386 

  * Après avoir téléchargé le client "symfony" en tant que dossier copressé.
  * on copie ce dossier compressé
  * Dans le disque Local (c), on va dans "programes",
  * dans "programmes" on va créer un dossier on cliquant sur "nouveau dossier", puis on le nomme "symfony"
  * On colle le dossier compressé dans le dossier "symfony"
  * L'étape suivante consiste à extraire (Décompresser)
 le contenu du dossier "symfony" 

   ** pour extrairenle dossier , le système  utilise le logiciel "WinRAR ZIP" si c'est une nouvelle installation, sinon il faut telecharger un logiciel qui s'occupera de ca.

  *La decompression donne naissance à Trois dossier :
                ¤ LICENSE
                ¤ README.md 
                ¤ Symfony
  </p>

<h2>Cogigurations des variavles de l'environnement</h2>
    <p>

   * On commence par copier le chemin du dossier "C:\Program Files\symfony" affiché dans la barre de recherche.
    *Dans la barre de recherche 'windows' on tappe "env", pour aller "modifier les variables de l'nvironnement du système"

      => on clique sur les variables de l'environnement
      => on selectinne "path"
      => on clique sur "nouveau"
      => on colle le "chemin de symfony"
      => on appuie sur "ok" pour ajouter le chemin.

      * On va maintenant relancer l'invite de commande 
      * Sur le terminal , on saisi "symfony" pour découvrir que le système  détécte "symfony"
      * Si on saisi "symfony version" , le système renvoie le version de symfony qui a été téléchargé
      
      
  
  
</p>
    
  </body>
</html>