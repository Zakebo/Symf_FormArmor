Projet FormArmor sous Symfony
========================

## Petit tuto pour mettre le projet sur son pc


### Copier les fichiers

1. Copier les fichiers dans le dossier www de wamp, et lancer wamp.

### Créer la base de donner

Lancer CMD et se situer dans le dossier du projet et lancer la commande : 

```
php bin/console doctrine:database:create
```


### Mettre à jour la base

Pour avoir les tables dans la base, faire la commande : 

```
php bin/console doctrine:schema:update --force
```

### Remplir la base de donnée 
Copier le script insertionFormArmor.sql et le mettre dans la table formarmor sous phpMyAdmin 

