if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(
        !empty($_POST['name'])
        && !empty($_POST['email'])
        && !empty($_POST['message'])
    ){
        $name = $_POST["name"];
        $phone = $_POST["surname"];
        $email = $_POST["email"];
        $message = $_POST["message"];


        $to = "info@agnemarco.it";
        $subject = "Sito Matrimonio nuovo modulo informazioni!";
        $body = "Name: {$name}\nSurname: {$surname}\nPhone: {$phone}\nMessage: {$message}";
        $headers = "From: {$email}";


        if (mail($to, $subject, $body, $headers)) {
            echo "Message sent successfully!";
        } else {
            echo "Failed to send message.";
        }
    }
}
