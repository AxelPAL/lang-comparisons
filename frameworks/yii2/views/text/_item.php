<?php
/**
 * @var $model Text
 */
use app\models\Text;

?>
<div class="mdl-card mdl-shadow--2dp demo-card-wide element">
	<div class="mdl-card__title">
		<h2 class="mdl-card__title-text"><?= $model->title ?>></h2>
	</div>
	<div class="mdl-card__supporting-text">
		<?= $model->content ?>
	</div>
	<div class="mdl-card__menu">
		<button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
			<i class="material-icons">share</i>
		</button>
	</div>
</div>