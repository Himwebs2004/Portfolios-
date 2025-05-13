<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استقبل البيانات
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = strip_tags(trim($_POST["subject"]));
    $message = trim($_POST["message"]);

    // الإيميل اللي باش توصلك فيه المساجات
    $to = "hrsr4wn2007@gmail.com"; // عوضه بإيميلك

    // عنوان الإيميل
    $email_subject = "New message from $name ($subject)";

    // محتوى الإيميل
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: $subject\n\n";
    $email_body .= "Message:\n$message\n";

    // الرؤوس
    $headers = "From: $name <$email>";

    // إرسال الإيميل
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending the message.";
    }
} else {
    // الحماية من الدخول المباشر للملف
    echo "Access denied.";
}
?>
