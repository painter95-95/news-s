   <?
   use yii\helpers\Html;
   use yii\helpers\Url;
   ?>
   <a href="<?= Url::toRoute(['comments/view', 'id' => $model->id])?>" class="ticket_open_comment">
       <div class="btn-group"><i class="fa fa-user"></i></div>
       <span>Video Aulz</span>
       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
       <div class="ticket_action"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
           <div class="ticket_action_view">i</div>
       </div>
   </a>