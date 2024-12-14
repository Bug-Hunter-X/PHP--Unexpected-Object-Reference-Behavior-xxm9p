To solve the object reference issue, utilize PHP's cloning mechanism or manually copy object properties.

Using Cloning:
```php
class MyClass {
    public $value = 10;
    public function __clone() {
        // You might need additional cloning logic for complex object properties
    }
}

$obj1 = new MyClass();
$obj2 = clone $obj1; // Explicit cloning
$obj2->value = 20;

echo $obj1->value; // Outputs 10
echo $obj2->value; // Outputs 20
```

Manual Property Copying (for simpler classes):
```php
class MyClass {
    public $value = 10;
}

$obj1 = new MyClass();
$obj2 = new MyClass(); // Create a new instance
$obj2->value = $obj1->value; // Manual copy of the property
$obj2->value = 20;

echo $obj1->value; // Outputs 10
echo $obj2->value; // Outputs 20
```
The cloning method is generally preferred for more complex classes to handle deep copies of nested objects and properties.