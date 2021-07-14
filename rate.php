<?php include('config.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home - Simple Star Rating</title>    
    <style type="text/css">        
    /* Rate Star*/        
    .result-container{
        width: 100px; height: 22px;
        background-color: #ccc;
        vertical-align:middle;
        display:inline-block;
        position: relative;
        top: -4px;
    }
    .rate-stars{
        width: 100px; height: 22px;
        background: url(img/rate-stars.png) no-repeat;
        background-size: cover;
        position: absolute;
    }
    .rate-bg{
        height: 22px;
        background-color: #ffbe10;
        position: absolute;
    }
    /* Rate Star Ends*/
    
    /* Display rate count */    
    .reviewCount, .reviewScore {font-size: 14px; color: #666666; margin-left: 5px;}
    .reviewScore {font-weight: 600;}
    /* Display rate count Ends*/        
    </style>
</head>
<body style="font-family:sans-serif; ">                    
    <h1>Display Star Rating average from Mysql Database with PHP</h1>                
    <?php
    //defining Product id
    $product_id=1;
        $ratequery = "SELECT * FROM rate WHERE product_id = '$product_id' "; 
        $rateres =mysqli_query($conn, $ratequery);    
            while($data = mysqli_fetch_assoc($rateres)){
                $rate_db[] = $data;
                $sum_rates[] = $data['rate'];
            }
            if(count($rate_db)){
                $rate_times = count($rate_db);
                $sum_rates = array_sum($sum_rates);
                $rate_value = $sum_rates/$rate_times;
                $rate_bg = (($rate_value)/5)*100;
            }else{
                $rate_times = 0;
                $rate_value = 0;
                $rate_bg = 0;
            }
    ?>
            <div style="margin-top: 10px">
                <div class="result-container">
                <div class="rate-bg" style="width:<?php echo $rate_bg; ?>%"></div>
                <div class="rate-stars"></div>
            </div>                    
            <span class="reviewScore"><?php echo substr($rate_value,0,3); ?></span><span class="reviewCount">(<?php echo $rate_times; ?> reviews)</span>
            
        </body>
</html>














CREATE TABLE `rate` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `product_id` int(10) NOT NULL,
  `rate` int(10) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `rate` (`id`, `product_id`, `rate`) VALUES
(1, 1, 4),
(2, 1, 3),
(3, 1, 3),
(4, 1, 3),
(5, 1, 5);

<?php
include'include/config.php';
$sql=mysqli_query($conn,"SELECT * FROM reviews WHERE vendor_id='$id'");
if($sql){
    while($data =mysqli_fetch_assoc($sql)){
         $rate_db[] = $data;
         $sum_rates=$data['rate'];
            }
            if(count($rate_db)){
                $rate_times = count($rate_db);
                $sum_rates = array_sum($sum_rates);
                $rate_value = $sum_rates/$rate_times;
                $rate_bg = (($rate_value)/5)*100;
            }else{
                $rate_times = 0;
                $rate_value = 0;
                $rate_bg = 0;
            }

    }



?>
