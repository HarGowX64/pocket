<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GameAction
 *
 * @author Administrator
 */
class BuspAction extends StageAction{
    //put your code here
    
    public function run() {
//        var_dump($this->tags);
        $model = Bus::model()->findbyPk($_GET['id']);
        $this->controller->render("bus_p", array(
            'model' => $model,
        ));
        
    }
}

?>
