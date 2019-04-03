<?php
return [
    [
        'id'=>0,
        'label'=>'主 页',
        'path'=>'/',
        'icon'=>'fa fa-home'
    ],[
        'id'=>'content',
        'label'=>'内容系统',
        'icon'=>'fa layui-icon layui-icon-read',
        'submenu'=>[[
            'id'=>'articlelist',
            'label'=>'文章列表'
            ], [
            'id'=>'columnlist',
            'label'=>'栏目列表',
            'name'=>'columnlist'
            ], [
            'id'=>'comment',
            'label'=>'评论管理'
            ], [
                'id'=>'friendchain',
                'label'=>'友链申请'
            ]
        ]
    ],[
        'id'=>'resume',
        'label'=>'简历系统',
        'icon'=>'fa fa-address-card-o',
        'submenu'=>[[
            'id'=>'information',
            'label'=>'个人信息'
            ]
        ]
    ],[
        'id'=>'ssl',
        'label'=>'SSL证书',
        'icon'=>'fa fa-expeditedssl',
        'submenu'=>[[
            'id'=>'certificatelist',
            'label'=>'证书列表'
            ],[
            'id'=>'brand',
            'label'=>'证书品牌'
            ]
        ]
    ],[
        'id'=>'email',
        'label'=>'邮箱系统',
        'icon'=>'fa fa-envelope-o',
        'submenu'=>[
            [
            'id'=>'inbox',
            'label'=>'收信箱'
            ],[
                'id'=>'staremail',
                'label'=>'星标邮件'
            ],[
                'id'=>'outbox',
                'label'=>'发件箱'
            ],[
                'id'=>'emailacc',
                'label'=>'账户管理'
            ]
        ]
    ],[
        'id'=>'user',
        'label'=>'用 户',
        'icon'=>'fa layui-icon layui-icon-username',
        'submenu'=>[
            [
                'id'=>'webuser',
                'label'=>'网站用户'
            ],[
                'id'=>'backstage',
                'label'=>'后台管理员'
            ],[
                'id'=>'role',
                'label'=>'角色管理',
                'name'=>'role'
            ],[
                'id'=>'auth',
                'label'=>'权限管理',
                'name'=>'auth'
            ]
        ]
    ],[
        'id'=>'pages',
        'label'=>'设 置',
        'icon'=>'fa layui-icon layui-icon-set',
        'submenu'=>[
            [
                'id'=>'p-data-table',
                'name'=>'p-data-table',
                'label'=>'Table 表格数据'
            ]
        ]
    ]
];