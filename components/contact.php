<section id="contact" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">
                Besoin d'aide ? Contacte-nous
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Notre équipe d'experts est là pour t'accompagner dans ton parcours d'entrepreneur. 
                N'hésite pas à nous poser tes questions !
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

            <!-- contact form -->

            <div class="lg:col-span-2">
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">
                        Envoie-nous un message
                    </h3>
                    
                    <div id="success-message" class="text-center py-8 hidden">
                        <svg class="h-16 w-16 text-green-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <h4 class="text-xl font-semibold text-gray-900 mb-2">
                            Message envoyé avec succès !
                        </h4>
                        <p class="text-gray-600">
                            Nous te répondrons dans les plus brefs délais.
                        </p>
                    </div>

                    <form id="contact-form" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Nom complet *
                                </label>
                                <input
                                    type="text"
                                    name="name"
                                    required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent"
                                    placeholder="Ton nom"
                                >
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Email *
                                </label>
                                <input
                                    type="email"
                                    name="email"
                                    required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent"
                                    placeholder="ton.email@exemple.com"
                                >
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Téléphone
                                </label>
                                <input
                                    type="tel"
                                    name="phone"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent"
                                    placeholder="+212 6XX XXX XXX"
                                >
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Sujet *
                                </label>
                                <select
                                    name="subject"
                                    required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent"
                                >
                                    <option value="">Choisir un sujet</option>
                                    <option value="inscription">Aide à l'inscription</option>
                                    <option value="facturation">Questions facturation</option>
                                    <option value="technique">Support technique</option>
                                    <option value="autre">Autre question</option>
                                </select>
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Message *
                            </label>
                            <textarea
                                name="message"
                                required
                                rows="5"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent"
                                placeholder="Décris ta question ou ton besoin..."
                            ></textarea>
                        </div>
                        
                        <button
                            type="submit"
                            class="w-full bg-red-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-700 transition-colors flex items-center justify-center"
                        >
                            <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                            Envoyer le message
                        </button>
                    </form>
                </div>
            </div>

            <!-- info and FAQ -->
            <div class="space-y-8">
                
                <!-- contact info -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-6">
                        Nos coordonnées
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="bg-red-100 text-red-600 p-2 rounded-lg mr-4">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">Email</div>
                                <div class="text-gray-800">support@anaboss.ma</div>
                                <div class="text-sm text-gray-500">Réponse sous 24h</div>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-red-100 text-red-600 p-2 rounded-lg mr-4">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">Téléphone</div>
                                <div class="text-gray-800">+212 5 22 XX XX XX</div>
                                <div class="text-sm text-gray-500">Lun-Ven 9h-18h</div>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-red-100 text-red-600 p-2 rounded-lg mr-4">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">Adresse</div>
                                <div class="text-gray-800">Casablanca, Maroc</div>
                                <div class="text-sm text-gray-500">Siège social</div>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-red-100 text-red-600 p-2 rounded-lg mr-4">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">Chat en direct</div>
                                <div class="text-gray-800">Assistant disponible 24h/24</div>
                                <div class="text-sm text-gray-500">Réponse instantanée</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-6">
                        Questions fréquentes
                    </h3>
                    <div class="space-y-4">
                        <details class="group">
                            <summary class="flex justify-between items-center cursor-pointer list-none">
                                <span class="font-medium text-gray-900">
                                    AnaBoss est-il vraiment gratuit ?
                                </span>
                                <span class="ml-6 flex-shrink-0">
                                    <svg class="h-5 w-5 text-gray-500 group-open:rotate-180 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </span>
                            </summary>
                            <div class="mt-3 text-sm text-gray-600">
                                Oui ! L'inscription et les fonctionnalités de base sont 100% gratuites. Nous proposons des fonctionnalités avancées en option.
                            </div>
                        </details>

                        <details class="group">
                            <summary class="flex justify-between items-center cursor-pointer list-none">
                                <span class="font-medium text-gray-900">
                                    Combien de temps prend l'inscription auto-entrepreneur ?
                                </span>
                                <span class="ml-6 flex-shrink-0">
                                    <svg class="h-5 w-5 text-gray-500 group-open:rotate-180 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </span>
                            </summary>
                            <div class="mt-3 text-sm text-gray-600">
                                Avec notre guide, la plupart des utilisateurs complètent leur inscription en 1-2 semaines selon les délais de la CNSS.
                            </div>
                        </details>

                        <details class="group">
                            <summary class="flex justify-between items-center cursor-pointer list-none">
                                <span class="font-medium text-gray-900">
                                    AnaBoss est-il conforme aux lois marocaines ?
                                </span>
                                <span class="ml-6 flex-shrink-0">
                                    <svg class="h-5 w-5 text-gray-500 group-open:rotate-180 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </span>
                            </summary>
                            <div class="mt-3 text-sm text-gray-600">
                                Absolument ! Nous travaillons avec des experts juridiques pour garantir la conformité avec la législation marocaine.
                            </div>
                        </details>

                        <details class="group">
                            <summary class="flex justify-between items-center cursor-pointer list-none">
                                <span class="font-medium text-gray-900">
                                    Puis-je utiliser AnaBoss sur mobile ?
                                </span>
                                <span class="ml-6 flex-shrink-0">
                                    <svg class="h-5 w-5 text-gray-500 group-open:rotate-180 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </span>
                            </summary>
                            <div class="mt-3 text-sm text-gray-600">
                                Oui, AnaBoss est optimisé pour mobile et accessible depuis n'importe quel appareil connecté à internet.
                            </div>
                        </details>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>