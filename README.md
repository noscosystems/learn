Learn
=====

Learning repository. You should already have access to the repository [`noscosystems/learn-calculator`](https://github.com/noscosystems/learn-calculator).

Instructions
------------

1. Fork the [`noscosystems/learn-calculator`](https://github.com/noscosystems/learn-calculator) repository.
2. In your forked repository, create a simple PHP library so that when the commands *(see below)* are run,
   the expected output appears in the console *(see below)*.
3. You may use as many classes as you like, and name them anything you like, as long as you have a
   class called `Nosco\Learn\Calculator\Calculator`.
4. The library [`noscosystems/learn-interfaces`](https://github.com/noscosystems/learn-interfaces)
   uses **PSR-0** autoloading. Your calculator library must use **PSR-4**.
5. Use the **PSR-1** and **PSR-2** coding standards.
6. This exercise is not about if you *can* code, but rather:
   - How you code to a specification.
   - Using industry standard practices such as third-party dependencies, naming conventions and interfaces.
   - Using tools for PHP - we use Composer in this exercise because it's the most common.
7. When you have completed everything, the version number of the calculator library (your forked repository)
   should be `2.0.0`. Prepare it appropriately as if you were going to release it as a
   [Composer package](https://packagist.org/ "Composer Package Repository").

Commands
--------

```bash
git clone git@github.com:noscosystems/learn.git "./learn"
# Change the word "noscosystems" to your GitHub username on line 28 of "composer.json".
cd learn/
composer update
php learn.php
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
