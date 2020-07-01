<?php

namespace app\index\validate;

use think\Validate;
/*
 * 项目中心/自助分析验证
 * */
class Project extends Validate{
    /**
     * 当前验证规则
     * @var array
     */
    protected $rule = [
       // '字段名(表单提交的name值一致)'=>'验证规则'
        'phone'      =>  'require|mobile|token',
    ];
    /**
     * 验证提示信息
     * @var array
     */
    protected $message = [
        'phone.require'          => '电话号码不能为空',
        'phone.mobile'           => '电话号码无效',
    ];
}