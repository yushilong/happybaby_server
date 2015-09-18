<?php
/**
 * Created by PhpStorm.
 * User: yushilong
 * Date: 2015/9/17
 * Time: 11:18
 */
namespace App\Http\Controllers\User;

use App\Http\Controllers\BaseResponse;
use App\models\User;
use Illuminate\Support\Facades\Input;

class UserController extends BaseResponse {

    public function getAllUser() {
//        $user = DB::select('select * from hb_user');
//        $user = User::all();
//        return User::all()->toJson();
        return parent::outputSuccess(User::all(), true);
    }

    public function insertUser() {
        $user = new User();
        $user->name = Input::get("name");
        $user->password = Input::get("password");
        $user->avatar = Input::get("avatar");
        $user->address = Input::get("address");
        $user->phone = Input::get("phone");
        $user->email = Input::get("email");
        $user->gender = Input::get("gender");
        $user->save();
//        return json_encode(array('status' => 0, 'message' => '添加成功'));
        return parent::outputSuccess(null, false);
    }

    public function findUser($name) {
        $user = User::where(array('name' => $name))->first();
//        return json_encode($user);
        if (empty($user))
            return parent::outputFailWithMessage('该用户不存在', null, false);
//            return json_encode(array('status' => 1, 'message' => '该用户不存在'));
        else
            return parent::outputSuccess($user, false);
//            return $user->toJson();
    }

    public function deleteUser($name) {
        $user = User::where(array('name' => $name))->first();
        if (empty($user))
            return parent::outputFailWithMessage('该用户不存在', null, false);
//            return json_encode(array('status' => 1, 'message' => '该用户不存在'));
        else {
            $user->delete();
            return parent::outputSuccessWithMessage('用户删除成功', null, false);
//            return json_encode(array('status' => 0, 'message' => '用户删除成功'));
        }
    }
}