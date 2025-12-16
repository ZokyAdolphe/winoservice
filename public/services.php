<?php
$page_title = 'Nos Services - WINO Service';
require_once __DIR__ . '/partials/header.php';
?>

<!-- Hero Services -->
<section class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white py-16 md:py-24">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">
                Nos <span class="gradient-text">Services Professionnels</span>
            </h1>
            <p class="text-xl text-gray-300">
                Solutions complètes pour tous vos besoins en électronique automobile
            </p>
        </div>
    </div>
</section>

<!-- Services Grid -->
<section class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <?php foreach ($config['services'] as $service): ?>
                <div id="<?= $service['id'] ?>"
                    class="bg-white border-2 border-gray-200 rounded-2xl p-8 hover:border-cyan-500 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <!-- Icon -->
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-orange-500 rounded-xl flex items-center justify-center mb-6">
                        <span class="text-4xl"><?= $service['icon'] ?></span>
                    </div>

                    <!-- Title -->
                    <h3 class="text-2xl font-bold text-gray-900 mb-4"><?= htmlspecialchars($service['name']) ?></h3>

                    <!-- Description -->
                    <p class="text-gray-600 mb-6 leading-relaxed"><?= htmlspecialchars($service['description']) ?></p>

                    <!-- Features -->
                    <ul class="space-y-2 mb-6">
                        <?php foreach ($service['features'] as $feature): ?>
                            <li class="flex items-center text-sm text-gray-700">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <?= htmlspecialchars($feature) ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <!-- CTA -->
                    <a href="rendez-vous.php?service=<?= urlencode($service['name']) ?>"
                        class="w-full inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-cyan-500 to-orange-500 text-white font-semibold rounded-lg hover:shadow-lg transform hover:scale-105 transition-all">
                        Prendre RDV pour ce service
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Compliance Notice -->
        <div class="max-w-4xl mx-auto bg-yellow-50 border-l-4 border-yellow-400 p-6 rounded-lg">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <svg class="w-6 h-6 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-lg font-semibold text-yellow-900 mb-2">Conformité et Réglementation</h3>
                    <p class="text-yellow-800">
                        ⚠️ <strong>Toutes nos interventions sont soumises à vérification de propriété du véhicule et
                            conformité réglementaire.</strong>
                        Vous devez présenter la carte grise du véhicule et une pièce d'identité valide. Nous respectons
                        strictement la législation en vigueur concernant les modifications électroniques automobiles.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Conversion Block -->
<section class="py-16 bg-gradient-to-br from-cyan-600 to-orange-600 text-white">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center">
            <div
                class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-6">
                <span class="text-5xl">💬</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                Besoin d'un diagnostic rapide ?
            </h2>
            <p class="text-xl mb-8 text-white/90">
                Écrivez-nous directement sur WhatsApp pour une réponse immédiate
            </p>
            <a href="https://wa.me/<?= $config['whatsapp'] ?>?text=Bonjour%20WINO%20Service%2C%20j'ai%20besoin%20d'un%20diagnostic%20rapide"
                target="_blank"
                class="inline-flex items-center px-8 py-4 bg-white text-cyan-600 font-semibold rounded-lg hover:bg-gray-100 shadow-lg transform hover:scale-105 transition-all">
                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                </svg>
                Contacter sur WhatsApp
            </a>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16 md:py-24 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Questions <span class="gradient-text">Fréquentes</span>
                </h2>
            </div>

            <div class="space-y-4" x-data="{ openFaq: null }">
                <?php foreach ($config['faq'] as $index => $faq): ?>
                    <div class="border border-gray-200 rounded-lg overflow-hidden bg-white">
                        <button @click="openFaq = openFaq === <?= $index ?> ? null : <?= $index ?>"
                            class="w-full px-6 py-4 text-left hover:bg-gray-50 transition-colors flex items-center justify-between">
                            <span class="font-semibold text-gray-900 pr-4"><?= htmlspecialchars($faq['question']) ?></span>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform flex-shrink-0"
                                :class="{ 'rotate-180': openFaq === <?= $index ?> }" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="openFaq === <?= $index ?>" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 transform -translate-y-2"
                            x-transition:enter-end="opacity-100 transform translate-y-0"
                            class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                            <p class="text-gray-700 leading-relaxed"><?= htmlspecialchars($faq['answer']) ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/partials/sticky-bar.php'; ?>
<?php require_once __DIR__ . '/partials/floating-whatsapp.php'; ?>
<?php require_once __DIR__ . '/partials/footer.php'; ?>