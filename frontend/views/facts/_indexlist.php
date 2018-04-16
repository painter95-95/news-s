<?php
use yii\helpers\Url;
?>
<div class="col-md-6 col-sm-6">
    <div class="layout_3--item border">
        <div class="thumb">
            <a href="<?= Url::toRoute(['article/view', 'id' => $model->id]);?>"><img src="<?= Url::to('@web/')?>images/category/01/4.jpg" class="img-responsive" alt=""/></a>
        </div>
        <span class="cat">Business</span>
        <h4><a href="<?= Url::toRoute(['article/view', 'id' => $model->id]);?>">The Very Good News Buried in Apple's Dismal Results</a></h4>
        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui...</p>
        <div class="meta"><span class="author">by Mahita G.</span><span class="date">Sep. 22, 2016</span><span class="views">634</span><span class="comments">2</span></div>
    </div>
</div>
