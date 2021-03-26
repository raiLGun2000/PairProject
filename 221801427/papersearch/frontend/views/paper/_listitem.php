<?php
use yii\helpers\Html;
?>

<div class="post">
	<div class="title" style="margin-top: 36px">
		<h2><a href="<?= $model->url;?>"><?= Html::encode($model->title);?></a></h2>
	</div>
	
	<br>
	<div class="content">
	<?= $model->beginning;?>	
	</div>
	
	<br>
	<div class="nav">
		<span class="glyphicon glyphicon-tag" aria-hidden="true"></span>
		<?= implode(', ',$model->tagLinks);?>
	</div>
	
</div>