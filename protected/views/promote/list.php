<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<div class ="text">
    <div class="cont">
        <p align="center"> <h2><?php echo $model[$i]->title?> </h2> </p>
<p align="left"> <i> Hà Nội, <?php echo $model[$i]->date?> </i> </p>
<p> <?php echo $model[$i]->content?></p>
<hr>
<p>Các tin mới hơn: </p>
<?php for ($j = 0; $j < $i; $j++) {?>
<li><a href="<?php echo $this->createUrl('list', array('i'=>$j))?>"> <?php echo $model[$j]->title."(".$model[$j]->date.")";?></a></li>
<?php } ?>
<p>Các tin cũ hơn: </p>
<?php for ($j = $i + 1; $j < count($model); $j++) {?>
<li><a href="<?php echo $this->createUrl('list', array('i'=>$j))?>"> <?php echo $model[$j]->title."(".$model[$j]->date.")";?></a></li>
<?php } ?>
    </div>
</div>