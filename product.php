<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta charset="utf-8">
<?php
	$product = array(
	    "boy" => array(
	        "b1" => array(
	        	"id" => '01',
	        	"img" => '<img src ="B01.jpg"  >',
	            "name" => "Quần short khaki The cosmo()đen",
	            "code" => "SD02K",
	            "price" => "398.000 đ"
	        ),
	        "b2" => array(
	        	"id" => '02',
	        	"img" => '<img src ="B02.jpg" >',
	            "name" => "Quần short nam Bernice màu cobal",
	            "code" => "QSD2524",
	            "price" => "345.000 đ",
	            "oldprice" =>"465.000 đ"
	        ),
	        "b3" => array(
	        	"id" => '03',
	        	"img" => '<img src ="B01.jpg" >',
	            "name" => "Quần kaki nam bernive màu sữa ",
	            "code" => "Qkk1232",
	            "price" => "545.000 đ"
	        ),
	    ),
	    "girl" => array(
	        "g1" => array(
	        	"id" => '04',
	        	"img" => '<img src ="G01.jpg" >',
	            "name" => "quần baggy đen sang trọng",
	            "code" => "Quyên 59",
	            "price" => "498.000 đ"
	        ),
	        "g2" => array(
	        	"id" => '05',
	        	"img" => '<img src ="G02.jpg" >',
	            "name" => "quàn short linen Mint basic",
	            "code" => "ngh12",
	            "price" => "495.000 đ"
	        ),
	        "g3" => array(
	        	"id" => '06',
	        	"img" => '<img src ="G01.jpg" >',
	            "name" => "Áo len bím túi thời trang",
	            "code" => "Al0954",
	            "price" => "300.000 đ"
	        ),
		)
	);
?> 

<div id="content">
   <?php
        foreach ($product as $k => $v) {
        	if($k === 'boy'){
    ?>
        <h1 class="list_title"><?php echo "THỜI TRANG NAM"; ?></h1>
            <ul class="products">
                <?php foreach ($v as $k1 => $v1) {
            	
                ?>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 show">
                    	<a href="#" class="thumbnail img">
                    		<?php echo $v1["img"] ?>
                    	</a>
                    	
                        <p><span></span><?php echo $v1["name"] ?></p>
                        <p><span></span><?php echo $v1["code"] ?></p>
                        <p><span></span><strong><?php echo $v1["price"] ?></strong>
                        <?php 
                        	if (!empty($v1["oldprice"])) {
                         ?> <del>
                         	<?php echo $v1["oldprice"] ?>
                         <?php } ?>	</del>
                     </p>
                        <button class="btn-danger" onclick="buy()">Đặt mua</button>
                    </div>
                <?php }
                ?>
            </ul>
            <?php
        }
    ?>
   			<?php
        }
    ?>
</div>
<style type="text/css" media="screen">
	.show{
		text-align: center;
	}
	.old{

	}
</style>
	
<div id="content">	
   <?php
        foreach ($product as $k => $v) {
        	if($k === 'girl'){
    ?>
        <h1 class="list_title"><?php echo "THỜI TRANG NỮ"; ?></h1>
            <ul class="products">
                <?php foreach ($v as $k1 => $v1) {
            	
                ?>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 show" >
                    	<a href="#" class="thumbnail img">
                    		<?php echo $v1["img"] ?>
                    	</a>
                    
                        <p><span></span><?php echo $v1["name"] ?></p>
                        <p><span></span><?php echo $v1["code"] ?></p>
                        <p><span></span><strong><?php echo $v1["price"] ?></p></strong>
                        <?php 
                        	if (!empty($v1["oldprice"])) {
                         ?>
                         	<p><span></span><?php echo $v1["oldprice"] ?></p>
                         <?php } ?>	
                        <button class="btn-danger" onclick="buy()">Đặt mua</button>
                    </div>
                <?php }
                ?>
            </ul>
            <?php
        }
    ?>
   			<?php
        }
    ?>

     
</div>
<script type="text/javascript">
     	function buy(){


     	alert('thank you your order');
     }
     </script>
</body>
</html>
