<?
use yii\helpers\Url;
use yii\helpers\Html;
?>
<tr class="">
    <td class="my_class" id="<?= $model->id;?>"><?= $model->id;?></td>
    <td><?= $model->langname();?></td>
    <td><?= $model->langtitle();?></td>
    <td><?= $model->url;?></td>
    <td><?= $model->target;?></td>
    <td>
        <div class="row">
            <div class="col-md-4"><a class="btn btn-success" href="<?= Url::toRoute(['menu/view', 'id' =>$model->id])?>"><i class="fa fa-eye"></i></a></div>
            <div class="col-md-4"><a class="btn btn-warning" href="<?= Url::toRoute(['menu/update', 'id' =>$model->id])?>"><i class="fa fa-edit"></i></a>
            </div>
            <div class="col-md-4">
                <? echo
                    ''.Html::beginForm(['menu/delete', 'id'=>$model->id], 'post')
                    .Html::beginTag('button',['type'=>'submit', 'class'=>'btn btn-danger', 'data-confirm'=>'Ishonchigiz komilmi'])
                    .Html::beginTag('i',['class'=>'fa fa-trash-o'])
                    .Html::endTag('i')
                    .Html::endTag('button')
                    .Html::endForm().''; ?>
            </div>
        </div>

    </td>
</tr>