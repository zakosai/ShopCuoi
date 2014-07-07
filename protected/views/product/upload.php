<?php

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
                    <tr class="<?php p($i++) ?>" id="<?php echo $m->id ?>">
                        <td style="width: 300px"><?php echo CHtml::image($baseLink . "/" . $m->link, 'Ảnh sản phẩn', array('width' => 100, 'height' => 40, 'border' => '1px solid gray')) ?></td>
                        <td class="button-column"><a onclick ="del('<?php echo $m->id ?>')"class="delete<?php echo $m->id?>" title="Xóa" rel="tooltip"><i class="icon-trash"></i></a></td>
                   
                    </tr>
    <?php }
    ?>
            </tbody>
        </table>
    </div>

<?php } ?>


<div class="upload">
    <input type="file" name="file0" value="file" id="file">
    <a onclick="addImage()" class="btn btn-primary" href="" id="addImg">Thêm Ảnh</a> <br>
</div>
<input type="hidden" name="number" id="number" value="1">


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

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

