<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gestion des Tâches - Votre Assistant Personnel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased bg-gray-100 dark:bg-gray-900">
        <div class="min-h-screen flex flex-col">
            <header class="bg-white dark:bg-gray-800 shadow">
                <nav class="container mx-auto px-6 py-3">
                    <div class="flex justify-between items-center">
                        <div class="text-2xl font-bold text-gray-800 dark:text-white">
                            AJM
                        </div>
                        <div class="flex space-x-4">
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100">Log in</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="text-sm text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100">Register</a>
                                    @endif
                                @endauth
                            @endif
                        </div>
                    </div>
                </nav>
            </header>

            <main class="flex-grow">
                <div class="container mx-auto px-6 py-8">
                    <h1 class="text-4xl font-bold text-center text-gray-800 dark:text-white mb-8">
                        Bienvenue sur AJM le gestionnaire de taches 
                    </h1>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                            <h2 class="text-2xl font-semibold text-gray-800 dark:text-white mb-4">Gérez vos tâches efficacement</h2>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">
                                Avec AJM, organisez vos journées, suivez vos progrès et atteignez vos objectifs plus facilement que jamais.
                            </p>
                            <ul class="list-disc list-inside text-gray-600 dark:text-gray-300">
                                <li>Créez et organisez vos tâches</li>
                                <li>Définissez des priorités</li>
                                <li>Suivez votre progression</li>
                                <li>Collaborez avec votre équipe</li>
                            </ul>
                        </div>
                        
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                            <h2 class="text-2xl font-semibold text-gray-800 dark:text-white mb-4">Fonctionnalités clés</h2>
                            <ul class="space-y-2">
                                <li class="flex items-center">
                                    <svg class="h-6 w-6 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Interface intuitive
                                </li>
                                <li class="flex items-center">
                                    <svg class="h-6 w-6 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Rappels et notifications
                                </li>
                                <li class="flex items-center">
                                    <svg class="h-6 w-6 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Synchronisation multi-appareils
                                </li>
                                <li class="flex items-center">
                                    <svg class="h-6 w-6 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Rapports et analyses
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="mt-12 text-center">
                        <a href="{{ route('register') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                            Commencez gratuitement
                        </a>
                    </div>
                </div>
            </main>

            <footer class="bg-white dark:bg-gray-800 shadow mt-8">
                <div class="container mx-auto px-6 py-4">
                    <div class="text-center text-gray-600 dark:text-gray-400">
                        &copy; 2024 AJM. Tous droits réservés.
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>

