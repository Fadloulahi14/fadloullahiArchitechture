<?php

require_once __DIR__ . '/Database.php'; // ← Ajuste ce chemin si besoin

use App\Core\Database;

echo "=== Test de connexion à la base de données ===\n";

$db = new Database();

if ($db->pdo instanceof PDO) {
    echo "✅ Connexion réussie à la base de données PostgreSQL.\n";
} else {
    echo "❌ Échec de la connexion.\n";
}

