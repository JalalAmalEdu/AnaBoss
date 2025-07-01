<header class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- logo -->
            <div class="flex items-center">
                <div class="flex-shrink-0 flex items-center">
                    <div class="w-8 h-10 mt-1 bg-gradient-to-br from-600 to-red-700 rounded-lg flex items-center justify-center">
                        <img src="assets/ico.png" alt="logo" class="w-10 h-10">
                    </div>
                    <span class="ml-2 text-xl font-bold text-gray-900">AnaBoss</span>
                </div>
            </div>

            <!-- desktop nav -->
            <nav class="hidden md:flex space-x-8">
                <a href="#accueil" class="text-gray-700 hover:text-red-600 transition-colors font-medium">Accueil</a>
                <a href="#fonctionnalites" class="text-gray-700 hover:text-red-600 transition-colors font-medium">Fonctionnalités</a>
                <a href="#guide" class="text-gray-700 hover:text-red-600 transition-colors font-medium">Guide</a>
                <a href="#temoignages" class="text-gray-700 hover:text-red-600 transition-colors font-medium">Témoignages</a>
                <a href="#contact" class="text-gray-700 hover:text-red-600 transition-colors font-medium">Contact</a>
            </nav>

            <!-- right side -->
            <div class="hidden md:flex items-center space-x-4">
                <!-- language -->
                <div class="relative">
                    <select id="language-selector" class="appearance-none bg-transparent border border-gray-300 rounded-md px-3 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent">
                        <option value="fr">🇫🇷 Français</option>
                        <option value="ar">🇲🇦 العربية</option>
                        <option value="da">🗣️ Darija</option>
                    </select>
                </div>
                
                <button class="text-gray-700 hover:text-red-600 transition-colors">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </button>
                
                <button class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition-colors font-medium">
                    Commencer
                </button>
            </div>

            <!-- mobile menu -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-700 hover:text-red-600 transition-colors">
                    <svg id="menu-icon" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg id="close-icon" class="h-6 w-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- mobile nav -->
        <div id="mobile-menu" class="md:hidden hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white border-t">
                <a href="#accueil" class="block px-3 py-2 text-gray-700 hover:text-red-600 transition-colors">Accueil</a>
                <a href="#fonctionnalites" class="block px-3 py-2 text-gray-700 hover:text-red-600 transition-colors">Fonctionnalités</a>
                <a href="#guide" class="block px-3 py-2 text-gray-700 hover:text-red-600 transition-colors">Guide</a>
                <a href="#temoignages" class="block px-3 py-2 text-gray-700 hover:text-red-600 transition-colors">Témoignages</a>
                <a href="#contact" class="block px-3 py-2 text-gray-700 hover:text-red-600 transition-colors">Contact</a>
                <div class="px-3 py-2 border-t">
                    <button class="w-full bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition-colors font-medium">
                        Commencer
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>