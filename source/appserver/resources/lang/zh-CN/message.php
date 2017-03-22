<?php

return [
    'token' => [
        'invalid' => 'Token 无效',
        'expired' => 'Token 过期'
    ],
    'sign' => [
        'invalid' => 'Sign 无效',
        'expired' => 'Sign 过期'
    ],
    'license' => [
        'invalid' => 'License Invalid',
        'unauthorized' => 'Service Unauthorized'
     ],
    'error' => [
        'unknown' => '未知错误',
        '404'     => '您请求的资源不存在',
        'unauthorized' => '没有权限',
        'request_encrypt' => '请求的参数加密错误'
    ],
    'member' => [
        'created'  => '账号创建成功',
        'exists'   => '用户名或邮箱已经存在',
        'password' => [
            'updated'   => '密码更新成功',
            'reset'      => '密码修改链接已发送至 :email',
            'old_password' => '旧密码错误',
        ],
        'failed'   => '用户名或密码错误',
        '404'      => '您输入的账号不存在',
        'mobile' => [
            '404'   => '手机号未注册',
            'exists'   => '手机号已经存在',
            'code' => [
                'error' => '无效的短信验证码'
            ],
            'send' => [
                'error' => '验证码发送失败'
            ]
        ],
        'auth' => [
            'error' => 'OAuth授权失败'
        ]
    ],
    'email' => [
        'error' => '您输入的邮箱不存在',
        'reset' => [
            'subject' => '密码找回邮件',
        ]
    ],
    'good' => [
        'not_alone'         => '不能单独销售',
        'off_sale'          => '商品已下架',
        'out_storage'       => '库存不足',
        'only_addon'        => '主商品不存在',
        'property'          => 'property格式不正确',
        'min_goods_amount'  => '商品总额未达到最低限购金额',
        'max_quality_limit' => '商品达到最大限购数量',
    ],
    'cart' => [
        'json_invalid' => 'json格式不正确',
        'no_goods' => '购物车中没有商品',
        'cart_goods_error' => '购物车中没有此商品',
        'property_error' => '商品属性不正确'
    ],

    'consignee' => [
        'region' => '区域有误',
        'not_found' => '请填写联系人地址',
    ],

    'products' => [
        'error' => '商品有误',
    ],

    'address' => [
        'error' => '收货地址有误',
    ],

    'shipping' => [
        'error' => '此地址不在配送范围内',
        '404' => '配送方式不存在'
    ],

    'score' => [
        'pay'         => '支付',
        'register'    => '注册赠送积分',
        'cancel'      => '取消',
        'order'       => '订单赠送积分',
    ],
    'order' => [
        'reviewed'         => '只能对订单评价一次',
    ],
    'config' => [
        'oauth' => [
            'wechat' => '微信登录参数配置有误',
        ],
    ],
    'coupon' => [
        'error' => '优惠券无效'
    ],
    'cloud' => [
        'config' => '云服务配置无效'
    ]
];
