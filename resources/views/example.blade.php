<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php foreach ($data_servise as $value) { ?>
        <h6><?= $value->category ?></h6>
    <?php } ?>
</body>
</html>