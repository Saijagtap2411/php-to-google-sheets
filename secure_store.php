<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Replace this with your 
    $url = "actual Google Apps Script Web App URL";

    // Your secret API key (must match the one in Apps Script)
    $apiKey = "secret API key";

   
    $data = array(
        "apiKey" => $apiKey,
        "name"   => $_POST["name"],
        "email"  => $_POST["email"],
        "phone"  => $_POST["phone"],
        "house"   => $_POST["house"]
    );

    
    $options = array(
        "http" => array(
            "header"  => "Content-type: application/json\r\n",
            "method"  => "POST",
            "content" => json_encode($data)
        )
    );

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    // Handle response
    if ($result === FALSE) {
        echo "<h2>Error sending data. Please try again.</h2>";
    } else {
        echo "<h2>✅ Data saved to Google Sheets successfully!</h2>";
    }
} else {
    echo "<h2>Invalid request method.</h2>";
}
?>
