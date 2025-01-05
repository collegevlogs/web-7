<?php
    $expiration = time() + (60 * 60 * 24 * 30);
    $currentDateTime = date('Y-m-d H:i:s');
    $lastVisitedDateTime = $_COOKIE['last-visited'] ?? "unknown";
    setcookie('last-visited', $currentDateTime, $expiration);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Last Visited Date-Time</title>
</head>
<body>
    
     <h2>Last Visited Date-Time</h2>
<?php
if($lastVisitedDateTime!="unknown")
 echo "Last visited on ".$lastVisitedDateTime;
else 
    echo 'Welcome! This is your first visit.';
?>
</body>
</html>