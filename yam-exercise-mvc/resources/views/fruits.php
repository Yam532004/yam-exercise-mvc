<!DOCTYPE html>
<html>
<head>
    <title>List of Fruits</title>
</head>
<body>
    <h1>List of Fruits</h1>
    <ul>
        <?php foreach ($fruits as $fruit): ?>
            <li><?php echo $fruit['name']. " cost ". $fruit['price']. "$"; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
