<?php
/* @var $model Product */
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function p($i){
    if ($i%2 == 0) echo "even";
    else echo "odd";
}
$i = 1;
$str = "";
if ($model == NULL) echo "<div align='center'>Không có sản phẩm nào trong giỏ hàng</div>";
else {
?>
<div id="yw29" class="grid-view">
    <table class="items table table-striped">
        <thead>
            <tr>
                <th id="yw29_c0">#Mã sản phẩm</th>
                <th id="yw29_c1">Ảnh</th>
<!--                <th id="yw29_c2">Số lượng</th>-->
                <th class="button-column" id="yw29_c4">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($model as $m) {
                $str = $str.",".$m->id;
                $this->renderPartial('/transaction/_shoppingCart', array('m'=>$m));
            }
             ?>
        </tbody>
    </table>
</div>
<div class="shoppingcart">
<a class="btn btn-primary" href="<?php echo $this->createUrl('site/create');?>">Đặt hàng</a>
<a class="btn btn-primary" href="<?php echo $this->createUrl('site/index')?>">Tiếp tục mua sắm</a>
</div>
<?php }?>
