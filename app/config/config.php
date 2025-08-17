<?php
// Konfigurasi database SQLite
define('DB_PATH', __DIR__ . '/../../database/database.db');

// Base URL (untuk link dan asset)
define('BASE_URL', 'http://localhost/jamuku_mvc/public');

// Jika belum ada database, buat dari init.sql
if (!file_exists(DB_PATH)) {
    $pdo = new PDO('sqlite:' . DB_PATH);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = file_get_contents(__DIR__ . '/../../database/inisiasi.sql');
    $pdo->exec($sql);
}
