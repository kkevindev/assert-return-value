# Assert Return Value (ARV)
![Quality Assurance](https://github.com/kkevindev/assert-return-value/actions/workflows/quality_assurance.yaml.yml/badge.svg?branch=main)

This library uses `webmozart/assert` to assert values with the added benefit of returning the value.

## Installation
Use [Composer](https://getcomposer.org/) to install the package:

```bash
composer require kkevindev/assert-return-value
```

## Versioning
This libary follows the versioning of `webmozart/assert` with the addition of a patch version used for patching this library on the same `webmozart/assert` version.

| `webmozart/assert` | `kkevindev/assert-return-value` | Notes                                                                      |
|--------------------|---------------------------------|----------------------------------------------------------------------------|
| `1.11.0`           | `1.11.0.0`                      | Add support for `webmozart/assert:1.11.0`                                  |
| `1.11.0`           | `1.11.0.1`                      | Fixed a bug in this package. Still only supports `webmozart/assert:1.11.0` |
| `1.11.0`           | `1.11.0.2`                      | Fixed a bug in this package. Still only supports `webmozart/assert:1.11.0` |
| `1.11.1`           | `1.11.1.0`                      | Add support for `webmozart/assert:1.11.1`                                  |
| `1.12.0`           | `1.12.0.0`                      | Add support for `webmozart/assert:1.12.0`                                  |
| `1.12.0`           | `1.12.0.1`                      | Fixed a bug in this package. Still only supports `webmozart/assert:1.12.0` |

## Usage
Given the follwing code:
```php
class User {
    public function __construct(
        public string $name,
        public string $email,
        public string $role,
    ) {
    }
}

class UserDto {
    public ?string $name = null;
    public ?string $email = null;
    public ?string $role = null;
}
```

This library allows you to write code like this:
```php
use Webmozart\Assert\Assert as WebmozartAssert;
use Kkevindev\AssertReturnValue\Assert;

public function create(UserDto $userDto): User
{
    return new User(
       name: Assert::stringNotEmpty($userDto->name),
       email: Assert::stringNotEmpty($userDto->email),
       role: Assert::stringNotEmpty($userDto->role),
    );
}
```

Instead of:
```php
use Webmozart\Assert\Assert as WebmozartAssert;
use Kkevindev\AssertReturnValue\Assert;

public function create(UserDto $userDto): User
{
    $name = $userDto->name;
    WebmozartAssert::stringNotEmpty($name);
    
    $email = $userDto->email;
    WebmozartAssert::stringNotEmpty($email);
    
    $role = $userDto->role;
    WebmozartAssert::stringNotEmpty($role);
    
    return new User(
        name: $name,
        email: $email,
        role: $role,
    );
}
```