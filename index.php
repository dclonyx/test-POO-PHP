
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        require 'class/personnage.php';
        require 'class/formulaire.php';
        $form = new Form(array());
        ?>
        <form action="./perso.php" method="GET">
        <?php
            echo $form->input('Nom1');
            echo $form->input('Force1');
            echo $form->input('ForceMagique1');
            echo $form->input('Vie1');
            echo $form->input('Soin1');

            echo $form->input('Nom2');
            echo $form->input('Force2');
            echo $form->input('ForceMagique2');
            echo $form->input('Vie2');
            echo $form->input('Soin2');

            echo $form->submit();
        ?>
        </form>
</body>
</html>
