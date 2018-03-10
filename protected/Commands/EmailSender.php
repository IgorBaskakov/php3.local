<?php

namespace App\Commands;


use App\Components\Counter;
use App\Components\MyMailer;
use T4\Console\Command;

class EmailSender
    extends Command
{

    public function actionDefault()
    {
        $mail = new MyMailer();

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = $this->app->config->email->username;
        $mail->Password = $this->app->config->email->password;
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('igor.baskak@gmail.com', 'mailer');
        $mail->addAddress('igor.baskak@gmail.com', 'Baskakov Igor');

        $mail->isHTML(true);
        $mail->Subject = 'Test email sender';
        $countVisitors = Counter::getCount();
        if ($countVisitors === false) {
            return false;
        }
        $mail->Body    = $countVisitors . ' посещений сайта на текущую дату (' . date('Y-m-d H:i:s') . ')';
        $mail->send();
        echo 'Message has been sent' . "\n";
    }

}