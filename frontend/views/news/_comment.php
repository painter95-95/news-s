<? foreach ($items as $item): ?>

<div class="comment-content first">
    <img src="images/comments/avatar.png" alt=""/>

    <h5><b><?= $item->name; ?></b> <span class="pull-right"><?= $item->create_at; ?></span></h5>
    <p><?= $item->name; ?></p>
    <a href="#" class="reply">Reply</a>
</div>
<? endforeach; ?>