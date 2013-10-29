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
class BusAction extends StageAction{
    //put your code here
    private $dataProvider;


    public function run() {
//        var_dump($this->tags);
        $this->setCustomTags(array(
            'id',
        ),'[]');
        $this->dataProvider = new CActiveDataProvider('Bus');
        $this->controller->render("bus", array(
            'model' => $this->dataProvider,
        ));
        
    }
    
    public function tagId(){
        $m = $this->getTagContents('id');
        $id = $this->dataProvider->getData();
        if(isset($m[0])){
            $html = Yii::t('nan',$m[0],array(
                '$id'=>$id[0]['id'],
            ));
            return $html;
        }
        
    }
}

?>
