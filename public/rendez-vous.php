<?php
$page_title = 'Prendre Rendez-vous - WINO Service';
require_once __DIR__ . '/partials/header.php';

// Get service from URL parameter if exists
$preselected_service = isset($_GET['service']) ? $_GET['service'] : '';
?>

<!-- Hero RDV -->
<section class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white py-16 md:py-20">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center">
            <div class="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full mb-6">
                <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                <span class="text-sm font-medium">Réponse rapide garantie</span>
            </div>

            <h1 class="text-4xl md:text-5xl font-bold mb-6">
                Prenez Rendez-vous <span class="gradient-text">Facilement</span>
            </h1>
            <p class="text-xl text-gray-300">
                Remplissez le formulaire ci-dessous et envoyez-nous votre demande via WhatsApp ou Facebook
            </p>
        </div>
    </div>
</section>

<!-- Appointment Form -->
<section class="py-16 md:py-24 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">

            <!-- Form Card -->
            <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12" x-data="{
                     formData: {
                         nom: '',
                         telephone: '',
                         marque: '',
                         modele: '',
                         annee: '',
                         service: '<?= htmlspecialchars($preselected_service) ?>',
                         description: '',
                         date: '',
                         creneau: ''
                     },
                     showFacebookModal: false,
                     generatedMessage: '',
                     
                     generateMessage() {
                         let message = 'Bonjour WINO Service, je souhaite prendre rendez-vous.\\n\\n';
                         message += '👤 Nom: ' + this.formData.nom + '\\n';
                         message += '📞 Téléphone: ' + this.formData.telephone + '\\n';
                         
                         if (this.formData.marque || this.formData.modele || this.formData.annee) {
                             message += '🚗 Véhicule: ';
                             if (this.formData.marque) message += this.formData.marque + ' ';
                             if (this.formData.modele) message += this.formData.modele + ' ';
                             if (this.formData.annee) message += '(' + this.formData.annee + ')';
                             message += '\\n';
                         }
                         
                         if (this.formData.service) {
                             message += '⚙️ Service: ' + this.formData.service + '\\n';
                         }
                         
                         if (this.formData.date) {
                             message += '📅 Date souhaitée: ' + this.formData.date;
                             if (this.formData.creneau) {
                                 message += ' - ' + this.formData.creneau;
                             }
                             message += '\\n';
                         }
                         
                         if (this.formData.description) {
                             message += '📝 Détails: ' + this.formData.description + '\\n';
                         }
                         
                         message += '\\nMerci !';
                         
                         return message;
                     },
                     
                     sendWhatsApp() {
                         if (!this.formData.nom || !this.formData.telephone) {
                             alert('Veuillez remplir au minimum votre nom et téléphone');
                             return;
                         }
                         
                         const message = this.generateMessage();
                         const encodedMessage = encodeURIComponent(message);
                         const whatsappUrl = 'https://wa.me/<?= $config['whatsapp'] ?>?text=' + encodedMessage;
                         window.open(whatsappUrl, '_blank');
                     },
                     
                     sendFacebook() {
                         if (!this.formData.nom || !this.formData.telephone) {
                             alert('Veuillez remplir au minimum votre nom et téléphone');
                             return;
                         }
                         
                         this.generatedMessage = this.generateMessage();
                         this.showFacebookModal = true;
                     },
                     
                     copyMessage() {
                         navigator.clipboard.writeText(this.generatedMessage).then(() => {
                             alert('Message copié ! Collez-le dans Facebook Messenger.');
                         });
                     }
                 }">

                <form @submit.prevent class="space-y-6">

                    <!-- Personal Info -->
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center">
                            <span
                                class="w-8 h-8 bg-cyan-100 rounded-full flex items-center justify-center mr-3 text-cyan-600 font-semibold">1</span>
                            Vos informations
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Nom & Prénom <span class="text-red-500">*</span>
                                </label>
                                <input type="text" x-model="formData.nom" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all"
                                    placeholder="Ex: Jean Rakoto">
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Téléphone <span class="text-red-500">*</span>
                                </label>
                                <input type="tel" x-model="formData.telephone" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all"
                                    placeholder="Ex: +261 34 00 000 00">
                            </div>
                        </div>
                    </div>

                    <!-- Vehicle Info -->
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center">
                            <span
                                class="w-8 h-8 bg-cyan-100 rounded-full flex items-center justify-center mr-3 text-cyan-600 font-semibold">2</span>
                            Votre véhicule <span class="text-sm font-normal text-gray-500 ml-2">(facultatif)</span>
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Marque</label>
                                <input type="text" x-model="formData.marque"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all"
                                    placeholder="Ex: Toyota">
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Modèle</label>
                                <input type="text" x-model="formData.modele"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all"
                                    placeholder="Ex: Corolla">
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Année</label>
                                <input type="text" x-model="formData.annee"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all"
                                    placeholder="Ex: 2018">
                            </div>
                        </div>
                    </div>

                    <!-- Service Selection -->
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center">
                            <span
                                class="w-8 h-8 bg-cyan-100 rounded-full flex items-center justify-center mr-3 text-cyan-600 font-semibold">3</span>
                            Service souhaité
                        </h3>

                        <select x-model="formData.service"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all">
                            <option value="">-- Sélectionnez un service --</option>
                            <?php foreach ($config['services'] as $service): ?>
                                <option value="<?= htmlspecialchars($service['name']) ?>">
                                    <?= htmlspecialchars($service['name']) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Problem Description -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Description du problème <span class="text-sm font-normal text-gray-500">(facultatif)</span>
                        </label>
                        <textarea x-model="formData.description" rows="4"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all resize-none"
                            placeholder="Décrivez brièvement votre problème ou vos besoins..."></textarea>
                    </div>

                    <!-- Date & Time -->
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center">
                            <span
                                class="w-8 h-8 bg-cyan-100 rounded-full flex items-center justify-center mr-3 text-cyan-600 font-semibold">4</span>
                            Date et créneau souhaités
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Date</label>
                                <input type="date" x-model="formData.date"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all">
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Créneau</label>
                                <select x-model="formData.creneau"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all">
                                    <option value="">-- Sélectionnez un créneau --</option>
                                    <?php foreach ($config['time_slots'] as $key => $slot): ?>
                                        <option value="<?= htmlspecialchars($slot) ?>"><?= htmlspecialchars($slot) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Buttons -->
                    <div class="pt-6 border-t border-gray-200">
                        <p class="text-sm text-gray-600 mb-6 text-center">
                            Choisissez votre méthode de contact préférée :
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <button type="button" @click="sendWhatsApp()"
                                class="w-full inline-flex items-center justify-center px-8 py-4 bg-green-500 hover:bg-green-600 text-white font-semibold rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition-all">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                                </svg>
                                Envoyer sur WhatsApp
                            </button>

                            <button type="button" @click="sendFacebook()"
                                class="w-full inline-flex items-center justify-center px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition-all">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                </svg>
                                Envoyer sur Facebook
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Facebook Modal -->
                <div x-show="showFacebookModal" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 flex items-center justify-center p-4"
                    @click.self="showFacebookModal = false">

                    <div class="bg-white rounded-2xl shadow-2xl max-w-2xl w-full p-8" @click.stop>

                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-2xl font-bold text-gray-900">Copier le message</h3>
                            <button @click="showFacebookModal = false" class="text-gray-400 hover:text-gray-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Votre message :</label>
                            <textarea x-model="generatedMessage" readonly rows="10"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 font-mono text-sm resize-none"></textarea>
                        </div>

                        <div class="space-y-3">
                            <button @click="copyMessage()"
                                class="w-full inline-flex items-center justify-center px-6 py-3 bg-gray-900 hover:bg-gray-800 text-white font-semibold rounded-lg transition-all">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                </svg>
                                Copier le message
                            </button>

                            <a href="<?= htmlspecialchars($config['facebook_url']) ?>" target="_blank"
                                class="w-full inline-flex items-center justify-center px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-all">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                </svg>
                                Ouvrir Facebook Messenger
                            </a>

                            <p class="text-sm text-gray-600 text-center pt-2">
                                💡 Collez le message dans Messenger et envoyez-le
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Help Text -->
            <div class="mt-8 text-center text-sm text-gray-600">
                <p>🔒 Vos données ne sont pas stockées. Elles servent uniquement à préparer votre message.</p>
                <p class="mt-2">Besoin d'aide ? Appelez-nous au <a href="tel:<?= $config['phone'] ?>"
                        class="text-cyan-600 hover:text-cyan-700 font-semibold"><?= htmlspecialchars($config['phone']) ?></a>
                </p>
            </div>

        </div>
    </div>
</section>

<?php require_once __DIR__ . '/partials/sticky-bar.php'; ?>
<?php require_once __DIR__ . '/partials/floating-whatsapp.php'; ?>
<?php require_once __DIR__ . '/partials/footer.php'; ?>