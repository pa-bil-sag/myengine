<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Общий Шаблон</title>
</head>
<body>
<?= $user ?>
<h1>Мой суперпроект</h1>
<?php $web ?>
<menu>
    <ul>

        <?php foreach ($default['menu'] as $item => $value) : ?>

            <li><a href="<?= $value ?>"><?= $item ?></a></li>

        <?php endforeach; ?>
        <? //var_dump($default)?>
    </ul>
</menu>

<?php if (is_array($massage)):
    foreach ($massage as $its => $valid) : ?>
        <? foreach($valid as $val) : ?>
    <p><? echo $its.':'.$val.' массив'; ?></p>
        <?php endforeach; ?>
<?php endforeach; ?>

<?php else: ?>
    <p><?php echo $massage; ?></p>
<?php endif ?>

<?= $content ?>
</body>