<?php
/**
 * Contact Form Handler
 * Procesează formularele de contact din toate paginile
 */

// Configurare
$to_email = "contact@example.ro"; // Schimbă cu adresa ta de email
$subject_prefix = "Mesaj Contact Site - ";

// Pornește sesiunea
session_start();

// Funcție pentru curățarea datelor
function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Funcție pentru validarea email
function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Verifică dacă formularul a fost trimis prin POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Colectează și curăță datele
    $name = isset($_POST['name']) ? clean_input($_POST['name']) : '';
    $email = isset($_POST['email']) ? clean_input($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? clean_input($_POST['phone']) : '';
    $subject = isset($_POST['subject']) ? clean_input($_POST['subject']) : 'Contact General';
    $message = isset($_POST['message']) ? clean_input($_POST['message']) : '';
    
    // Câmpuri opționale
    $company = isset($_POST['company']) ? clean_input($_POST['company']) : '';
    $service = isset($_POST['service']) ? clean_input($_POST['service']) : '';
    $project_type = isset($_POST['project_type']) ? clean_input($_POST['project_type']) : '';
    $request_type = isset($_POST['request_type']) ? clean_input($_POST['request_type']) : '';
    $category = isset($_POST['category']) ? clean_input($_POST['category']) : '';
    
    // Array pentru erori
    $errors = array();
    
    // Validare
    if (empty($name)) {
        $errors[] = "Numele este obligatoriu.";
    }
    
    if (empty($email)) {
        $errors[] = "Email-ul este obligatoriu.";
    } elseif (!validate_email($email)) {
        $errors[] = "Email-ul nu este valid.";
    }
    
    if (empty($message)) {
        $errors[] = "Mesajul este obligatoriu.";
    }
    
    // Dacă nu sunt erori, trimite email-ul
    if (empty($errors)) {
        
        // Construiește conținutul email-ului
        $email_subject = $subject_prefix . $subject;
        
        $email_body = "Ai primit un mesaj nou de la formularul de contact.\n\n";
        $email_body .= "Detalii:\n";
        $email_body .= "=====================================\n";
        $email_body .= "Nume: " . $name . "\n";
        $email_body .= "Email: " . $email . "\n";
        
        if (!empty($phone)) {
            $email_body .= "Telefon: " . $phone . "\n";
        }
        
        if (!empty($company)) {
            $email_body .= "Companie: " . $company . "\n";
        }
        
        if (!empty($service)) {
            $email_body .= "Serviciu: " . $service . "\n";
        }
        
        if (!empty($project_type)) {
            $email_body .= "Tip Proiect: " . $project_type . "\n";
        }
        
        if (!empty($request_type)) {
            $email_body .= "Tip Solicitare: " . $request_type . "\n";
        }
        
        if (!empty($category)) {
            $email_body .= "Categorie: " . $category . "\n";
        }
        
        $email_body .= "=====================================\n\n";
        $email_body .= "Mesaj:\n" . $message . "\n\n";
        $email_body .= "=====================================\n";
        $email_body .= "Data: " . date('d-m-Y H:i:s') . "\n";
        $email_body .= "IP: " . $_SERVER['REMOTE_ADDR'] . "\n";
        
        // Headers
        $headers = "From: " . $email . "\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();
        
        // Încearcă să trimită email-ul
        if (mail($to_email, $email_subject, $email_body, $headers)) {
            // Succes
            $_SESSION['contact_success'] = true;
            $_SESSION['contact_message'] = "Mulțumim! Mesajul tău a fost trimis cu succes. Te vom contacta în cel mai scurt timp.";
        } else {
            // Eroare la trimiterea email-ului
            $_SESSION['contact_success'] = false;
            $_SESSION['contact_message'] = "Ne pare rău, a apărut o eroare la trimiterea mesajului. Te rugăm să încerci din nou sau să ne contactezi direct la " . $to_email;
        }
        
        // Salvează și în fișier (backup)
        $log_file = 'contact_messages.txt';
        $log_entry = date('Y-m-d H:i:s') . " | " . $name . " | " . $email . " | " . $subject . "\n";
        file_put_contents($log_file, $log_entry, FILE_APPEND);
        
    } else {
        // Au fost găsite erori
        $_SESSION['contact_success'] = false;
        $_SESSION['contact_message'] = "Erori: " . implode(", ", $errors);
    }
    
    // Redirecționează înapoi la pagina de contact cu mesajul
    if (isset($_SERVER['HTTP_REFERER'])) {
        header("Location: " . $_SERVER['HTTP_REFERER'] . "#contact-result");
    } else {
        // Fallback
        header("Location: success.html");
    }
    exit;
    
} else {
    // Dacă nu e POST, redirecționează la pagina principală
    header("Location: index.html");
    exit;
}
?>
