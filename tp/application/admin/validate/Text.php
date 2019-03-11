<?php
namespace app\admin\validate;
use think\Validate;

class Text extends Validate{
    protected $rule = [
        'name'  =>  'require|max:25',
        'pass' => '\d{3}'
    ];
    protected $message = [
        'name.require'  =>  '用户名必须',
        'pass'=>'密码格式错误'
    ];
}