<?php
// Konfigurasi Google Custom Search API
$googleApiKey = 'YOUR_GOOGLE_API_KEY';
$searchEngineId = 'YOUR_SEARCH_ENGINE_ID'; // ID mesin pencari kustom

// Konfigurasi Telegram Bot
$telegramBotToken = 'YOUR_TELEGRAM_BOT_TOKEN';
$telegramChatId = 'YOUR_CHAT_ID';

// Fungsi untuk mengirim pesan ke Telegram
function sendTelegramMessage($chatId, $message, $botToken) {
    $url = "https://api.telegram.org/bot$botToken/sendMessage";
    $data = [
        'chat_id' => $chatId,
        'text' => $message,
        'parse_mode' => 'HTML'
    ];

    $options = [
        'http' => [
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data),
        ]
    ];

    $context = stream_context_create($options);
    file_get_contents($url, false, $context);
}

// Mencari hasil pencarian dengan Google Custom Search API
$query = 'site:*.go.id slot';
$dateRestrict = 'd1'; // Rentang waktu 1 hari terakhir
$googleApiUrl = "https://www.googleapis.com/customsearch/v1?q=" . urlencode($query) .
                "&key=$googleApiKey&cx=$searchEngineId&dateRestrict=$dateRestrict";

$response = file_get_contents($googleApiUrl);
if ($response === FALSE) {
    die('Error retrieving data from Google API');
}

$results = json_decode($response, true);

// Memproses hasil pencarian
if (!empty($results['items'])) {
    foreach ($results['items'] as $item) {
        $title = $item['title'];
        $link = $item['link'];
        $message = "<b>Potensi Defacement Ditemukan:</b>\n\n" .
                   "<b>Judul:</b> $title\n" .
                   "<b>Link:</b> <a href=\"$link\">$link</a>";

        // Kirim notifikasi ke Telegram
        sendTelegramMessage($telegramChatId, $message, $telegramBotToken);
    }
} else {
    echo "Tidak ada hasil baru dalam rentang waktu yang ditentukan.\n";
}

?>
