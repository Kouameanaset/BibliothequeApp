# Bibliothèque

Application web Laravel de gestion d'une bibliothèque : livres, auteurs et catégories. L'interface est **bilingue (français et anglais)**.

## Technologies

- PHP 8.3+, Laravel 13, Eloquent ORM
- Vues Blade avec composants réutilisables
- Vite pour les ressources front
- SQLite par défaut (configurable dans `.env`)

## Fonctionnalités

- CRUD complet pour les **livres**, les **auteurs** et les **catégories** (liste, détail, création, modification, suppression), avec messages de confirmation.
- Relations : un livre appartient à un auteur et à une catégorie ; un auteur et une catégorie ont plusieurs livres.
- Validation des formulaires avec des **Form Requests** (création et modification pour chaque entité).
- **Changement de langue** français / anglais : middleware `SetLocale`, langue conservée en session, fichiers de traduction dans `lang/fr` et `lang/en`.
- Composants Blade réutilisables (mise en page, champs, boutons, erreurs).
- **Factories et seeders** pour générer des données de test.

## Modèle de données

| Table | Colonnes principales |
| --- | --- |
| `authors` | last_name, first_name, biography, birth_date |
| `categories` | name |
| `books` | title, description, publication_year, author_id, category_id |

## Installation

Prérequis : PHP 8.3+, Composer, Node.js et npm.

```bash
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate --seed
npm install
npm run dev
php artisan serve
```

Le site est ensuite disponible sur `http://localhost:8000`. Utilisez `/lang/fr` ou `/lang/en` pour changer de langue.

## Limites connues

- La liste des livres n'est pas paginée et n'a pas de recherche.
- Pas d'authentification.
- Les tests automatisés se limitent aux tests d'exemple de Laravel.

## Projet scolaire

Projet réalisé dans le cadre du programme Techniques de l'informatique, Cégep Saint-Jean-sur-Richelieu.
