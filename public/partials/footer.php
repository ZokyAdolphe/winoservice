<?php $config = require_once __DIR__ . '/../../config/site.php'; ?>

<!-- Footer -->
<footer class="bg-gray-900 text-gray-300 pt-12 pb-24 md:pb-8">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

            <!-- À propos -->
            <div>
                <div class="flex items-center space-x-3 mb-4">
                    <div
                        class="w-10 h-10 bg-gradient-to-br from-cyan-500 to-orange-500 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold">W</span>
                    </div>
                    <h3 class="text-white font-bold text-lg"><?= htmlspecialchars($config['site_name']) ?></h3>
                </div>
                <p class="text-sm text-gray-400 mb-4">
                    <?= htmlspecialchars($config['tagline']) ?>
                </p>
                <div class="flex space-x-3">
                    <a href="https://wa.me/<?= $config['whatsapp'] ?>" target="_blank"
                        class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center hover:bg-green-600 transition-colors">
                        <span class="text-white text-xl">💬</span>
                    </a>
                    <a href="<?= htmlspecialchars($config['facebook_url']) ?>" target="_blank"
                        class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center hover:bg-blue-700 transition-colors">
                        <span class="text-white text-xl">f</span>
                    </a>
                </div>
            </div>

            <!-- Navigation -->
            <div>
                <h4 class="text-white font-semibold mb-4">Navigation</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="index.php" class="hover:text-cyan-400 transition-colors">Accueil</a></li>
                    <li><a href="services.php" class="hover:text-cyan-400 transition-colors">Nos Services</a></li>
                    <li><a href="rendez-vous.php" class="hover:text-cyan-400 transition-colors">Prendre RDV</a></li>
                    <li><a href="#contact" class="hover:text-cyan-400 transition-colors">Contact</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div>
                <h4 class="text-white font-semibold mb-4">Nos Services</h4>
                <ul class="space-y-2 text-sm">
                    <?php foreach (array_slice($config['services'], 0, 5) as $service): ?>
                        <li><a href="services.php#<?= $service['id'] ?>"
                                class="hover:text-cyan-400 transition-colors"><?= htmlspecialchars($service['name']) ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="text-white font-semibold mb-4">Contact</h4>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start space-x-2">
                        <span>📍</span>
                        <span><?= htmlspecialchars($config['address']['street']) ?></span>
                    </li>
                    <li class="flex items-start space-x-2">
                        <span>📞</span>
                        <a href="tel:<?= $config['phone'] ?>"
                            class="hover:text-cyan-400 transition-colors"><?= htmlspecialchars($config['phone']) ?></a>
                    </li>
                    <li>
                        <h5 class="text-white font-medium mb-2">Horaires</h5>
                        <?php foreach ($config['hours'] as $day => $hours): ?>
                            <div class="flex justify-between text-xs mb-1">
                                <span class="text-gray-400"><?= htmlspecialchars($day) ?></span>
                                <span><?= htmlspecialchars($hours) ?></span>
                            </div>
                        <?php endforeach; ?>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-gray-800 mt-8 pt-6 text-center text-sm text-gray-500">
            <p>&copy; <?= date('Y') ?> <?= htmlspecialchars($config['site_name']) ?>. Tous droits réservés.</p>
            <p class="mt-2">Conçu avec ❤️ pour l'excellence automobile</p>
        </div>
    </div>
</footer>

</body>

</html>