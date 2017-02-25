<!doctype html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Шаблон категории</title>
</head>
<body>
  <h1>Заголовок Ктегории</h1>
  <menu>
      <ul>
          <?php foreach($menu['menu'] as $item => $value) :?>

    <li><a href="<?php $value ?>"><?= $item ?></a></li>

<?php endforeach; ?>
<?// var_dump($menu)?>
</ul>
</menu>

<?= $content ?>
</body>