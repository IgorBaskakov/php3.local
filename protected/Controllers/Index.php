<?php

namespace App\Controllers;

use App\Components\Counter;
use T4\Http\Uploader;
use T4\Mvc\Controller;

class Index
    extends Controller
{

    public function actionDefault()
    {
        // самой длинной цепочкой, найденной мною, будет конфиг для доступа к БД, при выборе одного из параметров
        // подключения, например, драйвер.
        //var_dump($this->app->config->db->default->driver);
        //die;

        $this->data->domain = $this->app->config->domain;
        if (isset($_SERVER['REMOTE_ADDR'])) {
            Counter::updateCounter();
        }
    }

    public function actionUpload()
    {
        $uploader = new Uploader('image');
        $uploader->setPath('/../../filestorage/images');
        $uploader();
        $this->redirect('/');
    }

    public function __destruct()
    {
        //$obj = $this;

        //xdebug_debug_zval('obj');
//        $info = get_defined_vars();
//        var_dump($info);
    }

}