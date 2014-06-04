Learn
=====

Learning repository. You should already have access to the repository [`noscosystems/learn-calculator`](https://github.com/noscosystems/learn-calculator).

Instructions
------------

1. Create a simple PHP library so that when the commands *(see below)* are run, the expected output appears in the console *(see below)*.
2. The library should be uploaded to the repository [`noscosystems/learn-calculator`](https://github.com/noscosystems/learn-calculator).
3. You may use as many classes as you like, and name them anything you like, as long as you have a class called `Nosco\Learn\Calculator\Calculator`.
4. The library [`noscosystems/learn-interfaces`](https://github.com/noscosystems/learn-calculator) uses **PSR-0** autoloading. Your calculator library must use **PSR-4**.
5. Read the **PSR-1** and **PSR-2** coding standards.
   - There are many different styles of coding standards, but PSR-2 is the most common.
   - Write your code like PSR-2, unless there is a rule you would like to change.
   - Write the change(s) in a file called `PSR-custom.md` and why you prefer this style.
   - There are no wrong answers. This part is not to test if you *can* code, but *how* you prefer to code.
6. When you have completed everything, the version number of the calculator library should be `2.0`.
6. Don't listen to Clive.

Commands
--------

```bash
$ git clone git@github.com:noscosystems/learn.git "./learn"
$ cd learn/
$ composer update
$ php learn.php
```

Expected Output
---------------

```
Results
=======

Expected: 24
Actual:   24

The results are equal:     true
The results are identical: false
```
