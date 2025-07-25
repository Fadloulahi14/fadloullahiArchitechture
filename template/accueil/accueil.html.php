<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Banking Interface</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <style>
        /* Custom styles pour les icônes */
        .icon-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2px;
        }
        .icon-dot {
            width: 4px;
            height: 4px;
            background-color: #fbbf24;
            border-radius: 50%;
        }
        .payment-icon {
            width: 32px;
            height: 32px;
            border: 2px solid #fb923c;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        .payment-icon::before {
            content: '';
            width: 16px;
            height: 16px;
            background-color: #fb923c;
            border-radius: 50%;
        }
        .payment-icon::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 8px;
            height: 8px;
            background-color: #fb923c;
            border-radius: 50%;
        }
    </style>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-0">
        <!-- Header Section -->
        <div class="bg-gradient-to-r from-orange-400 to-yellow-400 px-6 py-4 rounded-40 relative overflow-hidden">

          
            <div class="absolute -left-20 top-0 w-40 h-40 bg-black rounded-full opacity-80"></div>
            
            <!-- Top Bar -->
            <div class="flex justify-between items-center mb-8 top-10 relative z-10">
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center">
                        <span class="text-orange-500 font-bold text-sm">LS</span>
                    </div>
                </div>
                <div class="w-10 h-10 bg-gray-300 rounded-full overflow-hidden">
                    <div class="w-full h-full bg-gray-400 flex items-center justify-center">
                        <span class="text-white text-xs">👤</span>
                    </div>
                </div>
            </div>

            <div class="relative z-10">
            </div>

            <!-- Balance Section -->
            <div class="text-center mt-8 relative z-10">
                <h2 class="text-white text-2xl font-bold mb-4">Voir Solde</h2>
                <div class="flex items-center justify-center">
                    <button onclick="toggleBalance()" class="text-white flex items-center">
                        <i data-lucide="eye" id="eye-icon" class="w-6 h-6"></i>
                        <i data-lucide="eye-off" id="eye-off-icon" class="w-6 h-6 hidden"></i>
                        <span class="ml-2 text-lg" id="balance-text">----</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Main Account Button -->
        <div class="px-6 py-6">
            <div class="bg-gray-200 rounded-2xl p-4 flex items-center justify-between">
                <span class="text-gray-700 font-medium">Principal</span>
                            <span class="text-black font-medium top-4 right-6">785225400</span>

                <div class="w-12 h-12 bg-yellow-400 rounded-lg flex items-center justify-center">
                    <i data-lucide="qr-code" class="w-6 h-6 text-gray-800"></i>
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="px-6 pb-8">
            <div class="grid grid-cols-2 gap-4">
                <!-- Transfert -->
                <button class="bg-gray-600 rounded-2xl p-6 flex flex-col items-center justify-center text-white hover:bg-gray-700 transition-colors">
                    <div class="w-8 h-8 mb-3">
                        <i data-lucide="send" class="w-8 h-8 text-orange-400"></i>
                    </div>
                    <span class="text-sm font-medium">Transfert</span>
                </button>

                <!-- Paiement -->
                <button class="bg-gray-600 rounded-2xl p-6 flex flex-col items-center justify-center text-white hover:bg-gray-700 transition-colors">
                    <div class="w-8 h-8 mb-3">
                        <div class="payment-icon"></div>
                    </div>
                    <span class="text-sm font-medium">Paiement</span>
                </button>

                <!-- Pass Internet -->
                <button class="bg-gray-600 rounded-2xl p-6 flex flex-col items-center justify-center text-white hover:bg-gray-700 transition-colors">
                    <div class="w-8 h-8 mb-3">
                        <i data-lucide="smartphone" class="w-8 h-8 text-purple-400"></i>
                    </div>
                    <span class="text-sm font-medium">Pass</span>
                    <span class="text-xs text-gray-300">Internet</span>
                </button>

                <!-- Voir Plus -->
                <button class="bg-gray-600 rounded-2xl p-6 flex flex-col items-center justify-center text-white hover:bg-gray-700 transition-colors">
                    <div class="w-8 h-8 mb-3">
                        <div class="icon-grid">
                            <div class="icon-dot"></div>
                            <div class="icon-dot"></div>
                            <div class="icon-dot"></div>
                            <div class="icon-dot"></div>
                            <div class="icon-dot"></div>
                            <div class="icon-dot"></div>
                            <div class="icon-dot"></div>
                            <div class="icon-dot"></div>
                            <div class="icon-dot"></div>
                        </div>
                    </div>
                    <span class="text-sm font-medium">Voir plus</span>
                </button>
            </div>
        </div>
    </div>

    <script>
        // Initialize Lucide icons
        lucide.createIcons();

        // Toggle balance visibility
        let balanceVisible = false;
        
      

        // Add click handlers for buttons
     
    </script>
</body>
</html>