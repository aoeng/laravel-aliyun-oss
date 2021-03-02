阿里云OSS的Laravel适配
======



## 安装
```bash
composer require  aoeng/laravel-aliyun-oss
```

配置文件 `config/filesystems.php`
```
[
    'disks' => [
    ...
            'oss' => [
                'driver'       => 'oss',
                'access_id'    => env('ALI_OSS_ACCESS_ID', ''),
                'access_key'   => env('ALI_OSS_ACCESS_KEY', ''),
                'bucket'       => env('ALI_OSS_BUCKET', ''),
                'endpoint'     => env('ALI_OSS_ENDPOINT', ''), // OSS 外网节点或自定义外部域名
                //'endpoint_internal' => '<internal endpoint [OSS内网节点] 如：oss-cn-shenzhen-internal.aliyuncs.com>', // v2.0.4 新增配置属性，如果为空，则默认使用 endpoint 配置(由于内网上传有点小问题未解决，请大家暂时不要使用内网节点上传，正在与阿里技术沟通中)
                'cdnDomain'    => env('ALI_OSS_CDN_DOMAIN', ''), // 如果isCName为true, getUrl会判断cdnDomain是否设定来决定返回的url，如果cdnDomain未设置，则使用endpoint来生成url，否则使用cdn
                'ssl'          => env('ALI_OSS_SSL', false), // true to use 'https://' and false to use 'http://'. default is false,
                'isCName'      => env('ALI_OSS_IS_CNAME', false), // 是否使用自定义域名,true: 则Storage.url()会使用自定义的cdn或域名生成文件url， false: 则使用外部节点生成url
                'debug'        => env('ALI_OSS_DEBUG', false),
                'sts_role_arn' => env('ALI_OSS_STS_ROLE_ARN', ''),//用于创建临时权限
                'prefix'       => env('ALI_OSS_PREFIX', ''),
    
            ],
    ]
 ];
```

## 参考
[jacobcyl/ali-oss-storage](https://github.com/jacobcyl/Aliyun-oss-storage)
