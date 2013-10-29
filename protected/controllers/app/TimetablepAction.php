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
class TimetablepAction extends StageAction{
    //put your code here
    
    public function run() {
//        var_dump($this->tags);
        $this->controller->render("timetable_p", array(
            
        ));
        
    }
}

?>
