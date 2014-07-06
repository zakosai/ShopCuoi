<?php
$baseLink = Yii::app()->baseUrl."/images/Products";

?>
<tr class="<?php p($i++) ?>" id="<?php echo $m->id?>">
    <td style="width: 300px"><?php echo $m['productID'] ?></td>
    <td style="width: 300px"><?php echo CHtml::image($baseLink . "/" . $m['link'], 'Ảnh sản phẩn', array('width' => 160, 'height' => 80, 'border' => '1px solid gray')) ?></td>
    <td><div class="filter-container"><input name="<?php echo $m['id'] ?>" type="text"></div></td>
    <td class="button-column">
        <a class="edit<?php echo $m['id'] ?>" title="Sửa" rel="tooltip"><i class="icon-edit"></i></a>
        <a class="delete<?php echo $m['id'] ?>" title="Xóa" rel="tooltip"><i class="icon-trash"></i></a></td>
</tr>

