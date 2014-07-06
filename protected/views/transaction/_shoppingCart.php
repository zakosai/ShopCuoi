<?php
$img = $m->images;
if ($img[0]->link == "")
    $img[0]->link = 'defaults.jpg';
$baseLink = Yii::app()->baseUrl."/images/Products";

?>
<tr class="<?php p($i++) ?>" id="<?php echo $m->id?>">
    <td style="width: 300px"><?php echo $m->productCode ?></td>
    <td style="width: 300px"><?php echo CHtml::image($baseLink . "/" . $img[0]->link, 'Ảnh sản phẩn', array('width' => 100, 'height' => 40, 'border' => '1px solid gray')) ?></td>
<!--    <td><div class="filter-container"><input name="<?php //echo $m->id ?>" type="text"></div></td>-->
    <td class="button-column"><a class="delete<?php echo $m->id ?>" title="Xóa" rel="tooltip"><i class="icon-trash"></i></a></td>
</tr>
<script>
    $(document).ready(function(){
        $(".delete<?php echo $m->id ?>").click(function(){
            var cart = getCookie('productId');
            cart = cart.replace(<?php echo $m->id ?>,'');
           setCookie('productId',cart);
           $("#<?php echo $m->id?>").remove();


        } );
    } );
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
