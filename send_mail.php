<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';

    // Database connection
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=users;charset=utf8", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Fetch emails from the database
        $stmt = $pdo->query("SELECT email FROM info");
        $emails = $stmt->fetchAll(PDO::FETCH_COLUMN);
    } catch (PDOException $e) {
        die("Database error: " . $e->getMessage());
    }

    // Setup PHPMailer
    $mail = new PHPMailer(true);
    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Use your SMTP provider
        $mail->SMTPAuth = true;
        $mail->Username = 'duruakumichael07@gmail.com'; // Your email
        $mail->Password = 'sjmcawrvgclmsela'; // Use App Password for security
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;
        $mail->SMTPDebug = 2;  // Set to 3 for more details
        $mail->Debugoutput = 'html'; 

        // Email Content
        $mail->setFrom('duruakumichael07@gmail.com', 'Duruaku Michael');
        $mail->Subject = 'Automated Notification';
        $mail->Body = 'Thank you for registering. This is an automated email.';

        // Send email to each recipient
        foreach ($emails as $email) {
            $mail->addAddress($email);
            $mail->send();
            $mail->clearAddresses(); // Reset for next recipient
        }

        echo "Emails sent successfully!";
    } catch (Exception $e) {
        echo "Email sending failed: " . $mail->ErrorInfo;
    }
?>
