<h1>SiteVote</h1>

<h2>Mini projet Réseaux PHP - Site de vote</h2>
======================================

<h3>Présentation</h3>
************
Le principe du site est de permettre a un utilisateur de voter pour sa matière "préférée" dans les deux UE différents (UE31 et UE32).
L'utilisateur pourra également consulter les résultats sur un page dédiée (résultats stockés dans une base de données gérée via MySQL).

<h3>Utilisation</h3>
***********
Sur la page d'accueil, l'utilisateur peut choisir de voter ou de consulter le résultat des votes. Si l'utilisateur choisit de voter, il est redirigé vers la première page de vote pour le premier UE. Lors du premier vote, un cookie est enregistré et l'utilisateur et redirigé sur une deuxième page pour le second UE. Lors de l'enregitrement du deuxième vote, un second cookie est enregistré. La table est mise a jour pour enregistrer les votes des utilisateurs.

Si l'utilisateur choisit de consulter les votes, il est redirigé vers une page ou les résultats sont affichés.

Une session est également créée une fois que l'utilisateur a voté: on stocke l'adresse ip de l'utilisateur dans la table et en format papier, il ne peut pas re-voter. Quand il arrive sur la page d'accueil il est automatiquement redirigé vers la page de consultation des résultats.

<h3>Fonctionnement</h3>
**************
Le page d'accueil est l'index.
L'utilisateur peut choisir de voter ou de consulter les résultats.
- Si l'utilisateur choisit de voter, il est redirigé vers la premiere page de vote: ue31 - informatique
  Apres soumission de ce premier vote, le vote est enregistré dans une variable et l'utilisateur est redirigé vers la seconde page de vote: ue32 - général.
  Une fois les deux votes enregistrés, on affiche de page résumant les votes et demandant a l'utilisateur de confirmer les votes ou de revenir en arrière pour les modifier.
- Si l'utilisateur choisit de consulter les résultats, il est redirigé vers la page consulter.php
  Deux tableaux affichent ensuite les résultats en fonction de l'UE.

<h3>Architecture</h3>
************
* Index: Sur cette page, l'utilisateur peut choisir de voter ou de consulter les résultats.
* UE31: premiere page de vote, UE informatique + module complémentaire.
* UE32: seconde page de vote, UE32 généraliste + module complémentaire.
* Récapitulatif: page affichant les résultats des votes suivant les UE et demandant a l'utilisateur de confirmer son vote ou de revenir en arrière.

Optionnel: lors de l'arrivée sur le site, une connexion est demandée.
