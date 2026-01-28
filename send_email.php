<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil dan membersihkan input
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    
    // Pengaturan email
    $to = "email-anda@example.com";  // Ganti dengan alamat email Anda
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Isi email
    $body = "
    <html>
    <head>
        <title>Pesan dari $name</title>
    </head>
    <body>
        <h2>Pesan dari $name</h2>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Subjek:</strong> $subject</p>
        <p><strong>Pesan:</strong></p>
        <p>$message</p>
    </body>
    </html>
    ";

    // Mengirim email
    if (mail($to, $subject, $body, $headers)) {
        echo "Pesan berhasil dikirim!";
    } else {
        echo "Gagal mengirim pesan. Coba lagi nanti.";
    }
}
?>
