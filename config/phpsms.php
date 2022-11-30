<?php

return [
    /*
     * The scheme information
     * -------------------------------------------------------------------
     *
     * The key-value paris: {name} => {value}
     *
     * Examples:
     * 'Log' => '10 backup'
     * 'SmsBao' => '100'
     * 'CustomAgent' => [
     *     '5 backup',
     *     'agentClass' => '/Namespace/ClassName'
     * ]
     *
     * Supported agents:
     * 'Log', 'YunPian', 'YunTongXun', 'SubMail', 'Luosimao',
     * 'Ucpaas', 'JuHe', 'Alidayu', 'SendCloud', 'SmsBao',
     * 'Qcloud', 'Aliyun'
     *
     */
    'scheme' => [
        'Log',
    ],

    /*
     * The configuration
     * -------------------------------------------------------------------
     *
     * Expected the name of agent to be a string.
     *
     */
    'agents' => [
        /*
         * -----------------------------------
         * SmsBao
         * -----------------------------------
         * website: http://www.smsbao.com
         * support content sms.
         */
        'SmsBao' => [
            //注册账号
            'username' => 'your_username',
            //账号密码（明文）
            'password' => 'your_password',
        ],

        /*
         * -----------------------------------
         * Qcloud
         * 腾讯云
         * -----------------------------------
         * website:http://www.qcloud.com
         * support template sms.
         */
        'Qcloud' => [
            'appId'  => 'your_app_id',
            'appKey' => 'your_app_key',
        ],

        /*
         * -----------------------------------
         * Aliyun
         * 阿里云
         * -----------------------------------
         * website:https://www.aliyun.com/product/sms
         * support template sms.
         */
        'Aliyun' => [
            'accessKeyId'     => 'your_access_key_id',
            'accessKeySecret' => 'your_access_key_secret',
            'signName'        => 'your_sms_sign_name',
            'regionId'        => 'cn-shenzhen',
        ],
    ],
];
