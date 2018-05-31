<?php


/**
 * Created by IntelliJ IDEA.
 * User: rosso357
 * Date: 2018/05/29
 * Time: 15:40
 */

use Phalcon\Validation;
use Phalcon\Validation\Validator\PresenceOf; //nullまたは空文字がないか検証する.
use Phalcon\Validation\Validator\Email; //E-Mail形式か検証する.
use Phalcon\Validation\Validator\Alnum; //英数字のみか検証する.
use Phalcon\Mvc\Model\Query;
use Phalcon\Mvc\Model\Manager;


class CustomersController extends ControllerBase{
    /**
     * 顧客情報を登録する.
     * @param type $name 作成者のアカウント名
     * @param type $mail_address 作成者のメールアドレス
     * @param type $gender 作成者の性別
     * @return　顧客情報を保存
     */
    public function indexAction(){
        echo "<h1>hello</h1>";
    }


    public function registCustomers($id, $name, $mail_address, $gender){

        //バリデーションチェック.
//        $validation = new validation();
//
//        $validation ->add($name, new PresenceOf(array(
//            'message' => 'お名前を入力してください。'
//        )));
//        $validation ->add($mail_address, new PresenceOf(array(
//            'message' => 'メールアドレスを入力してください。'
//        )));
//
//        $validation ->add($gender, new PresenceOf(array(
//            'message' => '性別を入力してください。'
//        )));

        //顧客情報を登録する.
        $customers = new Customers();
        $customers ->setId($id);
        $customers ->setName($name);
        $customers ->setMailAddress($mail_address);
        $customers ->setGender($gender);
        var_dump($customers);
        return $customers -> save();
    }

    public static function getConnection()
    {
        $di = FactoryDefault::getDefault();
        return $di->get('db');
    }

}

$start = new CustomersController();
$start ->registCustomers(2, 'ほげ','mail@gmail.com',2);
