<tr class="">
    <td class="my_class" id="<?= $model->id;?>"><?= $model->id;?></td>
    <td><?= $model->langname();?></td>
    <td><?= $model->langtitle();?></td>
    <td><?= $model->url;?></td>
    <td><?= $model->target;?></td>
    <td class="center hidden-phone">
        <a class="btn btn-warning"><i class="fa fa-edit"></i></a>
        <a class="btn btn-danger"><i class="fa fa-trash-o"></i></a>

    </td>
</tr>