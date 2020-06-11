<?php include 'serverinfo.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>System Info</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="../contact_form/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <h1>Server & File Info</h1>

        <?php if ($server) : ?>
            <ul class="list-group">
                <?php foreach ($server as $key => $value) : ?>
                    <li class="list-group-item">
                        <strong><?= $key; ?> </strong>
                        <?= $value ?>
                    </li>

                <?php endforeach; ?>
            </ul>
        <?php endif; ?>


        <h1>Client Info</h1>

        <?php if ($client) : ?>
            <ul class="list-group">
                <?php foreach ($client as $key => $value) : ?>
                    <li class="list-group-item">
                        <strong><?php echo $key; ?> </strong>
                        <?php echo $value ?>
                    </li>

                <?php endforeach; ?>
            </ul>
        <?php endif; ?>



    </div>




        
</body>
</html>