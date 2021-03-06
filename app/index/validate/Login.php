<?php
/**
 * ============================================================================
 * 版权所有 2015-2018
 * 网站地址: https://www.xiaoxiang.ga
 * ----------------------------------------------------------------------------
 * 不允许对程序代码以任何形式任何目的的再发布。
 * 本程序采用thinkphp v5.0开发
 * ============================================================================
 * Author: chiqing_85
 * Time: 2018/4/26 11:02
 */

namespace app\index\validate;


use think\Validate;

class Login extends Validate
{
    protected $rule = [
        ['username','require','用户名不能为空……'],
        ['email', 'email', '邮箱不能为空！|邮箱格式有误！'],
        ['password', 'require', '密码不能为空……'],
        ['__token__','require|max:50|token']
    ];
}