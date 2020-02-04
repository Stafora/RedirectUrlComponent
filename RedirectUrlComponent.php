<?php
/**
 * Created by PhpStorm.
 * User: Staf
 * Date: 20.01.2020
 * Time: 11:17
 */

namespace app\components\RedirectUrlComponent;


use Yii;
use yii\base\Component;
use yii\helpers\ArrayHelper;

class RedirectUrlComponent extends Component {

    public function init()
    {
        parent::init();

        $this->parseUrl();
    }

    public function parseUrl(){

        $url = Yii::$app->request->pathInfo;
        if (($fp = fopen(Yii::getAlias('@app') . "/components/RedirectUrlComponent/files/redirect.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($fp, 0, ",")) !== FALSE) {
                $list[] = $data;
                if(ArrayHelper::isIn('/'.$url, $list[0])){
                    $this->redirectUrl($data[1]);
                    exit();
                }
            }
            fclose($fp);
        }

    }

    public function redirectUrl($url){
        return Yii::$app->getResponse()->redirect($url)->send();
    }

}
