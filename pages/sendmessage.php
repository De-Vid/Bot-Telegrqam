<?php
// Bot token from BotFather
$botToken = "8452724863:AAESwItn61XHQIgZz3OMJoh2CHBDout1lwE";

// Group Chat ID (with the minus sign if present)
$chatId = "@CodingWater_IT_Group";

// Collect form data
$name    = $_POST['name'] ?? '';
$product   = $_POST['txt_product'] ?? '';

if($name && $product){
    $text = "<b>📩 New Product</b>\n"
          . "<b>Name:</b> $name\n"
          . "<b>Product:</b> $product\n";

    // Telegram API URL
    $url = "https://api.telegram.org/bot$botToken/sendMessage";

    // Send data
    $postFields = [
        'chat_id'    => $chatId,
        'text'       => $text,
        'parse_mode' => 'HTML'
    ];

    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_POST, true); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields); 
    $result = curl_exec($ch); 
    curl_close($ch);

    echo "✅ Message sent successfully!!!!";
} else {
    echo "⚠️ Please fill in all fields!!!!";
}
?>

