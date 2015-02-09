<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<p align="center"> Cám ơn bạn đã đặt hàng. Shop sẽ duyệt đơn hàng và gọi lại cho bạn sớm nhất có thể</p>
<div align="center"><a class="btn btn-primary" href="<?php echo $this->createUrl('site/index')?>">Tiếp tục mua sắm</a></div>
<script>
    
function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname+"="+cvalue;
}
$(document).ready(function(){
    setcookie('shopcuoi-product', '');
} );

</script>