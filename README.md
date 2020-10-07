# php-class-0510

Demonstration of PHP Classes in October 5, 2020 Class

This is the repository that goes with Web Tech 2020 Classes 10 and 11 and serves as the
basis of a short PHP assignment

## Using this file

After the file is cloned; it can be used as the basis of the assignment. The recommendation is to clone the repository under the `htdocs` directory of Apache. In the default XAMPP case on Windows, clone it to an 'objects' directory with the following command:

```bash
git clone https://AshWeb2020/php-class-0510.git c:\xampp\htdocs\objects
```

the step directions assume you are running git with the current directory at the root of the repository on your local machines; e.g. `c:\xampp\htdocs\objects` for the case demonstrated above.

This will place it in the objects directory; and when xampp is running you can access the repository with http://localhost/objects which will open `index.php`. index.php and student.php are the two active files.

After step-0, only index.php is used. Steps after one use a url 'GET' parameter to determine which menus to show. For example, to show menus as a faculty member, navigate to http://localhost/objects/index.php?role=1

## Switching steps to earlier spots in class

The class slides have a series of steps. You can go to any of the steps in the coding using:

```bash
git checkout tags/<step#>
```

Once at that step, you are free to change code or try to move to the next step yourself. You can save your changes to merge in later with `git stash`; or you can git rid of them to switch to a later or earlier step with `git restore` and the files you modified; or `git restore .` in the root directory of the repository.

Here are the steps and what's happening at each one

### tag name: step-0 Separate Menus for Student and Faculty

command: `git checkout tags/step-0 -b master`

This is where we started in the class. files `index.php` with some static html menus for faculty and `student.php` with static files for the menus a student sees. Nothing special; and no php as part of the this step.

### tag name: step-1

command: `git checkout tags/step-1 -b master`

This step implements an initial `get_menus` function. It demonstrates the use of ["HERE DOCS"](https://www.php.net/manual/en/language.types.string.php) and a simple if statement.

### tag name: step-2

command: `git checkout tags/step-2 -b master`

Implements a base `MenuItem` class to display menus from get_menu. Creates an array and traverses it. Demonstrates the use of a `__constructor` function to pass parameters.

One mistake; is the optional parameters should be initialized to null in order to work in this example; e.g. the constructor should change to:

```php
function __construct($text, $link, $role=3, $tool_tip=null) {
        $this->text = $text;
        $this->link = $link;
        $this->min_role = $role;
        $this->tool_tip = isset($tool_tip) ? $tool_tip : $text . "Menu Item";
    }
```

### tag name: step-3

command: `git checkout tags/step-3 -b master`

Shows the addition of two methods, one to check roles; the other to output the html.

### tag name: step-4

command: `git checkout tags/step-4 -b master`

Adds support for activating a menu by applying css in the `get_html()` if the `active` property is set.

### tag name: step-5.1

command: `git checkout tags/step-4 -b master`

Adds a sub class to `Menu_Item` called `Pull_Down_Menu_Item` which demonstrates inheritance and polymorphism. 5.1 cleans up a CSS problem with the initial implementation.

This readme is in the "head" of the repository in the master branch. It's slightly beyond step 5.1. With fixes and other changes. **_Use master at the "head" as the basis for homework._**
