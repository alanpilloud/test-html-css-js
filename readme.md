# Test HTML/CSS, JS et PHP
                                                          
Ce document décrit les différentes étapes à réaliser pour votre test de candidature.

Le but est de réaliser une liste d'éléments à partir d'une source de données fournie.
Chaque élément de la liste possède un bouton qui permet d'afficher une modal.

## Pre-requis pour ce test

 - Environnement PHP 7
 - Google Chrome, version à jour

## CSS

Écrivez la CSS de la modal sans éditer le code html.

Le résultat doit se rapprocher au plus de l'exemple fourni dans /images/modal.png
sans pour autant prendre les mesures exactes de chaque padding ou margin.

> A noter la particularité suivante: la modal est affichée grâce à la classe `modal--visible`.
  Cette classe est déjà appliquée dans le code HTML, la modal est donc affichée.
  Dans le chapitre "javascript" cette classe sera supprimée pour pouvoir afficher/cacher la modal.

![](https://github.com/alanpilloud/test-html-css-php-js/blob/master/images/modal.png)

## PHP

Recupérez les données contenues dans le fichier data.json pour les afficher en liste.

Les styles CSS pour la liste et ces éléments sont déjà crées.
Afin de ne pas être dérangé par la modal, supprimez sa classe `modal--visible`.

Un élément de liste se compose comme suit:

```
<div class="list__item">
    <div class="list__content">
        <div class="list__title">Nom d'application</div>
        <div class="list__created">Date de création</div>
        <div class="list__version">Numéro de version</div>
    </div>
    <div class="list__controls">
        <a class="btn" href="#">supprimer</a>
    </div>
</div>
```

![](https://github.com/alanpilloud/test-html-css-php-js/blob/master/images/listing.png)

## JavaScript

Vous avez maintenant le droit de modifier le code HTML de la modal et des list__item.

> Veuillez ne pas utiliser de librairies externes.

A réaliser:

 - Afficher la modal au clic du bouton "supprimer"
> Pour ce faire, supprimez la classe `modal--visible` du HTML, puis ajoutez-la au clic de l'un des boutons "supprimer".

 - Afficher le titre de l'application dans le header de la modal
 - Cacher la modal au clic du bouton "annuler"
 - Bonus: supprimer l'application de la liste au clic du bouton "confirmer"

## Livraion

Lorsque votre test est terminé, zippez-le, puis renommez le fichier comme suit :

test-[nom]-[prénom].zip

Envoyez le fichier à alan@bwap.ch

