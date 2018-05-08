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
 * Time: 2018/2/11 18:07
 */

namespace app\admin\validate;


use think\Validate;

class Link extends Validate
{
    protected $rule = [
            ['name','require', '网站名称不能为空！'],
            ['url', 'require|url', '网站链接不能为空！|URL地址有误！'],
            ['email', 'email', '邮箱格式有误！'],
            ['__token__', 'require|max:50|token']
        ];

}