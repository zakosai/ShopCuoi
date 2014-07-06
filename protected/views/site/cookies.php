<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    if (!empty(Yii::app()->request->cookies['productId'])) {
        Yii::app()->Cookies->updateCMsg('productId', $data->id);
    } else {
        Yii::app()->Cookies->putCMsg('productId', $data->id);
    }
?>
