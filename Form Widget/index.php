<?php
    require_once __DIR__ . '/Form.php';
    require_once __DIR__ . '/TextInput.php';
    require_once __DIR__ . '/Button.php';

    $form = new Form('', 'POST');
    $form->addElement(new TextInput('Name', 'name'));
    $form->addElement(new TextInput('Email', 'email'));
    $form->addElement(new Button('Submit', 'submit'));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form widget</title>
</head>
<body>
    <div class="container">
        <?php echo $form->render();?>
    </div>
</body>
</html>