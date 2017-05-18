<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Sysconfigruntime */

$this->title = $model->run_id;
$this->params['breadcrumbs'][] = ['label' => 'Sysconfigruntimes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sysconfigruntime-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->run_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->run_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'run_id',
            'run_gid',
            'run_rid',
            's_runtime',
            'e_runtime',
            
        ],
    ]) ?>

</div>
