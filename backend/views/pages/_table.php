   <?
   use yii\helpers\Html;
   use yii\helpers\Url;
   ?>
   <tr>
       <td><?= $model->id;?></td>
       <td><img src="<img src="//www.uzkorea.com/images/pages/list/<?=$model->logo; ?>" height="120" width="150"></td>
       <td><?= $model->name;?></td>
       <td><?= $model->langtitle();?></td>
       <td style="display: none;"><?= $model->langdesc();?></td>
       <td>
           <a class="btn btn-success" href="<?= Url::toRoute(['pages/view', 'id' =>$model->id])?>"><i class="fa fa-eye"></i></a>
           <a class="btn btn-warning" href="<?= Url::toRoute(['pages/update', 'id' =>$model->id])?>"><i class="fa fa-edit"></i></a>
           <a class="btn btn-danger" href="<?= Url::toRoute(['pages/delete', 'id' =>$model->id])?>"><i class="fa fa-trash-o"></i></a>

              </td>
   </tr>
