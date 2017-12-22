<?php

namespace App\Controllers;

use T4\Http\Uploader;
use T4\Mvc\Controller;

class Index
    extends Controller
{

    public function actionDefault()
    {
        $this->data->domain = $this->app->config->domain;
    }

    public function actionUpload()
    {
        $uploader = new Uploader('image');
        $uploader->setPath('/../../filestorage/images');
        $uploader();
        $this->redirect('/');
    }

}