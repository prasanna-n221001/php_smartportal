<?php
include "database.php";

<?php
$client_id = "YOUR_CLIENT_ID";
$redirect_uri = "http://localhost/itsmypage/oauth2.0/google_auth.php";
$scope = "email profile";

$google_login_url = "https://accounts.google.com/o/oauth2/v2/auth?" . http_build_query([
    'client_id' => $client_id,
    'redirect_uri' => $redirect_uri,
    'response_type' => 'code',
    'scope' => $scope,
    'access_type' => 'offline',
    'prompt' => 'consent'
]);
?>


$email = trim($_POST['email']);
$password = trim($_POST['password']);



$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    echo "Email found in database<br>";
    $row = mysqli_fetch_assoc($result);
    if ($password === $row['password']) {
        echo "Login successful";
    } else {
        echo " Password mismatch";
    }

} else {
    echo " Email not found";
}
?>
<html>
    <body>
        <hr>
<h3>OR</h3>

<a href="<?= $google_login_url ?>">
    <button>Login with Google</button>
</a>
</body>
</html>