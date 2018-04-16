<?php
use yii\widgets\ListView;

$this->title = Yii::t('app', 'Cats');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="main-page">
    <div class="container-fluid">
        <div class="row page-title-div">
            <div class="col-md-6">
                <h2 class="title">Социалный сети</h2>
                <p class="sub-title">One stop solution for perfect admin dashboard!</p>
            </div>
            <!-- /.col-md-6 text-right -->
        </div>
        <!-- /.row -->
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->

    <section class="section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h5>Таблыца социалный сети</h5>
                            </div>
                        </div>
                        <div class="panel-body p-40">
                            <table id="example3" class="display table table-bordered table-striped" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th rowspan="2">№</th>
                                </tr>
                                <tr>
                                    <th>Названия</th>
                                    <th>Сортировка</th>
                                    <th>Адрес Url</th>
                                    <th>Иконка <a href="http://www.fontawisome.ru">Url</a></th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>№</th>
                                    <th>Названия</th>
                                    <th>Сортировка</th>
                                    <th>Адрес Url</th>
                                    <th>Иконка</th>
                                    <th>Действия</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <?= ListView::widget([
                                    'dataProvider' => $dataProvider,
                                    'itemView'=>'_table',
                                ]);?>
                                ...
                                </tbody>
                            </table>
                            <!-- /.col-md-12 -->
                        </div>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-md-6 -->

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.section -->

</div>
<!-- /.main-page -->
<?
$script = <<< JS
     $(function($) {
                $('#example').DataTable();

                $('#example2').DataTable( {
                    "scrollY":        "500px",
                    "scrollCollapse": true,
                    "paging":         false
                } );

                $('#example3').DataTable();
            });
            
JS;
//маркер конца строки, обязательно сразу, без пробелов и табуляции
$this->registerJs($script, yii\web\View::POS_READY);
?>


