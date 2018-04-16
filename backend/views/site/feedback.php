<?php
use yii\helpers\Url;
/**
 * Created by PhpStorm.
 * User: davro
 * Date: 01.06.2017
 * Time: 12:03
 */
?>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                DataTables Advanced Tables
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr>
                        <th>FIO</th>
                        <th>Mavzu</th>
                        <th>Vaqt</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                   <? foreach ($feedback as $feed):?>
                    <tr class="odd gradeX">
                        <td><?= $feed->name;?></td>
                        <td><?= $feed->subject;?></td>
                        <td><?= $feed->create_at;?></td>
                        <td><a href="<?= Url::toRoute(['site/viewfeedback', 'id'=>$feed->id])?>"><i class="fa fa-folder-open-o"></i> Ochish</a></td>

                    </tr>
                   <? endforeach;?>
                    </tbody>
                </table>
                <!-- /.table-responsive -->
                <div class="well">
                    <h4>DataTables Usage Information</h4>
                    <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                    <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                </div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>