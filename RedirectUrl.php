<?php
/**
 * Created by PhpStorm.
 * User: Staf
 * Date: 20.01.2020
 * Time: 11:17
 */

namespace stafora\RedirectUrl;


use Yii;
use yii\base\Component;
use stafora\components\RedirectUrl\ParserCSV;

class RedirectUrl extends Component {
    
    public $filepath = "@app/components/RedirectUrl/files/redirect.csv";


    public function init()
    {
        parent::init();

        $parserCSV = new ParserCSV($this->getFilePath());
        $url = $parserCSV->parseUrl();

        if($url){
            $this->redirectUrl($url);
        }
    }

    public function redirectUrl($url){
        Yii::$app->getResponse()->redirect($url)->send();
        exit;
    }

    protected function getFilePath(): string
    {
        $path = Yii::getAlias($this->filepath);
        return $path;
    }

}
