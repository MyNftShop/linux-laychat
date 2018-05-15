<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
// $Id$

return [
    // 关闭调试模式
    'app_debug' => true,
    'url_route_on' => true,
    'trace' => [
        'type' => 'html', // 支持 socket trace file
    ],
    //各模块公用配置
    'extra_config_list' => ['database', 'route', 'validate'],
    //临时关闭日志写入
    'log' => [
        'type' => 'test',
    ],

    'default_filter' => ['strip_tags', 'htmlspecialchars'],

    // +----------------------------------------------------------------------
    // | 缓存设置
    // +----------------------------------------------------------------------
    'cache' => [
        // 驱动方式
        'type' => 'file',
        // 缓存保存目录
        'path' => CACHE_PATH,
        // 缓存前缀
        'prefix' => '',
        // 缓存有效期 0表示永久缓存
        'expire' => 0,
        'host' => 'localhost',
        'port' => 11211,
    ],

    //加密串
    'salt' => 'wZPb~yxvA!ir38&Z',

    //备份数据地址
    'back_path' => APP_PATH .'../back/',

    // 显示Trace信息
    'trace' =>[
        'type' => 'Html',
        'trace_tabs' => [
            'base'=>'基本',
            'file'=>'文件',
            'info'=>'流程',
            'error|notice'=>'错误',
            'sql'=>'SQL',
            'debug|log'=>'调试'
        ],
    ],

    //默认显示的用户分组
    'user_group' => [
        '1' => '前端组',
        '2' => '后端组',
        '3' => '运维组'
    ]

];