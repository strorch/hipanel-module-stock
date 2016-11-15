<?php
use yii\helpers\Html;

?>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label><?= Html::activeLabel($model, 'units_qty')?></label>
            <?= Html::activeInput('number', $model, "[$i][props]units_qty", ['class' => 'form-control', 'min' => '1', 'max' => '100']); ?>
        </div>
    </div>
    <!-- /.col-md-3 -->
    <div class="col-md-6">
        <div class="form-group">
            <label><?= Html::activeLabel($model, 'ram_qty')?></label>
            <?= Html::activeInput('number', $model, "[$i][props]ram_qty", ['class' => 'form-control', 'min' => '1', 'max' => '100']); ?>
        </div>
    </div>
    <!-- /.col-md-3 -->
    <div class="col-md-12">
        <div class="form-group">
            <label><?= Html::activeLabel($model, 'cpu_qty')?></label>
            <?= Html::activeTextInput($model, "[$i][props]cpu_qty", ['class' => 'form-control']); ?>
        </div>
    </div>
    <!-- /.col-md-6 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label><?= Html::activeLabel($model, '25_hdd_qty')?></label>
            <?= Html::activeTextInput($model, "[$i][props]25_hdd_qty", ['class' => 'form-control']); ?>
        </div>
    </div>
    <!-- /.col-md-6 -->
    <div class="col-md-6">
        <div class="form-group">
            <label><?= Html::activeLabel($model, '35_hdd_qty')?></label>
            <?= Html::activeTextInput($model, "[$i][props]35_hdd_qty", ['class' => 'form-control']); ?>
        </div>
    </div>
    <!-- /.col-md-6 -->
</div>
<!-- /.row -->