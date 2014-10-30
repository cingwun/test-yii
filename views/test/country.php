<?php
	use yii\helpers\Html;
	use yii\widgets\LinkPager;
	$this->params['breadcrumbs'][] = ['label' => 'Countries', 'url' => ['test/country']];
?>
<h1>Countries</h1>

<div>
	<?= Html::a('Create Country', ['test/create'], ['class' => 'btn btn-success']) ?>
</div>
<table class="table">
	<thead>
		<tr>
			<th>#</th>
			<th>country</th>
			<th>code</th>
			<th>population</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($countries as $idx => $country): ?>
		<tr>
			<td><?=$idx+1?></td>
			<td><?=$country->name?></td>
			<td><?=$country->code?></td>
			<td><?=$country->population?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<?= LinkPager::widget(['pagination' => $pagination]) ?>
