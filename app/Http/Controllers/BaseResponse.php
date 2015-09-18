<?php
/**
 * Created by PhpStorm.
 * User: yushilong
 * Date: 2015/9/17
 * Time: 18:26
 */
namespace App\Http\Controllers;

class BaseResponse extends Controller {
    public static $success = 10000;
    public static $failure = 10001;

    function outputResult($isSuccess, $message, $data, $isArray) {
        return json_encode(array('status' => $isSuccess ? $this::$success : $this::$failure, 'message' => $message == null || $message == emptyString() ? "操作成功" : "操作失败", 'data' => $data), $isArray);
    }

    function outputSuccess($data, $isArray) {
        return $this::outputResult(true, null, $data, $isArray);
    }

    function outputFail($data, $isArray) {
        return $this::outputResult(false, null, $data, $isArray);
    }

    function outputSuccessWithMessage($data, $message, $isArray) {
        return $this::outputResult(true, $message, $data, $isArray);
    }

    function outputFailWithMessage($data, $message, $isArray) {
        return $this::outputResult(false, $message, $data, $isArray);
    }
}