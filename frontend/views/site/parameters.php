<?php
/* @var $this yii\web\View */
$this->title = 'Tandem Parameter Management';
?>
<div class="site-index">

    <div class="jumbotron">
        <!--h1>Congratulations!</h1>  -->

        <p class="lead">Parameters Management</p>

        <!-- <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p> -->
		<p><a class="btn btn-lg btn-default" 
            href="http://www.tandemgroup.ca/network"> <img 
            src="img=../../../../../img/tandemnet.jpg" style="float:center" 
            alt="Tandem Networks"></a></p>
		
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Clients</h2>

                <p>Client List Management</p>

                <p><a class="btn btn-default" 
                    href="<?= \Yii::$app->request->BaseUrl?>/index.php?r=client">Clients &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Categories</h2>

                <p>Project Category Management</p>

                <p><a class="btn btn-default" 
                    href="<?= \Yii::$app->request->BaseUrl?>/index.php?r=project-category">Categories &raquo;</a></p>
            </div>
			<div class="col-lg-4">
                <h2>Project Types</h2>

                <p>Project Type Management</p>

                <p><a class="btn btn-default" 
                    href="<?= \Yii::$app->request->BaseUrl?>/index.php?r=project-type">Types &raquo;</a></p> 
            </div>
            <div class="col-lg-4">
                <h2>Managers</h2>

                <p>Manager List Management</p>

                <p><a class="btn btn-default" 
                    href="<?= \Yii::$app->request->BaseUrl?>/index.php?r=project-manager">Managers 
                    &raquo;</a></p>
            </div>
			<div class="col-lg-4">
                <h2>Employees</h2>

                <p>Employee Management</p>

                <p><a class="btn btn-default" 
                    href="<?= \Yii::$app->request->BaseUrl?>/index.php?r=employee">Employees &raquo;</a></p>
            </div>

            <div class="col-lg-4">
                <h2>Status</h2>

                <p>Status List Management</p>

                <p><a class="btn btn-default" 
                    href="<?= \Yii::$app->request->BaseUrl?>/index.php?r=status">Status &raquo;</a></p>
            </div>



		</div>

    </div>
</div>

