In PHP, a common yet subtle error arises when dealing with object references and assignments.  Consider this scenario:

```php
class MyClass {
    public $value = 10;
}

$obj1 = new MyClass();
$obj2 = $obj1; // Assignment, not cloning
$obj2->value = 20;

echo $obj1->value; // Outputs 20, not 10
```

This code unexpectedly outputs 20.  Because PHP uses pass-by-value for objects (meaning it passes a copy of the object's *handle* or reference), `$obj2` is not a distinct object; it's an alias for `$obj1`. Any changes made through `$obj2` directly affect `$obj1`.

This behavior often contradicts expectations from programmers coming from languages with true pass-by-value semantics for objects. It can lead to unexpected side effects and difficult-to-debug situations.