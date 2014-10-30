<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Country */

$this->title = 'Create Country';
$this->params['breadcrumbs'][] = ['label' => 'Countries', 'url' => ['test/country']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1>Create</h1>

<div class="country-form">
	<form id="w0" action="insert" method="post">
		<input type="hidden" name="_csrf" value="">
		<div class="form-group field-country-code required">
			<label class="control-label" for="country-code">Code</label>
			<input type="text" id="country-code" class="form-control" name="code" maxlength="2">
			<div class="help-block"></div>
		</div>

		<div class="form-group field-country-name required">
			<label class="control-label" for="country-name">Name</label>
			<input type="text" id="country-name" class="form-control" name="name" maxlength="52">
			<div class="help-block"></div>
		</div>
		<div class="form-group field-country-population">
			<label class="control-label" for="country-population">Population</label>
			<input type="text" id="country-population" class="form-control" name="population">

			<div class="help-block"></div>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-success">Create</button>
		</div>
	</form>
</div>
