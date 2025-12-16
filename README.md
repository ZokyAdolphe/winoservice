# 🚗 WINO Service - Site Web Officiel

Site web moderne et performant pour **WINO Service**, garage automobile spécialisé en diagnostic et reprogrammation automobile à Antananarivo, Madagascar.

## 📋 Caractéristiques

✅ **Mobile-First & Responsive** - Optimisé pour tous les appareils  
✅ **SEO-Friendly** - Meta tags, OpenGraph, structure sémantique  
✅ **Performance** - Tailwind CSS CDN, Alpine.js, images optimisées  
✅ **Conversion** - Boutons WhatsApp/Facebook partout, formulaire de RDV  
✅ **Sans Base de Données** - Aucun stockage, redirection directe vers WhatsApp/Facebook  
✅ **Facile à Modifier** - Configuration centralisée dans `config/site.php`

## 🛠️ Stack Technique

- **Backend** : PHP 8+ (minimal, pas de framework requis)
- **Frontend** : HTML5 + Tailwind CSS (CDN) + Alpine.js (CDN)
- **Hébergement** : Compatible hébergement mutualisé (cPanel, Plesk, etc.)

## 📁 Structure du Projet

```
wino-service/
├── config/
│   └── site.php              # Configuration du site (à modifier)
├── public/
│   ├── index.php             # Page d'accueil
│   ├── services.php          # Page services
│   ├── rendez-vous.php       # Formulaire de rendez-vous
│   ├── .htaccess             # Configuration Apache
│   ├── partials/
│   │   ├── header.php        # Header + navigation
│   │   ├── footer.php        # Footer
│   │   ├── sticky-bar.php    # Barre sticky mobile
│   │   └── floating-whatsapp.php  # Bouton WhatsApp flottant
│   └── assets/
│       └── images/           # Images du site
└── README.md
```

## 🚀 Installation & Déploiement

### Option 1 : Hébergement Mutualisé (FTP)

1. **Télécharger le projet** sur votre ordinateur
2. **Connectez-vous à votre hébergement** via FTP (FileZilla, WinSCP, etc.)
3. **Uploadez le contenu du dossier `public/`** dans le dossier racine de votre site (souvent `public_html/` ou `www/`)
4. **Uploadez le dossier `config/`** à la racine (au même niveau que `public_html/`)
5. **Vérifiez les permissions** : les fichiers PHP doivent être en `644` et les dossiers en `755`
6. **Testez votre site** en accédant à votre nom de domaine

### Option 2 : Serveur Local (Test)

#### Avec PHP Built-in Server

```bash
cd "c:/Users/AdminConic/OneDrive/Desktop/Antigravity/Wino Service/public"
php -S localhost:8000
```

Puis ouvrez : `http://localhost:8000`

#### Avec XAMPP/WAMP/MAMP

1. Copiez le dossier `Wino Service` dans `htdocs/` (XAMPP) ou `www/` (WAMP)
2. Accédez à `http://localhost/Wino Service/public/`

## ⚙️ Configuration

### Modifier les Informations du Site

Éditez le fichier **`config/site.php`** pour personnaliser :

- **Contact** : Téléphone, WhatsApp, Facebook, Email
- **Adresse** : Rue, ville, carte Google Maps
- **Horaires** : Jours et heures d'ouverture
- **Services** : Ajouter/modifier/supprimer des services
- **FAQ** : Questions fréquentes
- **SEO** : Meta title, description, keywords

**Exemple** :

```php
'phone' => '+261 38 34 088 46',
'whatsapp' => '261383408846',
'facebook_url' => 'https://www.facebook.com/profile.php?id=61578917654389',
```

### Changer la Carte Google Maps

1. Allez sur [Google Maps](https://www.google.com/maps)
2. Recherchez votre adresse
3. Cliquez sur **Partager** > **Intégrer une carte**
4. Copiez le code `<iframe src="..."></iframe>`
5. Extrayez l'URL du `src` et collez-la dans `config/site.php` :

```php
'map_embed' => 'https://www.google.com/maps/embed?pb=...'
```

## 📱 Fonctionnalités Clés

### 1. Formulaire de Rendez-vous

- **Aucun stockage** : Les données ne sont jamais enregistrées
- **WhatsApp** : Génère un message pré-rempli et ouvre WhatsApp
- **Facebook** : Affiche un modal avec le message à copier + bouton pour ouvrir Messenger

### 2. Sticky Bar Mobile

Barre fixe en bas d'écran sur mobile avec 3 boutons :
- WhatsApp
- Facebook
- Appeler

### 3. Bouton WhatsApp Flottant

Bouton vert avec animation pulse, visible sur toutes les pages.

### 4. SEO Optimisé

- Meta tags (title, description, keywords)
- Open Graph (Facebook, LinkedIn)
- Structure sémantique (H1, H2, sections)
- URLs propres (sans `.php` grâce au `.htaccess`)

## 🎨 Personnalisation du Design

Le site utilise **Tailwind CSS** via CDN. Pour modifier les couleurs :

1. Ouvrez `public/partials/header.php`
2. Modifiez les classes Tailwind dans les sections concernées

**Palette actuelle** :
- Primaire : `cyan-500` (#0EA5E9)
- Secondaire : `orange-500` (#F97316)
- Neutre : `gray-800` (#1F2937)

## 📊 Performance

- ✅ **Tailwind CSS CDN** : Pas de compilation nécessaire
- ✅ **Alpine.js CDN** : Interactions légères (FAQ, modal)
- ✅ **Images optimisées** : Format WebP recommandé
- ✅ **Lazy loading** : Chargement différé des images
- ✅ **Compression** : Gzip activé via `.htaccess`

## 🔒 Sécurité

- ✅ **Pas de base de données** : Aucune injection SQL possible
- ✅ **Pas de stockage** : Aucune donnée utilisateur enregistrée
- ✅ **Headers sécurisés** : X-Frame-Options, X-XSS-Protection
- ✅ **Validation** : Champs obligatoires dans le formulaire

## 📞 Support

Pour toute question ou assistance :

- **Téléphone** : +261 38 34 088 46
- **WhatsApp** : [Cliquez ici](https://wa.me/261383408846)
- **Facebook** : [WINO Service](https://www.facebook.com/profile.php?id=61578917654389)

## 📝 Licence

© 2025 WINO Service. Tous droits réservés.

---

**Développé avec ❤️ pour l'excellence automobile**
