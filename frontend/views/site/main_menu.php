<?php
/* @var $this yii\web\View */
$this->title = 'Tandem Project Management';
?>
<div class="site-index">

    <div class="jumbotron">
        <h3>Welcome!</h3>  

        <p class="lead">Tandem Project Management</p>

        <!-- <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p> -->
		<p><a class="btn btn-lg btn-default" 
            href="http://www.tandemgroup.ca/network"> <img 
            src="img=../../../../../img/tandemnet.jpg" style="float:center" 
            alt="Tandem Networks"></a></p>
		
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Engineering</h2>

                <p>Engineering Project Management</p>

                <p><a class="btn btn-default" 
                    href="<?= \Yii::$app->request->BaseUrl?>/index.php?r=project-engineering">Engineering &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Construction</h2>

                <p>Construction Project Management</p>

                <p><a class="btn btn-default" 
                    href="<?= \Yii::$app->request->BaseUrl?>/index.php?r=project-construction">Construction &raquo;</a></p>
            </div>
			<div class="col-lg-4">
                <h2>Invoice</h2>

                <p>Invoicing Management</p>

                <p><a class="btn btn-default" 
                    href="#">Invoicing &raquo;</a></p> 
            </div>
            <div class="col-lg-4">
                <h2>Parameters</h2>

                <p>System Parameter Maintenance</p>

                <p><a class="btn btn-default" 
                    href="<?= \Yii::$app->request->BaseUrl?>/index.php?r=site%2Fparameters">Parameters &raquo;</a></p>
            </div>
			<div class="col-lg-4">
                <h2>Security</h2>

                <p>Access and Security Management</p>

                <p><a class="btn btn-default" 
                    href="#">Access &raquo;</a></p> 
            </div>

            <div class="col-lg-4">
                <h2>Dashboard</h2>

                <p>Project Status Dashboard</p>

                <p><a class="btn btn-default" 
                    href="#">Dashboard &raquo;</a></p> 
            </div>


		</div>

    </div>
</div>

