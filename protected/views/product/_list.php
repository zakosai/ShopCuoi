<?php
/* @var $data Product*/
/* @var $image Image*/
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//$data = $_GET['data'];
$image = $data->images;

$baseLink = Yii::app()->baseUrl."/images/Products";
?>
<div id="img" class="img<?php echo $data->id?>">
    
    <?php
       if ($image[0]->link == "") $image[0]->link = "defaults.jpg";
       echo CHtml::image($baseLink."/".$image[0]->link, 'Ảnh Sản Phẩm');      
    ?>
    <div class="line1">
        <div class="code">Mã số: <?php echo $data->productCode ?></div>
        
        <div class="giohang<?php echo $data->id?>"> 
            <?php echo CHtml::image($baseLink."/icon_giohang.png",'Giỏ Hàng', array('width' => 20, 'height' => 30));?>
        </div>
        <div class="code">Size: <?php echo $data->size ?></div>
        <div class="code">Giá: <?php echo $data->price ?> VND</div>
        <div class="code">Chất: <?php echo $data->madeOf ?></div>
    </div>
</div>


<script>
    $(document).ready(function(){
		var mouseX;
		var mouseY;
		$(document).mousemove( function(e) {
		   mouseX = e.pageX; 
		   mouseY = e.pageY;
		}); 
		$( ".img<?php echo $data->id?>" ).mousemove(function( e ) {
			var dh = $('#aa').height();
			var dw = $('#aa').width();
                        var wh = $(window).height();
                        var ww = $(window).width();
                        var top = mouseY-100;
                        var left = mouseX + 10;
                        
                        if (top - $(window).scrollTop() < 0) {
                            top += 100;
                        }
                        else if (top + dh > $(window).height() + $(window).scrollTop()) top += 150 -dh ;
                       
                       if (left + dw > $(window).width()) left = mouseX - dw;
                      
			//$('#aa').css({'top':mouseY-50,'left':mouseX+50}); //nam ben phai? chuot
			$('#aa').css({'top':top,'left':left}); //nam ben trai chuot
			if ($('#aa').css('display') == 'none') {
                            $('#aa').empty();
                            var a = $(".img<?php echo $data->id?>").clone();
                            a.innerWidth('98%');
                            a.innerHeight('98%');
                           $('#aa').html(a);
                                              
    			$('#aa').show();
			}		  	
		});		
		$(".img<?php echo $data->id?>").mouseout(function(){
		  $('#aa').hide();
		});
                $(".giohang<?php echo $data->id ?>").click(function(){
                   var cart = getCookie('productId');
                   if (cart != ""){
                            var str = cart +"," + <?php echo $data->id?>;
                            setCookie('productId',str);
                            

                   }
                   else 
                       setCookie('productId', <?php echo $data->id?>);
                   
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
</script>