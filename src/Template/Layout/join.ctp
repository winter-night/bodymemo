<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        echo $this->Html->css('cake.hello');
        echo $this->fetch('meta');
        echo $this->fetch('css');
    ?>
</head>
<body>
    <div id="container">
        <div id="header">
            <?php $this->element('Join/header') ?>
        </div>
    </div>
</body>
</html>