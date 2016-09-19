<?php
/**
 * Created by PhpStorm.
 * User: iu
 * Date: 9/19/16
 * Time: 2:43 PM
 */
//$uploaddir = '/var/www/html/admin/modules/autocall/conf/';
//$findstr = "/usr/bin/php /var/www/html/admin/modules/autocall/robot.php";
//$files = glob($uploaddir . "*.php");
//$crons = autocall_list_cron('list',$findstr);
if(isset($_GET["upload"])) {

//    echo json_encode( $data );
}else{
    start_page();
}
function start_page()
{
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-9">
                <div class="fpbx-container">
                    <div id ="mainframe">

                    </div>
                </div>
            </div>
            <div class="col-sm-3 hidden-xs " >
                <div class="list-group" >
                    <a href=# id="choose_firms" class="list-group-item" data-controls="firms">Настройка фирм</a >
                    <a href=# id="schedule" class="list-group-item" data-controls="schedule"> Расписания</a >
                    <a href=# id="queue" class="list-group-item" data-controls="queue"> Очередь обзвона </a >
                    <!--                    <a href=# id="called_list" class="list-group-item" > Список Совершенных Звонков </a >-->
                    <!--                    <a href=# id="test" class="list-group-item" > TEST </a >-->
                </div >
            </div >
        </div>
    </div>
    <div id="formodal"></div>

    <?php
}
?>