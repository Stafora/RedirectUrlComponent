<?php
/**
 * Created by PhpStorm.
 * User: Staf
 * Date: 11.02.2020
 * Time: 22:09
 */

namespace stafora\components\RedirectUrl;


use Yii;
use yii\helpers\ArrayHelper;

class ParserCSV
{
    public $filepath;

    public function __construct( $path ) {
        $this->filepath = $path;

        $this->parseUrl();
    }

    /*
     * return string url for redirect;
     */
    public function parseUrl(){
        $url = Yii::$app->request->pathInfo;
        if (($fp = fopen($this->filepath, "r")) !== false) {
            while (($data = fgetcsv($fp, 0, ",")) !== false) {
                if('/'.$url == $data[0]){
                    return $data[1];
                }
            }
            fclose($fp);
        }
    }
}