<?
use yii\helpers\Html;
use yii\helpers\Url;
?>
<tr>
    <td><?= $model->id;?></td>
    <td><?= $model->name;?></td>
    <td><?= $model->sort;?></td>
    <td><?= $model->alias;?></td>
    <td><i class="<?= $model->icon;?>"></i></td>
    <td>
        <div class="row table_host">
            <div class="col-md-12"><a class="btn btn-success" href="<?= Url::toRoute(['follow/view', 'id' =>$model->id])?>"><i class="fa fa-eye"></i></a></div>
            <div class="col-md-12"><a class="btn btn-warning" href="<?= Url::toRoute(['follow/update', 'id' =>$model->id])?>"><i class="fa fa-edit"></i></a>
            </div>
            <div class="col-md-12">
                <?= Html::a(Yii::t('app', '<i class="fa fa-trash-o"></i>'), ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                        'method' => 'post',
                    ],
                ]) ?>
            </div>
        </div>
    </td>
</tr>
