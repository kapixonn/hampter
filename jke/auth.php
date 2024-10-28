<?php
// auth.php
function isAuthorized($headers) {
    $authToken = isset($headers['Authorization']) ? $headers['Authorization'] : null;
    $validToken = "TwójSekretnyToken"; // zamień na rzeczywisty token

    return $authToken === $validToken;
}
?>