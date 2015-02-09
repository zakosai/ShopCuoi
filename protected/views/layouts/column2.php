<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); 

$promote = Promote::model()->findAll(array('order' => 'date DESC'));

    $files = scandir("images/promote");
    $extension = array("gif", "jpeg", "jpg", "png");
    $n0image = 0;
    foreach ($files as $f){
        $type = explode(".", $f);
        $type = end($type);
        if (in_array($type, $extension)){
           // if ($i++ >= 7) break;
            $n0image++;
        }

    }
?>


<div class="promote">
         <div id="myCarousel" class="carousel slide">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

                            <?php for ($i = 1; $i<$n0image; $i++){ ?>
                            <li data-target="#myCarousel" data-slide-to="<?php echo $i?>"></li>
                            <?php }?>
                        </ol>
                        <div class="carousel-inner">
                            
                            <?php     $j = 0; 
                            foreach ($files as $f){
                                   
                                    $type = explode(".", $f);
                                    $type = end($type);
                                    if (in_array($type, $extension)){
                                        if($j == 0){?>
                            <div class="item active">
                                            <a href="<?php echo Yii::app()->createUrl('promote/list', array('id' => 1)) ?>">
                                                <img src="<?php echo Yii::app()->baseUrl . "/images/promote/" .$f; ?>" alt="">
                                                <div class="carousel-caption"><h4><?php echo $promote[0]->title; ?></h4></div>
                                            </a></div>
                                        <?php $j++;} 
                                        else {?>
                            
                                        <div class="item">
                                                <img src="<?php echo Yii::app()->baseUrl."/images/promote/".$f;?>" alt="">
                                        </div>
                                        <?php } } }?>

                        </div>
                        <a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a>
                        <a class="carousel-control right" href="#myCarousel" data-slide="next">›</a>
                    </div>
</div>
<div class="span-19">
        <div id="content">
        <?php echo $content; ?>
    </div><!-- content -->
</div>
 <script type="text/javascript">
        /*<![CDATA[*/
        jQuery(function($) {
            jQuery('body').tooltip({'selector': 'a[rel=tooltip]'});
            jQuery('body').popover({'selector': 'a[rel=popover]'});
            jQuery('#myCarousel').carousel();
        });
        /*]]>*/
    </script>
<?php $this->endContent(); ?>