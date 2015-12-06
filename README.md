EApplication HMIN302
=======

A Symfony project created on October 22, 2015, 4:40 pm.

# UM2 Music Blog

### Présentation
Dans le cadre du master AIGLE à l'Université des Sciences de Montpellier il nous est demandé de réaliser un blog en utilisant le framework php Symfony. Nous avons décidé de réaliser ce travail sous la forme d'un blog de musiques. UM2 Music Blog est donc réalisé avec le framework php Symfony 2 et le framework css utilisé est Foundation 5.2.1.

Les membres du projet sont :
- VANDERCHMITT Bastien
- MONIN Romain
> bastien.vanderchmitt@etu.umontpellier.fr
>
> romain.monin@etu.umontpellier.fr

### Installation
Une fois Symfony installé sur son PC suivre la démarche suivante :

1. Importer le projet
2. Se rendre dans le dossier `www/wamp/Symfony` lancer une console et taper les commandes suivantes
3. `composer install`
4. `php app/console doctrine:database:create`
5. `php app/console doctrine:schema:update --dump-sql`
6. `php app/console doctrine:schema:update --force`
7. `php app/console doctrine:fixtures:load`

### Usage
Les différents posts sont enregistrés dans une base de donnée Doctrine2, l'ORM par défaut de Symfony2, comportant une table avec les champs :
- Auteur
- Date
- Titre
- Contenu

Les musiques sont présentées sous formes de vidéos youtube intégrées au blog via l'attribut "contenu" de la base de données. L'utilisateur du blog à la possibilité de supprimer, ajouter, ou modifier un billet si il le désire. La page d'acceuil présente les dix derniers billets ajoutés au blog triés par date d'apparition du plus récent au plus vieux.

Pour ajouter une vidéo il suffit de copier/coller le lien d'intégration fourni par youtube dans le textarea "contenu" de la page 'ajouter'. L'utilisateur peut également écrire du texte s'il le désire.

En mode développement des articles de test sont chargés automatiquement grâce au bundle doctrine fixtures par le biais de la commande `load` lancée lors de l'installation.

Pour accéder aux fonctionnalités d'ajout, de modification et de suppression il faut se connecter. L'utilisateur par défaut est le suivant :
- Login : admin
- Mot de passe : admin

Ces champs sont déjà pré-remplis dans un soucis d'efficacité de démonstration.
