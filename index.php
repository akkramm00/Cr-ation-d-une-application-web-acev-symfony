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
    La création d'un projet Symfony via Symfony CLI se fait en deux temps . Tou d'abord, il faudra installer Symfony CLI sur notre machine. Ensuite , grace à ce programme, nous pourrons créer noàos applications Web.
    Symfony CLI (Command Line Interface) est uin outil de développemnet qui nous aide à construire, exécuter et gérer nos applications Symfony directement depuis notre terminal. il est open source, fonctionne avec MacOs, Windows et Linux. Comme nous l'installons globalement à notre machine, nous ne devons l'installer qu'une seule fois sur notre système. cet outil nous simplifiera énormement le développement par la suite , donc il est fortement recommandé de l'installer.
  </p>
  </body>
</html>