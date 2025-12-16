<?php
$page_title = 'WINO Service - Expert Diagnostic & Reprogrammation Auto Madagascar';
require_once __DIR__ . '/partials/header.php';
?>

<!-- Hero Section -->
<section
    class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white py-20 md:py-32 overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0"
            style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%23ffffff&quot; fill-opacity=&quot;0.4&quot;%3E%3Cpath d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
        </div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center animate-fade-in-up">
            <!-- Badge -->
            <div class="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full mb-6">
                <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                <span class="text-sm font-medium">Disponible maintenant</span>
            </div>

            <!-- Main Title -->
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                <?= htmlspecialchars($config['tagline']) ?>
            </h1>

            <!-- Subtitle -->
            <p class="text-xl md:text-2xl text-gray-300 mb-10 max-w-2xl mx-auto">
                Diagnostic, reprogrammation ECU, anti-démarrage et solutions électroniques automobiles à Antananarivo
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="https://wa.me/<?= $config['whatsapp'] ?>?text=Bonjour%20WINO%20Service%2C%20je%20souhaite%20prendre%20rendez-vous"
                    target="_blank"
                    class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 bg-green-500 hover:bg-green-600 text-white font-semibold rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition-all">
                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                    </svg>
                    RDV sur WhatsApp
                </a>

                <a href="<?= htmlspecialchars($config['facebook_url']) ?>" target="_blank"
                    class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition-all">
                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                    </svg>
                    Contacter sur Facebook
                </a>
            </div>

            <!-- Trust Indicators -->
            <div class="mt-12 flex flex-wrap items-center justify-center gap-8 text-sm text-gray-400">
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>Expertise certifiée</span>
                </div>
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>Intervention rapide</span>
                </div>
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>Garantie incluse</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Preview -->
<section class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Nos <span class="gradient-text">Services Professionnels</span>
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Solutions complètes pour tous vos besoins en électronique automobile
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-10">
            <?php foreach (array_slice($config['services'], 0, 6) as $service): ?>
                <div
                    class="bg-white border border-gray-200 rounded-xl p-6 hover:shadow-xl hover:border-cyan-500 transition-all duration-300 transform hover:-translate-y-1">
                    <div class="text-4xl mb-4"><?= $service['icon'] ?></div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3"><?= htmlspecialchars($service['name']) ?></h3>
                    <p class="text-gray-600 mb-4 text-sm"><?= htmlspecialchars($service['description']) ?></p>
                    <a href="services.php#<?= $service['id'] ?>"
                        class="inline-flex items-center text-cyan-600 hover:text-cyan-700 font-medium text-sm">
                        En savoir plus
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center">
            <a href="services.php"
                class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-cyan-500 to-orange-500 text-white font-semibold rounded-lg hover:shadow-lg transform hover:scale-105 transition-all">
                Voir tous nos services
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-16 md:py-24 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Pourquoi choisir <span class="gradient-text">WINO Service</span> ?
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php foreach ($config['why_us'] as $reason): ?>
                <div class="text-center">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-cyan-500 to-orange-500 rounded-2xl flex items-center justify-center mx-auto mb-4 transform hover:rotate-6 transition-transform">
                        <span class="text-4xl"><?= $reason['icon'] ?></span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2"><?= htmlspecialchars($reason['title']) ?></h3>
                    <p class="text-gray-600"><?= htmlspecialchars($reason['description']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- FAQ Teaser -->
<section class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Questions <span class="gradient-text">Fréquentes</span>
                </h2>
            </div>

            <div class="space-y-4" x-data="{ openFaq: null }">
                <?php foreach (array_slice($config['faq'], 0, 4) as $index => $faq): ?>
                    <div class="border border-gray-200 rounded-lg overflow-hidden">
                        <button @click="openFaq = openFaq === <?= $index ?> ? null : <?= $index ?>"
                            class="w-full px-6 py-4 text-left bg-white hover:bg-gray-50 transition-colors flex items-center justify-between">
                            <span class="font-semibold text-gray-900"><?= htmlspecialchars($faq['question']) ?></span>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform"
                                :class="{ 'rotate-180': openFaq === <?= $index ?> }" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="openFaq === <?= $index ?>" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 transform -translate-y-2"
                            x-transition:enter-end="opacity-100 transform translate-y-0"
                            class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                            <p class="text-gray-700"><?= htmlspecialchars($faq['answer']) ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- Location -->
<section id="contact" class="py-16 md:py-24 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Nous <span class="gradient-text">Trouver</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 max-w-6xl mx-auto">
            <!-- Map -->
            <div class="rounded-xl overflow-hidden shadow-lg h-96">
                <iframe src="<?= htmlspecialchars($config['address']['map_embed']) ?>" width="100%" height="100%"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <!-- Contact Info -->
            <div class="bg-white rounded-xl shadow-lg p-8">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Informations de Contact</h3>

                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-cyan-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <span class="text-2xl">📍</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-1">Adresse</h4>
                            <p class="text-gray-600"><?= htmlspecialchars($config['address']['street']) ?></p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <span class="text-2xl">📞</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-1">Téléphone</h4>
                            <a href="tel:<?= $config['phone'] ?>"
                                class="text-cyan-600 hover:text-cyan-700"><?= htmlspecialchars($config['phone']) ?></a>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <span class="text-2xl">🕒</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Horaires</h4>
                            <?php foreach ($config['hours'] as $day => $hours): ?>
                                <div class="flex justify-between text-sm mb-1">
                                    <span class="text-gray-600"><?= htmlspecialchars($day) ?></span>
                                    <span class="font-medium text-gray-900"><?= htmlspecialchars($hours) ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="mt-8 pt-6 border-t border-gray-200">
                    <a href="https://www.google.com/maps/dir/?api=1&destination=<?= urlencode($config['address']['street']) ?>"
                        target="_blank"
                        class="w-full inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-cyan-500 to-orange-500 text-white font-semibold rounded-lg hover:shadow-lg transform hover:scale-105 transition-all">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                        </svg>
                        Obtenir l'itinéraire
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Final -->
<section class="py-16 md:py-20 bg-gradient-to-br from-cyan-600 to-orange-600 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Besoin d'aide pour votre véhicule ?</h2>
        <p class="text-xl mb-8 text-white/90">Contactez-nous maintenant pour un diagnostic rapide</p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="https://wa.me/<?= $config['whatsapp'] ?>?text=Bonjour%20WINO%20Service%2C%20j'ai%20besoin%20d'aide"
                target="_blank"
                class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 bg-white text-cyan-600 font-semibold rounded-lg hover:bg-gray-100 shadow-lg transform hover:scale-105 transition-all">
                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                </svg>
                Écrire sur WhatsApp
            </a>

            <a href="rendez-vous.php"
                class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 bg-transparent border-2 border-white text-white font-semibold rounded-lg hover:bg-white hover:text-cyan-600 shadow-lg transform hover:scale-105 transition-all">
                📅 Prendre rendez-vous
            </a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/partials/sticky-bar.php'; ?>
<?php require_once __DIR__ . '/partials/floating-whatsapp.php'; ?>
<?php require_once __DIR__ . '/partials/footer.php'; ?>