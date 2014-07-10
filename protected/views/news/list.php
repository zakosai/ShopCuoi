<?php
/* @var $model News*/
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class ="text">
    <div class="cont">
        
<?php foreach ($model as $dt){?>
        <a href="<?php echo $dt->link?>"> <b><?php echo $dt->title?></b></a>
<p> <?php echo $dt->content;?></p>
<hr>
    
<?php }
?>

    </div>
</div>