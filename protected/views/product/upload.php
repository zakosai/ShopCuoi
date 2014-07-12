<?php
/* @var image ImageController*/
function p($i) {
    if ($i % 2 == 0)
        echo "even";
    else
        echo "odd";
}

$i = 1;
$baseLink = Yii::app()->baseUrl . "/images/Products";
if ($img != NULL) {
    ?>
    <div id="yw29" class="grid-view">
        <table class="items table table-striped">
            <thead>
                <tr>
                    <th id="yw29_c1">Ảnh</th>
                    <th class="button-column" id="yw29_c4">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
    <?php foreach ($img as $m) { ?>
                    <tr class="<?php echo p($i++); ?>" id="<?php echo $m->id; ?>">
                        <td style="width: 300px"><?php echo CHtml::image($baseLink . "/" . $m->link, 'Ảnh sản phẩn', array('width' => 100, 'height' => 40, 'border' => '1px solid gray')) ?></td>
                        <td class="button-column">
                            <a href="<?php echo CHtml::link("Xóa", '#', array('submit'=>array('image/delete', "id"=>$m->id, "productID"=>$productID), 'confirm' => 'Bạn có chắc chắn muốn xóa hình ảnh này?'));?>">
                                </a></td>
 
                           
                    </tr>
    <?php }
    ?>
            </tbody>
        </table>
    </div>

<?php } ?>

<!--<script type="text/javascript">
/*<![CDATA[*/
jQuery(function($) {
jQuery('tr').on('click','.button-column',function(){
    if(confirm('Are you sure you want to delete this item?')) {
        var id = $(this).find("a").attr('class');
        jQuery.yii.submitForm(this,'/ShopCuoi/image/delete'+id+".html",{});return false;} 
    else return false;});
jQuery('body').tooltip({'selector':'a[rel=tooltip]'});
jQuery('body').popover({'selector':'a[rel=popover]'});
});
/*]]>*/
</script>-->
<div class="upload">
    <input type="file" name="file0" value="file" id="file">
    <a onclick="addImage()" class="btn btn-primary" href="" id="addImg">Thêm Ảnh</a> <br>
</div>
<input type="hidden" name="number" id="number" value="1">


<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->

<script>
        var i = 1;
        $('#addImg').on('click', function() {

            var addDiv = $('.upload');
            $('<input type="file" name="file' + i + '" id="file" value="file"><br>').appendTo(addDiv);
            i++;
            $('#number').val(i);
            return false;

        });

</script>

