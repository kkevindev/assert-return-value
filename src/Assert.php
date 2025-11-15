<?php

declare(strict_types=1);

namespace Kkevindev\AssertReturnValue;

use Closure;
use Webmozart\Assert\Assert as WebmozartAssert;

class Assert extends WebmozartAssert
{
    public static function string($value, $message = ''): string
    {
        parent::string($value, $message);

        return $value;
    }

    public static function stringNotEmpty($value, $message = ''): string
    {
        parent::stringNotEmpty($value, $message);

        return $value;
    }

    public static function integer($value, $message = ''): int
    {
        parent::integer($value, $message);

        return $value;
    }

    public static function integerish($value, $message = ''): float|int|string
    {
        parent::integerish($value, $message);

        return $value;
    }

    public static function positiveInteger($value, $message = ''): int
    {
        parent::positiveInteger($value, $message);

        return $value;
    }

    public static function float($value, $message = ''): float
    {
        parent::float($value, $message);

        return $value;
    }

    /**
     * @psalm-return scalar
     */
    public static function numeric($value, $message = '')
    {
        parent::numeric($value, $message);

        return $value;
    }

    public static function natural($value, $message = ''): int
    {
        parent::natural($value, $message);

        return $value;
    }

    public static function boolean($value, $message = ''): bool
    {
        parent::boolean($value, $message);

        return $value;
    }

    /**
     * @psalm-return scalar
     */
    public static function scalar($value, $message = '')
    {
        parent::scalar($value, $message);

        return $value;
    }

    public static function object($value, $message = ''): object
    {
        parent::object($value, $message);

        return $value;
    }

    /**
     * @psalm-return resource
     */
    public static function resource($value, $type = null, $message = '')
    {
        parent::resource($value, $type, $message);

        return $value;
    }

    public static function isCallable($value, $message = '')
    {
        parent::isCallable($value, $message);

        return $value;
    }

    public static function isArray($value, $message = '')
    {
        parent::isArray($value, $message);

        return $value;
    }

    public static function isTraversable($value, $message = '')
    {
        parent::isTraversable($value, $message);

        return $value;
    }

    public static function isArrayAccessible($value, $message = '')
    {
        parent::isArrayAccessible($value, $message);

        return $value;
    }

    public static function isCountable($value, $message = '')
    {
        parent::isCountable($value, $message);

        return $value;
    }

    public static function isIterable($value, $message = '')
    {
        parent::isIterable($value, $message);

        return $value;
    }

    public static function isInstanceOf($value, $class, $message = '')
    {
        parent::isInstanceOf($value, $class, $message);

        return $value;
    }

    public static function notInstanceOf($value, $class, $message = '')
    {
        parent::notInstanceOf($value, $class, $message);

        return $value;
    }

    public static function isInstanceOfAny($value, array $classes, $message = '')
    {
        parent::isInstanceOfAny($value, $classes, $message);

        return $value;
    }

    public static function isAOf($value, $class, $message = '')
    {
        parent::isAOf($value, $class, $message);

        return $value;
    }

    public static function isNotA($value, $class, $message = '')
    {
        parent::isNotA($value, $class, $message);

        return $value;
    }

    public static function isAnyOf($value, array $classes, $message = '')
    {
        parent::isAnyOf($value, $classes, $message);

        return $value;
    }

    public static function isEmpty($value, $message = '')
    {
        parent::isEmpty($value, $message);

        return $value;
    }

    public static function notEmpty($value, $message = '')
    {
        parent::notEmpty($value, $message);

        return $value;
    }

    /**
     * @return null
     */
    public static function null($value, $message = '')
    {
        parent::null($value, $message);

        return $value;
    }

    public static function notNull($value, $message = '')
    {
        parent::notNull($value, $message);

        return $value;
    }

    public static function true($value, $message = '')
    {
        parent::true($value, $message);

        return $value;
    }

    public static function false($value, $message = '')
    {
        parent::false($value, $message);

        return $value;
    }

    public static function notFalse($value, $message = '')
    {
        parent::notFalse($value, $message);

        return $value;
    }

    public static function ip($value, $message = '')
    {
        parent::ip($value, $message);

        return $value;
    }

    public static function ipv4($value, $message = '')
    {
        parent::ipv4($value, $message);

        return $value;
    }

    public static function ipv6($value, $message = '')
    {
        parent::ipv6($value, $message);

        return $value;
    }

    public static function email($value, $message = '')
    {
        parent::email($value, $message);

        return $value;
    }

    public static function uniqueValues(array $values, $message = '')
    {
        parent::uniqueValues($values, $message);

        return $values;
    }

    public static function eq($value, $expect, $message = '')
    {
        parent::eq($value, $expect, $message);

        return $value;
    }

    public static function notEq($value, $expect, $message = '')
    {
        parent::notEq($value, $expect, $message);

        return $value;
    }

    public static function same($value, $expect, $message = '')
    {
        parent::same($value, $expect, $message);

        return $value;
    }

    public static function notSame($value, $expect, $message = '')
    {
        parent::notSame($value, $expect, $message);

        return $value;
    }

    public static function greaterThan($value, $limit, $message = '')
    {
        parent::greaterThan($value, $limit, $message);

        return $value;
    }

    public static function greaterThanEq($value, $limit, $message = '')
    {
        parent::greaterThanEq($value, $limit, $message);

        return $value;
    }

    public static function lessThan($value, $limit, $message = '')
    {
        parent::lessThan($value, $limit, $message);

        return $value;
    }

    public static function lessThanEq($value, $limit, $message = '')
    {
        parent::lessThanEq($value, $limit, $message);

        return $value;
    }

    public static function range($value, $min, $max, $message = '')
    {
        parent::range($value, $min, $max, $message);

        return $value;
    }

    public static function oneOf($value, array $values, $message = '')
    {
        parent::oneOf($value, $values, $message);

        return $value;
    }

    public static function inArray($value, array $values, $message = '')
    {
        parent::inArray($value, $values, $message);

        return $value;
    }

    public static function contains($value, $subString, $message = '')
    {
        parent::contains($value, $subString, $message);

        return $value;
    }

    public static function notContains($value, $subString, $message = '')
    {
        parent::notContains($value, $subString, $message);

        return $value;
    }

    public static function notWhitespaceOnly($value, $message = '')
    {
        parent::notWhitespaceOnly($value, $message);

        return $value;
    }

    public static function startsWith($value, $prefix, $message = '')
    {
        parent::startsWith($value, $prefix, $message);

        return $value;
    }

    public static function notStartsWith($value, $prefix, $message = '')
    {
        parent::notStartsWith($value, $prefix, $message);

        return $value;
    }

    public static function startsWithLetter($value, $message = '')
    {
        parent::startsWithLetter($value, $message);

        return $value;
    }

    public static function endsWith($value, $suffix, $message = '')
    {
        parent::endsWith($value, $suffix, $message);

        return $value;
    }

    public static function notEndsWith($value, $suffix, $message = '')
    {
        parent::notEndsWith($value, $suffix, $message);

        return $value;
    }

    public static function regex($value, $pattern, $message = '')
    {
        parent::regex($value, $pattern, $message);

        return $value;
    }

    public static function notRegex($value, $pattern, $message = '')
    {
        parent::notRegex($value, $pattern, $message);

        return $value;
    }

    public static function unicodeLetters($value, $message = '')
    {
        parent::unicodeLetters($value, $message);

        return $value;
    }

    public static function alpha($value, $message = '')
    {
        parent::alpha($value, $message);

        return $value;
    }

    public static function digits($value, $message = '')
    {
        parent::digits($value, $message);

        return $value;
    }

    public static function alnum($value, $message = '')
    {
        parent::alnum($value, $message);

        return $value;
    }

    public static function lower($value, $message = '')
    {
        parent::lower($value, $message);

        return $value;
    }

    public static function upper($value, $message = '')
    {
        parent::upper($value, $message);

        return $value;
    }

    public static function length($value, $length, $message = '')
    {
        parent::length($value, $length, $message);

        return $value;
    }

    public static function minLength($value, $min, $message = '')
    {
        parent::minLength($value, $min, $message);

        return $value;
    }

    public static function maxLength($value, $max, $message = '')
    {
        parent::maxLength($value, $max, $message);

        return $value;
    }

    public static function lengthBetween($value, $min, $max, $message = '')
    {
        parent::lengthBetween($value, $min, $max, $message);

        return $value;
    }

    public static function fileExists($value, $message = '')
    {
        parent::fileExists($value, $message);

        return $value;
    }

    public static function file($value, $message = '')
    {
        parent::file($value, $message);

        return $value;
    }

    public static function directory($value, $message = '')
    {
        parent::directory($value, $message);

        return $value;
    }

    public static function readable($value, $message = '')
    {
        parent::readable($value, $message);

        return $value;
    }

    public static function writable($value, $message = '')
    {
        parent::writable($value, $message);

        return $value;
    }

    public static function classExists($value, $message = '')
    {
        parent::classExists($value, $message);

        return $value;
    }

    public static function subclassOf($value, $class, $message = '')
    {
        parent::subclassOf($value, $class, $message);

        return $value;
    }

    public static function interfaceExists($value, $message = '')
    {
        parent::interfaceExists($value, $message);

        return $value;
    }

    public static function implementsInterface($value, $interface, $message = '')
    {
        parent::implementsInterface($value, $interface, $message);

        return $value;
    }

    public static function propertyExists($classOrObject, $property, $message = '')
    {
        parent::propertyExists($classOrObject, $property, $message);

        return $classOrObject;
    }

    public static function methodExists($classOrObject, $method, $message = '')
    {
        parent::methodExists($classOrObject, $method, $message);

        return $classOrObject;
    }

    public static function methodNotExists($classOrObject, $method, $message = '')
    {
        parent::methodNotExists($classOrObject, $method, $message);

        return $classOrObject;
    }

    public static function keyExists($array, $key, $message = '')
    {
        parent::keyExists($array, $key, $message);

        return $array;
    }

    public static function keyNotExists($array, $key, $message = '')
    {
        parent::keyNotExists($array, $key, $message);

        return $array;
    }

    public static function validArrayKey($value, $message = '')
    {
        parent::validArrayKey($value, $message);

        return $value;
    }

    public static function count($array, $number, $message = '')
    {
        parent::count($array, $number, $message);

        return $array;
    }

    public static function minCount($array, $min, $message = '')
    {
        parent::minCount($array, $min, $message);

        return $array;
    }

    public static function maxCount($array, $max, $message = '')
    {
        parent::maxCount($array, $max, $message);

        return $array;
    }

    public static function countBetween($array, $min, $max, $message = '')
    {
        parent::countBetween($array, $min, $max, $message);

        return $array;
    }

    public static function isList($array, $message = '')
    {
        parent::isList($array, $message);

        return $array;
    }

    public static function isNonEmptyList($array, $message = '')
    {
        parent::isNonEmptyList($array, $message);

        return $array;
    }

    public static function isMap($array, $message = '')
    {
        parent::isMap($array, $message);

        return $array;
    }

    public static function isNonEmptyMap($array, $message = '')
    {
        parent::isNonEmptyMap($array, $message);

        return $array;
    }

    public static function uuid($value, $message = '')
    {
        parent::uuid($value, $message);

        return $value;
    }

    public static function throws(Closure $expression, $class = 'Exception', $message = '')
    {
        parent::throws($expression, $class, $message);

        return $expression;
    }
}
