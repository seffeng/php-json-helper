<?php
/**
 * @link http://github.com/seffeng/
 * @copyright Copyright (c) 2022 seffeng
 */
namespace Seffeng\JsonHelper\Traits;

Trait JsonTrait
{
    /**
     *
     * @author zxf
     * @date   2020年5月21日
     * @param  mixed $value
     * @param  integer $options
     * @param  integer $depth
     * @return string
     */
    public static function encode($value, int $options = 0, int $depth = 512)
    {
        try {
            return json_encode($value, $options, $depth);
        } catch (\Exception $e) {
            return json_encode([], $options);
        }
    }

    /**
     *
     * @author zxf
     * @date   2020年5月21日
     * @param  string $json
     * @param  boolean $asArray
     * @return array|\stdClass
     */
    public static function decode(string $json, bool $asArray = true)
    {
        try {
            return json_decode($json, $asArray);
        } catch (\Exception $e) {
            return $asArray ? [] : (new \stdClass());
        }
    }
}
