<?php
use yii\helpers\Html;
?>

<h1>Action 'index' controller 'My'</h1>
<h2>Variable <?= $var  ?></h2>
<ul>
    <?php foreach ($mass as $item) : ?>
        <li><?= $item  ?></li>
    <?php endforeach; ?>
</ul>
<?php if ($id) : ?>
    <p>ID = <?= Html::encode($id)  ?></p>
<?php endif; ?>
