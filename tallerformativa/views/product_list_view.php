<!DOCTYPE html>
<html>
<head>
    <title>Listar Productos</title>
</head>
<body>
    <h1>Productos</h1>
    <ul>
        <?php foreach ($products as $product): ?>
            <li><?php echo $product['name']; ?> - <?php echo $product['serial']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
