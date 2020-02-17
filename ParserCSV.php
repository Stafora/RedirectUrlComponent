<?php
/**
 * Created by PhpStorm.
 * User: Staf
 * Date: 20.01.2020
 * Time: 11:17
 */

namespace stafora\redirect;


use Yii;
use yii\base\Component;
use stafora\redirect\ParserCSV;

class RedirectUrl extends Component {
    
    public $filepath = "@app/components/RedirectUrl/files/redirect.csv";


    public function __construct()
    {
        $parserCSV = new ParserCSV();
        $url = $parserCSV->parseUrl($this->getFilePath());

        if($url){
            $this->redirectUrl($url);
        }
    }

    protected function redirectUrl($url){
        Yii::$app->getResponse()->redirect($url)->send();
        exit;
    }

    protected function getFilePath(): string
    {
        $path = Yii::getAlias($this->filepath);
        return $path;
    }

}
