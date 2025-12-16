<?php $config = require_once __DIR__ . '/../../config/site.php'; ?>

<!-- Sticky Bottom Bar (Mobile Only) -->
<div class="fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 shadow-lg md:hidden z-40">
    <div class="grid grid-cols-3 divide-x divide-gray-200">
        <!-- WhatsApp -->
        <a href="https://wa.me/<?= $config['whatsapp'] ?>?text=Bonjour%20WINO%20Service%2C%20j'ai%20besoin%20d'informations"
            target="_blank" class="flex flex-col items-center justify-center py-3 hover:bg-green-50 transition-colors">
            <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center mb-1">
                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                </svg>
            </div>
            <span class="text-xs font-medium text-gray-700">WhatsApp</span>
        </a>

        <!-- Facebook -->
        <a href="<?= htmlspecialchars($config['facebook_url']) ?>" target="_blank"
            class="flex flex-col items-center justify-center py-3 hover:bg-blue-50 transition-colors">
            <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center mb-1">
                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                </svg>
            </div>
            <span class="text-xs font-medium text-gray-700">Facebook</span>
        </a>

        <!-- Appeler -->
        <a href="tel:<?= $config['phone'] ?>"
            class="flex flex-col items-center justify-center py-3 hover:bg-orange-50 transition-colors">
            <div class="w-10 h-10 bg-orange-500 rounded-full flex items-center justify-center mb-1">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
            </div>
            <span class="text-xs font-medium text-gray-700">Appeler</span>
        </a>
    </div>
</div>