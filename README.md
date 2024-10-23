# Espace Donateur·ice - Amnesty International France

Ce projet est le site de l'espace donateur·ice d'Amnesty International France, développé avec WordPress en version Bedrock et utilisant DDEV pour la gestion des environnements de développement local.

## Prérequis

Avant de commencer, assurez-vous d'avoir les outils suivants installés sur votre machine :

- [Docker](https://www.docker.com/get-started) : utilisé pour gérer les conteneurs de développement.
- [DDEV](https://ddev.readthedocs.io/en/stable/#installation) : un outil de développement local qui simplifie la configuration des environnements de développement basés sur Docker (inclus `composer`)

- [Node.js](https://nodejs.org/en/download/) et [npm](https://www.npmjs.com/get-npm) (ou [Yarn](https://classic.yarnpkg.com/lang/en/docs/install/)) : utilisés pour la gestion des packages front-end et des scripts.

## Installation

### 1. Cloner le projet

Clonez le dépôt du projet sur votre machine locale :

```bash
git clone https://github.com/username/amnesty-espace-donateur.git
cd amnesty-espace-donateur
```

### 2. Installer les dépendances PHP

Installez les dépendances PHP via Composer :

```bash
ddev composer install
```



### 3. Lancer l'environnement de développement

Pour démarrer l'environnement de développement local avec DDEV :

```bash
ddev start
```

Une fois l'environnement démarré, DDEV fournira une URL locale pour accéder au site.

### 4. Importer la base de données (optionnel)

Si vous avez une base de données à importer (par exemple, un fichier SQL), vous pouvez l'importer avec la commande suivante :

```bash
ddev import-db --src=path_to_your_database.sql
```

### 5. Ajouter des variables d'environnement

Le fichier `.env` est utilisé pour gérer les variables d'environnement. Vous devrez peut-être créer un fichier `.env` localement à partir de l'exemple fourni :

```bash
cp .env.example .env
```

Ensuite, configurez les informations de base, comme la connexion à la base de données et les clés de sécurité. Par exemple :

```env
DB_NAME='db'
DB_USER='db'
DB_PASSWORD='db'
DB_HOST='db'


WP_ENV='development'
WP_HOME="${DDEV_PRIMARY_URL}"
WP_SITEURL="${DDEV_PRIMARY_URL}/wp"
```

### 7. Installer WordPress

Pour terminer l'installation de WordPress en local, utilisez l'URL générée par DDEV (par exemple, `https://espace-donateur-ice.ddev.site:`) pour accéder à l'interface d'installation de WordPress et configurer le site.

## Commandes utiles

- **Démarrer DDEV** : `ddev start`
- **Arrêter DDEV** : `ddev stop`
- **Accéder au conteneur web** : `ddev ssh`
- **Afficher l'URL du projet** : `ddev describe`
- **Importer une base de données** : `ddev import-db --src=path_to_your_database.sql`
- **Exporter la base de données** : `ddev export-db --file=path_to_your_output.sql`
- **Exécuter Composer dans le conteneur** : `ddev composer install`
- **Exécuter npm dans le conteneur** : `ddev npm install`

## Structure du projet

Le projet utilise la structure Bedrock, avec les dossiers principaux suivants :

- `web/` : racine du site WordPress.
  - `web/app/` : répertoire des thèmes et plugins.
  - `web/wp/` : fichiers WordPress core.
- `config/` : fichiers de configuration de l'environnement.
- `.env` : fichier de configuration des variables d'environnement.

## Worfklow de développement

### Contexte

- **DDEV** est utilisé pour les environnements locaux de chaque développeur·se.
- Le projet utilise **Bedrock** pour structurer WordPress et gérer les dépendances.
- Le déploiement se fait sur **Clever Cloud** pour les environnements de **recette** et de **production**.
- Les développeurs·ses synchronisent leurs bases de données locales avec l’environnement de **recette** sur Clever Cloud pour éviter les conflits.
- Le contenu est géré principalement en **recette**, mais peut être testé en local.
- **Git** est utilisé pour la gestion de version, avec des déploiements via Git push sur Clever Cloud.
- La **synchronisation des bases de données** est un aspect essentiel du processus pour assurer la cohérence entre les environnements.


### 1. Développement local avec DDEV

- Les développeurs·ses créent des **branches Git** pour chaque nouvelle fonctionnalité ou correction.
- Utilisation de **DDEV** pour gérer les environnements locaux, **WP-CLI** pour les commandes WordPress, et **Composer** pour les dépendances.

---

### 2. Création et gestion des pages

- Les **pages sont créées en local** pour le développement de fonctionnalités (templates, blocs).
- Le **contenu éditorial** est géré en **recette** sur Clever Cloud.

---

### 3. Gestion des synchronisations de base de données

#### a. Base de données de référence (Recette sur Clever Cloud)

L’environnement de **recette** sur Clever Cloud est la **source de vérité**. Chaque développeur·se doit synchroniser sa base de données locale avec celle de la recette.

#### b. Méthode de synchronisation

##### 1. Synchronisation depuis Clever Cloud vers les environnements locaux

1. **Exporter la base de données de recette** via Clever Cloud :
   ```bash
   mysqldump -u user -p -h recette-db.clever-cloud.com db_name > recette.sql
   ```
2. **Importer la base dans DDEV** :
   ```bash
   ddev wp db import recette.sql
   ```
3. **Remplacer les URLs pour l’environnement local** :
   ```bash
   ddev wp search-replace 'https://recette.example.com' 'http://projet.ddev.site'
   ```

##### 2. Automatiser la synchronisation avec un script

Exemple de script pour récupérer la base de Clever Cloud et l’importer dans DDEV :
```bash
#!/bin/bash

# Récupérer la base de données depuis Clever Cloud
scp user@recette-server:/chemin/vers/recette.sql .

# Importer la base de données dans DDEV
ddev wp db import recette.sql

# Remplacer les URLs de recette par les URLs locales
ddev wp search-replace 'https://recette.example.com' 'http://projet.ddev.site'

echo "Base de données synchronisée avec succès."
```



### 4. Déploiement sur Clever Cloud

Clever Cloud facilite le déploiement en intégrant **Git push** pour la livraison continue.

#### a. Configuration initiale de Clever Cloud

1. **Créer une application** WordPress Bedrock sur Clever Cloud.
2. **Configurer les variables d’environnement** dans Clever Cloud :
   - `DB_NAME`, `DB_USER`, `DB_PASSWORD`, `DB_HOST` pour la base de données.
   - `WP_ENV=production` pour définir l'environnement.
   - `WP_HOME` et `WP_SITEURL` pour les URLs de recette ou production.

#### b. Déploiement via Git

1. **Pusher les changements** vers Clever Cloud :
   ```bash
   git push clevercloud main
   ```

2. **Pipeline CI/CD** pour exécuter des tests avant déploiement.



### 5. Synchronisation inverse (local -> recette)

Si un·e développeur·se doit pousser des changements locaux vers la base de données de recette, il·elle peut exporter sa base locale et l'importer sur Clever Cloud.

#### Étapes

1. **Exporter la base locale** :
   ```bash
   ddev wp db export local.sql
   ```
2. **Importer dans l’environnement de recette** sur Clever Cloud :
   ```bash
   wp db import local.sql
   wp search-replace 'http://projet.ddev.site' 'https://recette.example.com'
   ```

**⚠️ Attention** : Cette opération doit être réalisée avec précaution pour éviter les conflits de données.



### 6. Gestion des fichiers médias

Les fichiers **médias** peuvent être synchronisés entre l'environnement local et Clever Cloud en utilisant des outils comme **WP Offload Media** ou via des scripts `rsync`.



### 7. Snapshots et sauvegardes

Avec DDEV, les développeurs·ses peuvent créer des **snapshots locaux** pour garder une trace des modifications.

- **Créer un snapshot** :
  ```bash
  ddev snapshot create
  ```
- **Restaurer un snapshot** :
  ```bash
  ddev snapshot restore [nom-du-snapshot]
  ```

Clever Cloud permet également de configurer des **sauvegardes automatiques**.



### Conclusion

Ce workflow intègre la gestion des bases de données locales avec des synchronisations régulières depuis l’environnement de **recette** hébergé sur **Clever Cloud**, tout en assurant des déploiements fluides via **Git**. La synchronisation des bases de données est automatisée pour éviter les conflits, et Clever Cloud gère la mise en production avec des variables d’environnement adaptées.




## Contribuer

Merci de soumettre vos Pull Requests pour tout correctif ou amélioration. Assurez-vous de suivre les directives de contribution d'Amnesty International France avant de soumettre votre travail.

## Licence

Ce projet est sous licence AGPL. Consultez le fichier `LICENSE` pour plus d'informations.
