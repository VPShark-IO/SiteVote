SiteVote
========
Mini projet Réseaux PHP - Site de vote
======================================

Présentation
************
Le principe du site est de permettre a un utilisateur de voter pour sa matière "préférée" dans les deux UE différents (UE31 et UE32).
L'utilisateur pourra également consulter les résultats sur un page dédiée (résultats stockés dans une base de données gérée via MySQL).

Utilisation
***********
Sur la page d'accueil, l'utilisateur peut choisir de voter ou de consulter le résultat des votes. Si l'utilisateur choisit de voter, il est redirigé vers la première page de vote pour le premier UE. Lors du premier vote, un cookie est enregistré et l'utilisateur et redirigé sur une deuxième page pour le second UE. Lors de l'enregitrement du deuxième vote, un second cookie est enregistré. La table est mise a jour pour enregistrer les votes des utilisateurs.

Si l'utilisateur choisit de consulter les votes, il est redirigé vers une page ou les résultats sont affichés.

Une session est également créée une fois que l'utilisateur a voté: on stocke l'adresse ip de l'utilisateur dans la table et en format papier, il ne peut pas re-voter. Quand il arrive sur la page d'accueil il est automatiquement redirigé vers la page de consultation des résultats.

Architecture
************
