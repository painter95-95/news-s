<?
use yii\helpers\Url;
use yii\helpers\Html;
?>

<tr class="">
    <td><?= $model->id;?></td>
    <td><?= $model->category;?></td>
    <td><?= $model->message;?></td>
    <td>
        <?= $model->allMessage($model->id); ?>
    </td>

    <td style="float: left;"><a class="btn btn-default" href="<?=Url::toRoute(['source-message/view','id'=>$model->id]); ?>"><i class="fa fa-eye"></i></a>
        <a class="btn btn-success" href="<?=Url::toRoute(['source-message/update','id'=>$model->id]); ?>"><i class="fa fa-edit"></i></a>
        <? echo
            ''.Html::beginForm(['cure/delete', 'id'=>$model->id], 'post')
            .Html::beginTag('button',['type'=>'submit', 'class'=>'btn btn-danger', 'data-confirm'=>'Ishonchigiz komilmi'])
            .Html::beginTag('i',['class'=>'fa fa-trash-o'])
            .Html::endTag('i')
            .Html::endTag('button')
            .Html::endForm().''; ?></td>
</tr>