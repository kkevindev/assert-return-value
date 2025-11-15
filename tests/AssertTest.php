<?php

declare(strict_types=1);

namespace Kkevindev\AssertReturnValue\Tests;

use Webmozart\Assert\Assert as WebmozartAssert;
use Kkevindev\AssertReturnValue\Assert;
use PHPUnit\Framework\TestCase;

final class AssertTest extends TestCase
{
    public function testAllPublicFunctionsAreDefined(): void
    {
        $reflectionAssert = new \ReflectionClass(Assert::class);
        $reflectionWebmozartAssert = new \ReflectionClass(WebmozartAssert::class);

        $actual = $this->extractPublicStaticMethodsFromReflectionClass($reflectionAssert);
        $expected = $this->extractPublicStaticMethodsFromReflectionClass($reflectionWebmozartAssert);

        self::assertEqualsCanonicalizing($actual, $expected, 'All public static methods of WebmozartAssert must be defined in Assert.');
    }

    /**
     * @return string[]
     */
    private function extractPublicStaticMethodsFromReflectionClass(\ReflectionClass $reflectionClass): array
    {
        return array_map(
            static function (\ReflectionMethod $method) {
                return $method->getName();
            },
            $reflectionClass->getMethods(\ReflectionMethod::IS_STATIC | \ReflectionMethod::IS_PUBLIC)
        );
    }

    public function testString(): void
    {
        $value = 'test';

        $this->assertSame($value, Assert::string($value));
    }

    public function testStringNotEmpty(): void
    {
        $value = 'foo';

        $this->assertSame($value, Assert::stringNotEmpty($value));
    }

    public function testInteger(): void
    {
        $value = 42;

        $this->assertSame($value, Assert::integer($value));
    }

    public function testIntegerish(): void
    {
        $value = '123';

        $this->assertSame($value, Assert::integerish($value));
    }

    public function testPositiveInteger(): void
    {
        $value = 7;

        $this->assertSame($value, Assert::positiveInteger($value));
    }

    public function testFloat(): void
    {
        $value = 3.14;

        $this->assertSame($value, Assert::float($value));
    }

    public function testNumeric(): void
    {
        $value = '10.5';

        $this->assertSame($value, Assert::numeric($value));
    }

    public function testNatural(): void
    {
        $value = 1;

        $this->assertSame($value, Assert::natural($value));
    }

    public function testBoolean(): void
    {
        $value = true;

        $this->assertSame($value, Assert::boolean($value));
    }

    public function testScalar(): void
    {
        $value = 'scalar';

        $this->assertSame($value, Assert::scalar($value));
    }

    public function testObject(): void
    {
        $value = new \stdClass();

        $this->assertSame($value, Assert::object($value));
    }

    public function testResource(): void
    {
        $value = tmpfile();

        $this->assertSame($value, Assert::resource($value));
        fclose($value);
    }

    public function testIsCallable(): void
    {
        $value = function (): void {};

        $this->assertSame($value, Assert::isCallable($value));
    }

    public function testIsArray(): void
    {
        $value = [1, 2, 3];

        $this->assertSame($value, Assert::isArray($value));
    }

    public function testIsTraversable(): void
    {
        $value = new \ArrayIterator([1, 2, 3]);

        $this->assertSame($value, Assert::isTraversable($value));
    }

    public function testIsArrayAccessible(): void
    {
        $value = [1, 2, 3];

        $this->assertSame($value, Assert::isArrayAccessible($value));
    }

    public function testIsCountable(): void
    {
        $value = [1, 2, 3];

        $this->assertSame($value, Assert::isCountable($value));
    }

    public function testIsIterable(): void
    {
        $value = [1, 2, 3];

        $this->assertSame($value, Assert::isIterable($value));
    }

    public function testIsInstanceOf(): void
    {
        $value = new \ArrayObject();

        $this->assertSame($value, Assert::isInstanceOf($value, \ArrayObject::class));
    }

    public function testNotInstanceOf(): void
    {
        $value = new \ArrayObject();

        $this->assertSame($value, Assert::notInstanceOf($value, \stdClass::class));
    }

    public function testIsInstanceOfAny(): void
    {
        $value = new \ArrayObject();

        $this->assertSame($value, Assert::isInstanceOfAny($value, [\ArrayObject::class, \stdClass::class]));
    }

    public function testIsAOf(): void
    {
        $value = new \ArrayObject();

        $this->assertSame($value, Assert::isAOf($value, \ArrayObject::class));
    }

    public function testIsNotA(): void
    {
        $value = new \ArrayObject();

        $this->assertSame($value, Assert::isNotA($value, \stdClass::class));
    }

    public function testIsAnyOf(): void
    {
        $value = new \ArrayObject();

        $this->assertSame($value, Assert::isAnyOf($value, [\ArrayObject::class, \stdClass::class]));
    }

    public function testIsEmpty(): void
    {
        $value = [];

        $this->assertSame($value, Assert::isEmpty($value));
    }

    public function testNotEmpty(): void
    {
        $value = [1];

        $this->assertSame($value, Assert::notEmpty($value));
    }

    public function testNull(): void
    {
        $value = null;

        $this->assertSame($value, Assert::null($value));
    }

    public function testNotNull(): void
    {
        $value = 'foo';

        $this->assertSame($value, Assert::notNull($value));
    }

    public function testTrue(): void
    {
        $value = true;

        $this->assertSame($value, Assert::true($value));
    }

    public function testFalse(): void
    {
        $value = false;

        $this->assertSame($value, Assert::false($value));
    }

    public function testNotFalse(): void
    {
        $value = true;

        $this->assertSame($value, Assert::notFalse($value));
    }

    public function testIp(): void
    {
        $value = '127.0.0.1';

        $this->assertSame($value, Assert::ip($value));
    }

    public function testIpv4(): void
    {
        $value = '192.168.0.1';

        $this->assertSame($value, Assert::ipv4($value));
    }

    public function testIpv6(): void
    {
        $value = '::1';

        $this->assertSame($value, Assert::ipv6($value));
    }

    public function testEmail(): void
    {
        $value = 'user@example.com';

        $this->assertSame($value, Assert::email($value));
    }

    public function testUniqueValues(): void
    {
        $values = [1, 2, 3];

        $this->assertSame($values, Assert::uniqueValues($values));
    }

    public function testEq(): void
    {
        $value = 10;

        $this->assertSame($value, Assert::eq($value, 10));
    }

    public function testNotEq(): void
    {
        $value = 10;

        $this->assertSame($value, Assert::notEq($value, 5));
    }

    public function testSame(): void
    {
        $value = 'foo';

        $this->assertSame($value, Assert::same($value, $value));
    }

    public function testNotSame(): void
    {
        $value = 'foo';

        $this->assertSame($value, Assert::notSame($value, 'bar'));
    }

    public function testGreaterThan(): void
    {
        $value = 10;

        $this->assertSame($value, Assert::greaterThan($value, 5));
    }

    public function testGreaterThanEq(): void
    {
        $value = 10;

        $this->assertSame($value, Assert::greaterThanEq($value, 10));
    }

    public function testLessThan(): void
    {
        $value = 5;

        $this->assertSame($value, Assert::lessThan($value, 10));
    }

    public function testLessThanEq(): void
    {
        $value = 5;

        $this->assertSame($value, Assert::lessThanEq($value, 5));
    }

    public function testRange(): void
    {
        $value = 5;

        $this->assertSame($value, Assert::range($value, 1, 10));
    }

    public function testOneOf(): void
    {
        $value = 'b';

        $this->assertSame($value, Assert::oneOf($value, ['a', 'b', 'c']));
    }

    public function testInArray(): void
    {
        $value = 'b';

        $this->assertSame($value, Assert::inArray($value, ['a', 'b', 'c']));
    }

    public function testContains(): void
    {
        $value = 'hello world';

        $this->assertSame($value, Assert::contains($value, 'world'));
    }

    public function testNotContains(): void
    {
        $value = 'hello world';

        $this->assertSame($value, Assert::notContains($value, 'foo'));
    }

    public function testNotWhitespaceOnly(): void
    {
        $value = 'foo';

        $this->assertSame($value, Assert::notWhitespaceOnly($value));
    }

    public function testStartsWith(): void
    {
        $value = 'foobar';

        $this->assertSame($value, Assert::startsWith($value, 'foo'));
    }

    public function testNotStartsWith(): void
    {
        $value = 'foobar';

        $this->assertSame($value, Assert::notStartsWith($value, 'bar'));
    }

    public function testStartsWithLetter(): void
    {
        $value = 'foobar';

        $this->assertSame($value, Assert::startsWithLetter($value));
    }

    public function testEndsWith(): void
    {
        $value = 'foobar';

        $this->assertSame($value, Assert::endsWith($value, 'bar'));
    }

    public function testNotEndsWith(): void
    {
        $value = 'foobar';

        $this->assertSame($value, Assert::notEndsWith($value, 'foo'));
    }

    public function testRegex(): void
    {
        $value = 'abc123';

        $this->assertSame($value, Assert::regex($value, '/^[a-z]+\d+$/'));
    }

    public function testNotRegex(): void
    {
        $value = 'abc';

        $this->assertSame($value, Assert::notRegex($value, '/\d+/'));
    }

    public function testUnicodeLetters(): void
    {
        $value = 'áéíóú';

        $this->assertSame($value, Assert::unicodeLetters($value));
    }

    public function testAlpha(): void
    {
        $value = 'foobar';

        $this->assertSame($value, Assert::alpha($value));
    }

    public function testDigits(): void
    {
        $value = '12345';

        $this->assertSame($value, Assert::digits($value));
    }

    public function testAlnum(): void
    {
        $value = 'abc123';

        $this->assertSame($value, Assert::alnum($value));
    }

    public function testLower(): void
    {
        $value = 'abc';

        $this->assertSame($value, Assert::lower($value));
    }

    public function testUpper(): void
    {
        $value = 'ABC';

        $this->assertSame($value, Assert::upper($value));
    }

    public function testLength(): void
    {
        $value = 'abcd';

        $this->assertSame($value, Assert::length($value, 4));
    }

    public function testMinLength(): void
    {
        $value = 'abcd';

        $this->assertSame($value, Assert::minLength($value, 4));
    }

    public function testMaxLength(): void
    {
        $value = 'abcd';

        $this->assertSame($value, Assert::maxLength($value, 4));
    }

    public function testLengthBetween(): void
    {
        $value = 'abcd';

        $this->assertSame($value, Assert::lengthBetween($value, 2, 4));
    }

    public function testFileExistsAndFileAndReadableAndWritableAndDirectory(): void
    {
        $dir = sys_get_temp_dir() . '/assert_return_value';
        $file = $dir . '/file.txt';

        if (!is_dir($dir)) {
            mkdir($dir);
        }

        file_put_contents($file, 'content');

        $this->assertSame($file, Assert::fileExists($file));
        $this->assertSame($file, Assert::file($file));
        $this->assertSame($file, Assert::readable($file));
        $this->assertSame($file, Assert::writable($file));
        $this->assertSame($dir, Assert::directory($dir));

        unlink($file);
        rmdir($dir);
    }

    public function testClassExists(): void
    {
        $value = DummyClass::class;

        $this->assertSame($value, Assert::classExists($value));
    }

    public function testSubclassOf(): void
    {
        $value = DummyChildClass::class;

        $this->assertSame($value, Assert::subclassOf($value, DummyClass::class));
    }

    public function testInterfaceExists(): void
    {
        $value = DummyInterface::class;

        $this->assertSame($value, Assert::interfaceExists($value));
    }

    public function testImplementsInterface(): void
    {
        $value = DummyClassImplementsDummyInterface::class;

        $this->assertSame($value, Assert::implementsInterface($value, DummyInterface::class));
    }

    public function testPropertyExists(): void
    {
        $object = new DummyClassWithBarProperty();

        $this->assertSame($object, Assert::propertyExists($object, 'foo'));
    }

    public function testMethodExists(): void
    {
        $object = new DummyClassWithBarMethod();

        $this->assertSame($object, Assert::methodExists($object, 'bar'));
    }

    public function testMethodNotExists(): void
    {
        $object = new DummyClassWithBarMethod();

        $this->assertSame($object, Assert::methodNotExists($object, 'baz'));
    }

    public function testKeyExists(): void
    {
        $array = ['foo' => 'bar'];

        $this->assertSame($array, Assert::keyExists($array, 'foo'));
    }

    public function testKeyNotExists(): void
    {
        $array = ['foo' => 'bar'];

        $this->assertSame($array, Assert::keyNotExists($array, 'baz'));
    }

    public function testValidArrayKey(): void
    {
        $value = 'key';

        $this->assertSame($value, Assert::validArrayKey($value));
    }

    public function testCount(): void
    {
        $array = [1, 2, 3];

        $this->assertSame($array, Assert::count($array, 3));
    }

    public function testMinCount(): void
    {
        $array = [1, 2, 3];

        $this->assertSame($array, Assert::minCount($array, 3));
    }

    public function testMaxCount(): void
    {
        $array = [1, 2, 3];

        $this->assertSame($array, Assert::maxCount($array, 3));
    }

    public function testCountBetween(): void
    {
        $array = [1, 2, 3];

        $this->assertSame($array, Assert::countBetween($array, 1, 3));
    }

    public function testIsList(): void
    {
        $array = [1, 2, 3];

        $this->assertSame($array, Assert::isList($array));
    }

    public function testIsNonEmptyList(): void
    {
        $array = [1];

        $this->assertSame($array, Assert::isNonEmptyList($array));
    }

    public function testIsMap(): void
    {
        $array = ['foo' => 'bar'];

        $this->assertSame($array, Assert::isMap($array));
    }

    public function testIsNonEmptyMap(): void
    {
        $array = ['foo' => 'bar'];

        $this->assertSame($array, Assert::isNonEmptyMap($array));
    }

    public function testUuid(): void
    {
        $value = '123e4567-e89b-12d3-a456-426614174000';

        $this->assertSame($value, Assert::uuid($value));
    }

    public function testThrows(): void
    {
        $expression = function (): void {
            throw new \RuntimeException('error');
        };

        $this->assertSame($expression, Assert::throws($expression, \RuntimeException::class));
    }
}

interface DummyInterface
{
}

class DummyClassImplementsDummyInterface implements DummyInterface
{
}

class DummyClass
{
}

class DummyChildClass extends DummyClass
{
}

class DummyClassWithBarProperty
{
    public $foo = 'bar';
}

class DummyClassWithBarMethod
{
    public function bar(): void
    {
    }
}
