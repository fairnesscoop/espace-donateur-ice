# Espace Donateur·ice - Amnesty International France

Ce projet est le site de l'espace donateur·ice d'Amnesty International France, développé avec WordPress en version Bedrock et utilisant DDEV pour la gestion des environnements de développement local.

## Prérequis

Avant de commencer, assurez-vous d'avoir les outils suivants installés sur votre machine :

- [Docker](https://www.docker.com/get-started) : utilisé pour gérer les conteneurs de développement.
- [DDEV](https://ddev.readthedocs.io/en/stable/#installation) : un outil de développement local qui simplifie la configuration des environnements de développement basés sur Docker.
- [Composer](https://getcomposer.org/download/) : utilisé pour gérer les dépendances PHP.
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
composer install
```

### 3. Installer les dépendances front-end

Installez les dépendances front-end avec npm ou Yarn :

```bash
npm install
# ou
yarn install
```



### 4. Lancer l'environnement de développement

Pour démarrer l'environnement de développement local avec DDEV :

```bash
ddev start
```

Une fois l'environnement démarré, DDEV fournira une URL locale pour accéder au site.

### 5. Importer la base de données (optionnel)

Si vous avez une base de données à importer (par exemple, un fichier SQL), vous pouvez l'importer avec la commande suivante :

```bash
ddev import-db --src=path_to_your_database.sql
```

### 6. Ajouter des variables d'environnement

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

## Déploiement

Les étapes de déploiement sont spécifiques à l'infrastructure utilisée pour l'hébergement (par exemple, un serveur distant, un service cloud, etc.). Contactez l'équipe technique d'Amnesty International France pour obtenir les détails du déploiement.

## Contribuer

Merci de soumettre vos Pull Requests pour tout correctif ou amélioration. Assurez-vous de suivre les directives de contribution d'Amnesty International France avant de soumettre votre travail.

## Licence

Ce projet est sous licence AGPL. Consultez le fichier `LICENSE` pour plus d'informations.
