   <?
   use yii\helpers\Html;
   use yii\helpers\Url;
   ?>
   <tr class="gradeX">
       <td><?= $model->id;?></td>
       <td><img src="http://uzkorea.com/images/new/<?=$model->image; ?>"/></td>
       <td><?= $model->create_at;?></td>
       <td>
           <div class="row table_host">
               <div class="col-md-12"><a class="btn btn-success" href="<?= Url::toRoute(['reklama/view', 'id' =>$model->id])?>"><i class="fa fa-eye"></i></a></div>
               <div class="col-md-12"><a class="btn btn-warning" href="<?= Url::toRoute(['reklama/update', 'id' =>$model->id])?>"><i class="fa fa-edit"></i></a>
               </div>
               <div class="col-md-12">
                   <? echo
                       ''.Html::beginForm(['reklama/delete', 'id'=>$model->id], 'post')
                       .Html::beginTag('button',['type'=>'submit', 'class'=>'btn btn-danger', 'data-confirm'=>'Ishonchigiz komilmi'])
                       .Html::beginTag('i',['class'=>'fa fa-trash-o'])
                       .Html::endTag('i')
                       .Html::endTag('button')
                       .Html::endForm().''; ?>
               </div>
           </div>
       </td>
   </tr>
