<?php


/**
 * Created by IntelliJ IDEA.
 * User: rosso357
 * Date: 2018/05/29
 * Time: 15:40
 */


class CustomersController extends ControllerBase{
    /**
     * 顧客情報を登録する.
     * @param type $name 作成者のアカウント名
     * @param type $mail_address 作成者のメールアドレス
     * @param type $gender 作成者の性別
     * @return　顧客情報を保存
     */
    public function registCustomers($name, $mail_address, $gender){
        $customers = new Customers();
        $customers ->setName($name);
        $customers ->setMailAddress($mail_address);
        $customers ->set($gender);
        return $customers -> save();
    }

    public static function getConnection()
    {
        $di = FactoryDefault::getDefault();
        return $di->get('db');
    }
}