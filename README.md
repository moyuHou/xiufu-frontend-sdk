# 汇众联合-member服务-sdk

## 概述

用于集成在内部服务间调用`member`服务使用的`SDK-php`服务, 减少冗余代码, 和重复代码开发.

## 目录

* [安装说明](#install)
* [使用说明](#description)
* [版本](#version)
* [项目字典](#dictionary)

### <a name="install">安装说明</a>

`composer`安装

### <a name="description">使用说明</a>

* [初始化](#sdk-init)
* [错误处理](#sdk-error)
* [定制参数](#sdk-scenario)
* [返回示例](#sdk-return)
* [用户功能列表](./docs/member-sdk.md)
* [企业功能列表](./docs/enterprise-sdk.md)
* [认证功能](./docs/enterprise-auth-sdk.md)


#### <a name="sdk-init">初始化</a>

```php
$sdk = new Sdk\Member\Sdk('接口地址', array('apikey'=>'密钥'));
```

#### <a name="sdk-error">错误处理</a>

我们请求一个不存在用户

```php
$member = $sdk->memberRepository()->scenario(array('fields'=>['members'=>'cellphone']))->fetchOne(10);
```

这里我们会返回一个**`NullMember`**, 如果是搜索或者请求多个数据则会返回**空数组**

获取接口返回错误`id`

```php
$sdk->memberRepository()->lastErrorId()
...
10
```

获取接口返回错误信息

```php
$sdk->memberRepository()->lastErrorInfo()
...
array(1) {
  'errors' =>
  array(1) {
    [0] =>
    array(8) {
      'id' =>
      string(2) "10"
      'links' =>
      array(1) {
        ...
      }
      'status' =>
      string(3) "404"
      'code' =>
      string(18) "RESOURCE_NOT_EXIST"
      'title' =>
      string(18) "Resource not exist"
      'detail' =>
      string(28) "Server can not find resource"
      'source' =>
      array(0) {
        ...
      }
      'meta' =>
      array(0) {
        ...
      }
    }
  }
}
```

#### <a name="sdk-scenario">定制参数</a>

`scenario`内使用数组格式填写`jsonapi`的`fields`和`include`.

```php
$member = $sdk->memberRepository()->scenario(array('fields'=>['members'=>'cellphone']))->fetchOne(1);
```

#### <a name="sdk-return">返回示例</a>

* 单个获取: 返回对象
* 获取多个,搜索: `array(int $count, array $objectList)`

### <a name="version">版本</a>

* [0.1.0](./docs/version/0.1.0.md "0.1.0")

### <a name="dictionary">项目字典</a>

企业, 用户等通用词汇沿用[huizhonglianhe-backend-member](https://code.aliyun.com/huizhonglianhe/huizhonglianhe-backend-member/tree/master)的项目字典.

* 认证`authentication`