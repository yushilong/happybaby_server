<?php

/**
 * Created by PhpStorm.
 * User: yushilong
 * Date: 2015/9/18
 * Time: 10:52
 */
namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Result extends Model {
    public $isSuccess;
    public $message;
    public $data;

    function __construct($isSuccess, $message, $data) {
        parent::__construct();
        $this->isSuccess = $isSuccess;
        $this->message = $message;
        $this->data = $data;
    }
}