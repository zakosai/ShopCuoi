<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$baseLink = Yii::app()->baseUrl."/images/Products";
    
?>
<div class="allImages">
    <?php
    for($i = 0; $i<count($img); $i++)
        echo CHtml::image($baseLink."/".$img[$i]->link, 'Ảnh Sản Phẩm', array('width'=>200));
    ?>
    
</div>
<div id="myCarousel" class="carousel slide">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <?php for ($i = 1; $i < count($img); $i++){?>
    <li data-target="#myCarousel" data-slide-to="<?php echo $i?>"></li>
    <?php }?>
  </ol>
  <!-- Carousel items -->
  <div class="carousel-inner">
      <div class="active item"><?php echo CHtml::image($baseLink."/".$img[0]->link)?></div>
      <?php for($i = 1; $i<count($img); $i++){?>
    <div class="item"><?php echo CHtml::image($baseLink."/".$img[$i]->link)?></div>
      <?php }?>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>
<br>


<div class="info">
    <hr>
    <h3>Thông Tin Sản Phẩm</h3>
     <div class="code">Mã số: <?php echo $model->productCode ?></div>
        
        <div id="giohang" class="giohang<?php echo $model->id?>"> 
           <?php echo CHtml::image($baseLink."/icon_giohang.png",'Giỏ Hàng', array('width' => 120, 'height' => 180));?>
        </div>
        <div class="code">Size: <?php echo $model->size ?></div>
        <div class="code">Giá: <?php echo $model->price ?> VND</div>
        <div class="code">Chất: <?php echo $model->madeOf ?></div>
</div>

<div style ="position: absolute; display:none; " class="giohangMes"> 
    <?php echo CHtml::image($baseLink."/tick.png",'tickk', array('width'=>60, 'height'=>50));?>Đã thêm vào giỏ hàng</div>
<div style="position: absolute; display: none; width: 350px; height: 400px; opacity: 0.9; " id="aa",></div>

<script>

function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname+"="+cvalue;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i].trim();
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}
 $(document).ready(function(){
    $(".giohang<?php echo $model->id ?>").click(function(){
                   var cart = getCookie('productId');
                   if (cart != ""){
                            var str = cart +"," + <?php echo $model->id?>;
                            setCookie('productId',str);
                            

                   }
                   else 
                       setCookie('productId', <?php echo $model->id?>);
                   
                   $(".giohangMes").scrollTop(30);
                   $(".giohangMes").css({'opacity':1, 'top':'+50px'});
                   $(".giohangMes").show();
                   $(".giohangMes").animate({
                       "top" : "-30px",
                       "opacity": 0,
                   }, 1500);
                   
            });
            })
</script>