<?php

use Phalcon\Loader;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Application;
use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\Url as UrlProvider;
use Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter;

try {

    // �I�[�g���[�_�Ƀf�B���N�g����o�^����
    $loader = new Loader();
    $loader->registerDirs(array(
        '../app/controllers/',
        '../app/models/'
    ))->register();

    // DI�R���e�i�����
    $di = new FactoryDefault();

    // �r���[�̃R���|�[�l���g�̑g�ݗ���
    $di->set('view', function () {
        $view = new View();
        $view->setViewsDir('../app/views/');
        return $view;
    });

    // �x�[�XURI��ݒ肵�āA���������S�Ă�URI���uphalcon�v���܂ނ悤�ɂ���
    $di->set('url', function () {
        $url = new UrlProvider();
        $url->setBaseUri('/phalcon-sample/');
        return $url;
    });


    echo $application->handle()->getContent();

    //データベースの接続設定
    $di->set('db',
        function (){
            return new DbAdapter(
                [
                    'host' =>'localhost',
                    'username' => 'root',
                    'password' => 'iwsp731',
                    'dbname'   => 'RubyBatch',
                ]
            );
        }
    );

    // リクエストを処理する
    $application = new Application($di);

} catch (\Exception $e) {
     echo "Exception: ", $e->getMessage();
}