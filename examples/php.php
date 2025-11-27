<?php
/**
 * TempMailChecker API - PHP Example
 * Get your free API key at https://tempmailchecker.com
 */

$API_KEY = "YOUR_API_KEY";

// Check if an email is disposable
function checkEmail($email, $apiKey) {
    $ch = curl_init("https://tempmailchecker.com/api/check?email=" . urlencode($email));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["X-API-Key: " . $apiKey]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $result = curl_exec($ch);
    curl_close($ch);
    
    return json_decode($result, true);
}

// Check your daily usage
function checkUsage($apiKey) {
    $ch = curl_init("https://tempmailchecker.com/api/usage?key=" . $apiKey);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $result = curl_exec($ch);
    curl_close($ch);
    
    return json_decode($result, true);
}

// Example usage
$data = checkEmail("test@mailinator.com", $API_KEY);
print_r($data); // Array ( [temp] => 1 )

if ($data["temp"]) {
    echo "⚠️ Disposable email detected!\n";
} else {
    echo "✅ Legitimate email\n";
}

$usage = checkUsage($API_KEY);
echo "Usage: " . $usage["usage_today"] . "/" . $usage["limit"] . " requests today\n";
?>

