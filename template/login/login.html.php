
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>MAXITSA - Connexion</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(135deg, #fff 0%, #f8f9fa 100%);
            min-height: 100vh;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen p-4">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg border-2 border-blue-300 p-8">
        <div class="text-center mb-8">
            <h1 class="text-orange-400 text-2xl font-bold mb-8">MAXITSA</h1>
            <h2 class="text-black text-xl font-bold mb-4">BIENVENUE SUR MAXITSA</h2>
            <p class="text-gray-600 text-sm">Veuillez entrer vos informations de connexion</p>
        </div>

      

        <form method="POST" action="accueil" class="space-y-6">
            <div>
                <label class="block text-blue-600 text-sm font-medium mb-2 italic" for="login">Téléphone</label>
                <input
                    id="login"
                    name="telephone"
                    type="tel"
                    placeholder="7XXXXXXXX"
                    
                    class="w-full px-4 py-3 border border-orange-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent bg-orange-50"
                />
            </div>

            <div>
                <label class="block text-blue-600 text-sm font-medium mb-2 italic" for="password">Password</label>
                <input
                    id="password"
                    name="password"
                    type="password"
                    placeholder="••••"
                    
                    class="w-full px-4 py-3 border border-orange-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent bg-orange-50"
                />
            </div>

            <button 
                type="submit"
                class="w-full bg-yellow-600 hover:bg-yellow-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200"
            >
                Se Connecter
            </button>
        </form>

        <div class="text-center mt-6 space-y-2">
            <p  class="text-orange-400 text-sm cursor-pointer hover:underline">Mot de passe oublié?</p>
            <p class="text-gray-600 text-sm">
                Vous n'avez pas encore de compte ?
                <a href="createcompte" class="text-orange-400 cursor-pointer hover:underline">Créer un compte</a>
            </p>
        </div>
    </div>
</body>
</html>
