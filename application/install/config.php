<?php
// +----------------------------------------------------------------------
// | LTHINK框架 [ LTHINK PHP ]
// +----------------------------------------------------------------------
// | 版权所有 2016~2017 橙色雷暴工作室 [ http://www.cslb.me ]
// +----------------------------------------------------------------------
// | 官方网站: http://lthink.cn
// +----------------------------------------------------------------------
// | 开源协议 ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------

/**
 * 安装程序配置文件
 */
return array(
    //产品配置
    'install_product_name'   => 'LTHINK PHP', //产品名称
    'install_website_domain' => 'http://www.lthink.cn', //官方网址
    'install_company_name'   => '橙色雷暴工作室', //公司名称
    'original_table_prefix'  => 'lthink_', //默认表前缀

    // 安装配置
    'install_table_total' => 223, // 安装时，需执行的sql语句数量
);
