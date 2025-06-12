<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);
  
  $to = "mudryonaauto@gmail.com";  // твоя пошта
  $subject = "Нове повідомлення з форми";
  $body = "Ім'я: $name\nEmail: $email\nПовідомлення: $message";
  $headers = "From: $email";

  mail($to, $subject, $body, $headers);
  echo "Дякуємо! Повідомлення надіслано.";
} else {
  echo "Щось пішло не так.";
}
?>
