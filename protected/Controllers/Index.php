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

}