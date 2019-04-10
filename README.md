# Ecommerce TP

## Rappel

### Récupérer un projet Symfony existant
```bash
cd projects/
git clone git@github.com:USERNAME/REPOSITORY.git my-project
cd my-project
# Installe les dépendances
composer install
```

### Branche Github

```bash
git branch prenom
git checkout prenom
git push origin prenom
```
```bash
git checkout master 
git pull
```

## Bases de données et Doctrine

### Installation de doctrine
```bash
composer require symfony/orm-pack
```

### Configuration de la base de données
Créer un fichier .env.local et y metrre les informations de connexion à la base de données.
```bash
DATABASE_URL="mysql://root:@127.0.0.1:3306/shop"
```
Puis créer la base de données
```bash
php bin/console doctrine:database:create
```

### Créer une entité
```bash
php bin/console make:entity

Class name of the entity to create or update (e.g. FierceElephant):
> Product

New property name (press <return> to stop adding fields):
> name

Field type (enter ? to see all types) [string]:
> string

Field length [255]:
> 255

Can this field be null in the database (nullable) (yes/no) [no]:
> no

Add another property? Enter the property name (or press <return> to stop adding fields):
> description

Field type (enter ? to see all types) [string]:
> text

Can this field be null in the database (nullable) (yes/no) [no]:
> no

Add another property? Enter the property name (or press <return> to stop adding fields):
>
(On appuie sur Entrée)
```