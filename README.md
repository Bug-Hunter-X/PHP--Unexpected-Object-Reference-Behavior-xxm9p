# PHP Object Reference Bug

This repository demonstrates a common yet easily overlooked issue in PHP involving object references and assignment.  When assigning one object to another in PHP, it's not creating a deep copy; instead, it creates a second reference to the same object in memory. Modifying the object through either reference changes the object's state for both.

**The Problem:**
The core issue is that PHP uses pass-by-value for objects, but the value is a reference to the object, not a copy of its data.   This can be confusing if you're expecting pass-by-value behavior like you would find in languages such as Java or C#.

**The Solution:**
To create a distinct copy of an object, you should explicitly use PHP's cloning mechanism or create a new object and manually copy its properties.

**Files:**
* `bug.php`: Demonstrates the erroneous behavior.
* `bugSolution.php`: Presents the corrected code using cloning.