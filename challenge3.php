<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 3</title>
</head>

<body>
    <?php
    // current time
    $currentTime = new DateTime();

    // time of birth
    $birthTime = new DateTime("1981-11-14 22:00:00");

    // difference
    $lifeTime = $birthTime->diff($currentTime);

    //00 years 0 months 0 days 08 hours 0 minutes 0 seconds.
    echo $lifeTime->format("%Y years, %m months, %d days, %H hours, %i minutes & %s seconds.");

    ?>
</body>

</html>