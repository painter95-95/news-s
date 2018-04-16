<?
use yii\helpers\Html;
use yii\helpers\Url;
?>
<tr class="gradeX">
    <td><?= $model->id;?></td>
    <td><img src="//www.uzkorea.com/images/article/original/<?=$model->logo; ?>" height="120" width="150"/></td>
    <td><?= $model->langtitle();?></td>
    <td><?= $model->langminidesc();?></td>
    <td style="display: none;"><?= $model->langdesc();?></td>
    <td><?= $model->create_at;?></td>
    <td><?= $model->cat->langname();?></td>
    <td>
        <div class="row table_host">
            <div class="col-md-12"><a class="btn btn-success" href="<?= Url::toRoute(['article/view', 'id' =>$model->id])?>"><i class="fa fa-eye"></i></a></div>
            <div class="col-md-12"><a class="btn btn-warning" href="<?= Url::toRoute(['article/update', 'id' =>$model->id])?>"><i class="fa fa-edit"></i></a>
            </div>
            <div class="col-md-12">
                <? echo
                    ''.Html::beginForm(['article/delete', 'id'=>$model->id], 'post')
                    .Html::beginTag('button',['type'=>'submit', 'class'=>'btn btn-danger', 'data-confirm'=>'Ishonchigiz komilmi'])
                    .Html::beginTag('i',['class'=>'fa fa-trash-o'])
                    .Html::endTag('i')
                    .Html::endTag('button')
                    .Html::endForm().''; ?>
            </div>
        </div>
    </td>
</tr>
