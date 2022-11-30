# PhpSms

Forked from toplan/phpsms, fewer features, more possibilities.

- forked from [toplan/phpsms](https://github.com/toplan/phpsms)
- removed non-mainstream sms agents, only support `Aliyun`, `QCloud` and `SmsBao`
- removed Laravel support
- removed dependencies on `toplan/task-balancer` and `jeremeamia/superclosure`
- fixed psr-4 support

### 安装

```shell
composer require lucups/phpsms
```

### 使用

```php
use Lucups\PhpSms\Sms;

require_once __DIR__ . '/vendor/autoload.php';

Sms::config(['Aliyun' => [
    'accessKeyId'     => 'xxxxxxx',
    'accessKeySecret' => 'xxxxxxx',
    'signName'        => 'xxxxxxx',
]]);
Sms::scheme(['Aliyun' => '100']);

return Sms::make()
    ->to('13400000000')
    ->template(['Aliyun' => 'SMS_12345678'])
    ->data(['code' => '123456'])
    ->send();
```

### 支持的短信服务商

| 服务商 | 模板短信 | 内容短信 | 语音验证码 | 最低消费  |  最低消费单价 | 资费标准
| ----- | :-----: | :-----: | :------: | :-------: | :-----: | :-----:
| [短信宝](http://www.smsbao.com/)          | × | √ | √ | ￥5(50条) | ￥0.040/条(100万条) | [资费标准](http://www.smsbao.com/fee/)
| [腾讯云](https://www.qcloud.com/product/sms) | √ | √ | √ | -- | ￥0.045/条 | [资费标准](https://www.qcloud.com/product/sms#price)
| [阿里云](https://www.aliyun.com/product/sms) | √ | × | × | -- | ￥0.045/条 | [资费标准](https://cn.aliyun.com/price/product#/mns/detail)

# License

MIT
