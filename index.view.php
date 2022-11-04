<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
<ul>
    <h1><?= $business['name'] ?></h1>

    <ul>
        <?php foreach ($business['categories'] as $categroy) : ?>
            <li><?= $categroy; ?></li>
        <?php endforeach; ?>
    </ul>
</ul>

</body>
</html>