<?php
/**
 * Created by PhpStorm.
 * User: yushilong
 * Date: 2015/9/18
 * Time: 14:18
 */
namespace App\Http\Controllers;

use App\models\Version;
use Illuminate\Support\Facades\Input;

class AppUpdateController extends BaseResponse {

    function checkIsNeedUpdate() {
        $version = Input::get('version');
        $dbv = Version::first(array('download'));
        return parent::outputSuccess($dbv, false);
    }
}