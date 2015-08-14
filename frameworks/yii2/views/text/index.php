<?php
/**
 * @var $this yii\web\View
 * @var $dataProvider \yii\data\ActiveDataProvider
 */
use yii\widgets\ListView;

?>
<h1>Texts</h1>
<?
echo ListView::widget( [
	'dataProvider' => $dataProvider,
	'itemView' => '_item',
	'itemOptions' => [
		'tag' => false
	]
] ); ?>
