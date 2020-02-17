<?php
/**
 * Created by PhpStorm.
 * User: Staf
 * Date: 11.02.2020
 * Time: 22:09
 */

namespace stafora\redirect;


use Yii;
use yii\helpers\ArrayHelper;

class ParserCSV {
    /*
     * return string url for redirect;
     */
    public function parseUrl($filepath){
        $url = Yii::$app->request->pathInfo;
        if (($fp = fopen($filepath, "r")) !== false) {
            while (($data = fgetcsv($fp, 0, ",")) !== false) {
                if('/'.$url == $data[0]){
                    return $data[1];
                }
            }
            fclose($fp);
        }
    }
}
