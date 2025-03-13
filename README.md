Gestion des Formations - Backend (Laravel)

Ce projet est un backend développé avec Laravel pour gérer les formations, les candidats et les candidatures. Il permet :

📌 La création et la gestion des formations

📌 L’inscription des candidats

📌 La gestion des candidatures

📌 L’administration des utilisateurs

🚀 Installation et Configuration

📌 1. Prérequis

Assurez-vous d'avoir installé :

PHP (≥8.1)

Composer

MySQL

Laravel (dernière version)

📌 2. Cloner le projet

git clone https://github.com/ton-utilisateur/ton-repo.git
cd ton-repo

📌 3. Installer les dépendances

composer install

📌 4. Configurer l’environnement

Copiez le fichier .env.example et renommez-le .env :

cp .env.example .env

Modifiez le fichier .env et configurez la base de données :

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nom_de_ta_base
DB_USERNAME=root
DB_PASSWORD=

📌 5. Générer la clé de l’application

php artisan key:generate

📌 6. Exécuter les migrations

php artisan migrate

📌 7. Démarrer le serveur

php artisan serve

L'API sera accessible sur http://127.0.0.1:8000

📂 Structure du Projet

📎 app/
 ├️ 📂 Models/          # Modèles Eloquent (User, Formation, Candidat, Candidature)
 ├️ 📂 Http/Controllers # Contrôleurs API (FormationController, CandidatureController, etc.)
📂 database/migrations/   # Fichiers de migration
📂 routes/api.php         # Routes API
📂 config/                # Fichiers de configuration Laravel

📌 API Endpoints

📌 Formations

Méthode

URL

Description

GET

/api/formations

Liste des formations

POST

/api/formations

Ajouter une formation

GET

/api/formations/{id}

Voir une formation

PUT

/api/formations/{id}

Modifier une formation

DELETE

/api/formations/{id}

Supprimer une formation

📌 Candidats

Méthode

URL

Description

GET

/api/candidats

Liste des candidats

POST

/api/candidats

Ajouter un candidat

GET

/api/candidats/{id}

Voir un candidat

PUT

/api/candidats/{id}

Modifier un candidat

DELETE

/api/candidats/{id}

Supprimer un candidat

📌 Candidatures

Méthode

URL

Description

GET

/api/candidatures

Liste des candidatures

POST

/api/candidatures

Soumettre une candidature

GET

/api/candidatures/{id}

Voir une candidature

PUT

/api/candidatures/{id}

Modifier le statut

DELETE

/api/candidatures/{id}

Supprimer une candidature

✅ Améliorations Futures

🔹 Authentification avec Laravel Sanctum

🔹 Filtrage et recherche avancée des formations

🔹 Notifications pour les candidats acceptés/refusés

🤝 Contribution

Fork le projet

Crée une branche (git checkout -b feature/ma-nouvelle-fonctionnalité)

Commits tes changements (git commit -m 'Ajout de ma fonctionnalité')

Push la branche (git push origin feature/ma-nouvelle-fonctionnalité)

Crée une Pull Request

📝 Licence

Ce projet est sous licence MIT.

📧 Contact

Développé par [Ton Nom]📩 Email : contact@exemple.com

