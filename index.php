<?php

readonly class User {
    public int $uid;
    public string $username;
}

$test = new User();

$test->$uid = 12;


trait FooBar {
    const FOO = 'foo';
    private const BAR = 'bar';
    final const BAZ = 'baz';
    final protected const QUX = 'qux';
}

class Test {
    use FooBar;
}

echo Test::FOO;

#[\AllowDynamicProperties]
class Foo {

}


class UserT
{
    public int $id;
    public ?string $name;

    public function __construct(int $id, ?string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
}

$user = new UserT(1234, null);

var_dump($user->id);
var_dump($user->name);