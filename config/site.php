<?php
/**
 * Configuration du site WINO Service
 * Modifiez ce fichier pour mettre à jour les contenus sans toucher au code
 */

return [
    // Informations générales
    'site_name' => 'WINO Service',
    'tagline' => 'Votre Expert en Diagnostic & Reprogrammation Automobile',
    'description' => 'Garage automobile spécialisé en diagnostic, reprogrammation ECU, anti-démarrage et services électroniques automobiles.',
    
    // Contact
    'phone' => '+261 38 34 088 46',
    'whatsapp' => '261383408846', // Sans le +
    'facebook_url' => 'https://www.facebook.com/profile.php?id=61578917654389',
    'email' => 'contact@winoservice.com', // Optionnel
    
    // Adresse et localisation
    'address' => [
        'street' => 'Antananarivo, Madagascar',
        'city' => 'Antananarivo',
        'country' => 'Madagascar',
        'map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.2!2d47.5!3d-18.9!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTjCsDU0JzAwLjAiUyA0N8KwMzAnMDAuMCJF!5e0!3m2!1sfr!2smg!4v1234567890'
    ],
    
    // Horaires
    'hours' => [
        'Lundi - Vendredi' => '8h00 - 17h00',
        'Samedi' => '8h00 - 12h00',
        'Dimanche' => 'Fermé'
    ],
    
    // Services
    'services' => [
        [
            'id' => 'diagnostic',
            'name' => 'Diagnostic Approfondi',
            'icon' => '🔍',
            'description' => 'Analyse complète des systèmes électroniques de votre véhicule avec équipements professionnels de dernière génération.',
            'features' => ['Lecture codes défauts', 'Analyse en temps réel', 'Rapport détaillé']
        ],
        [
            'id' => 'reprog-ecu',
            'name' => 'Reprogrammation ECU',
            'icon' => '💻',
            'description' => 'Optimisation et reprogrammation du calculateur moteur pour améliorer les performances et la consommation.',
            'features' => ['Optimisation moteur', 'Économie carburant', 'Performances accrues']
        ],
        [
            'id' => 'anti-demarrage-moteur',
            'name' => 'Anti-démarrage Moteur',
            'icon' => '🔐',
            'description' => 'Intervention sur les systèmes anti-démarrage moteur pour résoudre les problèmes de démarrage.',
            'features' => ['Diagnostic immobiliseur', 'Réparation système', 'Vérification propriété']
        ],
        [
            'id' => 'suppression-capteur',
            'name' => 'Suppression Capteur',
            'icon' => '⚙️',
            'description' => 'Intervention technique sur capteurs défectueux avec respect des normes en vigueur.',
            'features' => ['Diagnostic capteurs', 'Intervention conforme', 'Tests validation']
        ],
        [
            'id' => 'anti-demarrage-cle',
            'name' => 'Anti-démarrage Clé',
            'icon' => '🔑',
            'description' => 'Programmation et réparation des systèmes anti-démarrage liés aux clés électroniques.',
            'features' => ['Programmation clé', 'Synchronisation', 'Clé de secours']
        ],
        [
            'id' => 'clonage-ecu',
            'name' => 'Clonage ECU',
            'icon' => '📋',
            'description' => 'Duplication de calculateur pour remplacement suite à panne, avec vérification de propriété.',
            'features' => ['Sauvegarde données', 'Transfert sécurisé', 'Tests complets']
        ],
        [
            'id' => 'reprog-cle',
            'name' => 'Reprogrammation Clé',
            'icon' => '🎯',
            'description' => 'Programmation de nouvelles clés ou reprogrammation de clés existantes pour votre véhicule.',
            'features' => ['Clé neuve', 'Clé perdue', 'Multi-clés']
        ]
    ],
    
    // Pourquoi nous choisir
    'why_us' => [
        [
            'icon' => '👨‍🔧',
            'title' => 'Expertise Technique',
            'description' => 'Techniciens qualifiés et formés aux dernières technologies automobiles'
        ],
        [
            'icon' => '⚡',
            'title' => 'Intervention Rapide',
            'description' => 'Diagnostic et intervention dans les meilleurs délais'
        ],
        [
            'icon' => '✅',
            'title' => 'Conformité Garantie',
            'description' => 'Toutes nos interventions respectent la réglementation en vigueur'
        ],
        [
            'icon' => '💰',
            'title' => 'Tarifs Transparents',
            'description' => 'Devis clair et détaillé avant toute intervention'
        ]
    ],
    
    // FAQ
    'faq' => [
        [
            'question' => 'Quels types de véhicules prenez-vous en charge ?',
            'answer' => 'Nous intervenons sur tous types de véhicules : voitures particulières, utilitaires, 4x4, toutes marques confondues (européennes, asiatiques, américaines).'
        ],
        [
            'question' => 'Combien de temps dure une intervention ?',
            'answer' => 'La durée varie selon le type d\'intervention : de 30 minutes pour un diagnostic simple à plusieurs heures pour une reprogrammation complète. Nous vous informons du délai lors de la prise de rendez-vous.'
        ],
        [
            'question' => 'Dois-je prendre rendez-vous ?',
            'answer' => 'Oui, nous recommandons fortement de prendre rendez-vous via WhatsApp ou Facebook pour garantir votre créneau et préparer l\'intervention.'
        ],
        [
            'question' => 'Quelles garanties offrez-vous ?',
            'answer' => 'Toutes nos interventions sont garanties. La durée de garantie varie selon le type de service (de 3 à 12 mois). Nous vous remettons un document détaillant la garantie applicable.'
        ],
        [
            'question' => 'Faut-il apporter des documents ?',
            'answer' => 'Oui, pour toute intervention sur anti-démarrage ou reprogrammation, vous devez présenter la carte grise du véhicule et une pièce d\'identité pour vérification de propriété.'
        ],
        [
            'question' => 'Acceptez-vous les paiements par carte ?',
            'answer' => 'Nous acceptons les paiements en espèces et par mobile money. Contactez-nous pour plus d\'informations sur les modalités de paiement.'
        ]
    ],
    
    // Créneaux horaires pour RDV
    'time_slots' => [
        'morning' => 'Matin (8h - 12h)',
        'afternoon' => 'Après-midi (12h - 15h)',
        'evening' => 'Fin d\'après-midi (15h - 17h)'
    ],
    
    // SEO
    'meta' => [
        'title' => 'WINO Service - Expert Diagnostic & Reprogrammation Auto Madagascar',
        'description' => 'Garage automobile spécialisé en diagnostic, reprogrammation ECU, anti-démarrage à Antananarivo. Intervention rapide et conforme. Prenez RDV sur WhatsApp.',
        'keywords' => 'garage auto, diagnostic auto, reprogrammation ECU, anti-démarrage, clé auto, Madagascar, Antananarivo',
        'og_image' => '/assets/images/og-image.jpg'
    ]
];
