<?php
/**
 * Created by IntelliJ IDEA.
 * User: rosso357
 * Date: 2018/05/29
 * Time: 15:19
 */

use Phalcon\Mvc\Model;

class Customers extends Model
{
    //ユーザー名
    public $id;
    //ユーザー名
    public $name;
    //メールアドレス
    public $mail_address;
    //性別
    public $gender;


    //-----以降、getter,setter-----
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Customers
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Customers
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMailAddress()
    {
        return $this->mail_address;
    }

    /**
     * @param mixed $mail_address
     * @return Customers
     */
    public function setMailAddress($mail_address)
    {
        $this->mail_address = $mail_address;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     * @return Customers
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

}
