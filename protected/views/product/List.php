<?php
/* @var $this ProductController*/
/* @var $model Product*/
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$page = $_GET['page'];

if(empty($model)){
    $criteria = new CDbCriteria;
            $criteria->select = '*';
            $criteria->order = 'date DESC';
    
            $model = Product::model()->findAll($criteria);
}
$n0 = count($model);

if ($n0 == 0) echo "<div align = 'center'>Không có sản phẩm nào.</div>";
else {
?>

<div class="imgList">
<?php
$linkImage = Yii::app()->baseUrl."/images/Products";
for ($i = $page*50; $i<($page+1)*50 && $i<= $n0; $i++)
    $this->renderPartial('/product/_list', array('data' => $model[$i]));
?>
</div>
<div class="clear"></div>
<?php
if ($n0 > 50){
    echo "<div class='page'> ";
    for ($i = 1; $i <= round($n0/50); $i++){
      if ($page == $i-1) echo "<div class = 'active'>".$i."</div>";  
      else echo "<div class='n0'><a href='".Yii::app()->request->requestUri . '?page='.($i-1)."'>".$i."</a></div>";
    }
    echo "</div>";
}
?>
<div style ="position: absolute; display:none; " class="giohangMes"> 
    <?php echo CHtml::image($linkImage."/tick.png",'tickk', array('width'=>60, 'height'=>50))?>Đã thêm vào giỏ hàng</div>
<div style="position: absolute; display: none; width: 350px; height: 400px; opacity: 0.9; " id="aa"></div>
<?php } ?>