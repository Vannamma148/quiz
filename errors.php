<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php
            if(count($errors)>0):
        ?>
        <div class="error">
            <?php foreach($errors as $error):?>
            <p><?php echo $error ?></p>
            <?php endforeach ?>
        </div>
        <?php endif ?>
    </body>
</html>