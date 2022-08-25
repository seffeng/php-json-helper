## PHP Helpers

### 安装

```shell
# 安装
$ composer require seffeng/json-helper
```

### 目录说明

```
|---src
|   |   Json.php
|   |---Traits
|           JsonTrait.php
|---tests
|       JsonTest.php
```

### 示例

```php
/**
 * TestController.php
 * 示例
 */
namespace App\Http\Controllers;

use Seffeng\JsonHelper\Json;

class TestController extends Controller
{
    public function index()
    {
        $arr = [
            'a' => [
                'b' => [
                    'c' => 'ccc'
                ]
            ],
            'd' => [
                'b' => 'ccc',
                'e' => [
                    'f' => 'hhh'
                ]
            ]
        ];
        $json = Json::encode($arr);
        var_dump($json);
        print_r(Json::decode($json));
    }
}
```

### 备注

1、更多示例请参考 tests 目录下测试文件。