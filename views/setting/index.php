<?php
/* @var $this yii\web\View */
?>
<div class="container">

    <div class="panel panel-info">
        <div class="panel-heading">
            <h3>ตั้งค่าระบบ</h3>
            <?php echo 'เข้าระบบโดย :: '.Yii::$app->user->identity->fullname;
            ?>
        </div>
        <div class="panel-body">
            <div class="row">

                <div class="col-md-3">
                    <a class="btn btn-lg btn-block btn-success" href="index.php?r=system-user/index">
                        <span class="glyphicon glyphicon-user"></span> USER</a>
                </div>
            </div>
        </div>
        <div class="panel-footer text-right">
            <h5>bomkeen dev 2018</h5>
        </div>
    </div>

</div>