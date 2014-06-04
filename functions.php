<?php

    use \Nosco\Learn\Calculator\Calculator;
    use \Nosco\Learn\Calculator\Number;
    use \Nosco\Learn\Interfaces\Calculator\CalculatorInterface as ICalc;
    use \Nosco\Learn\Interfaces\Calculator\NumberInterface as INum;

    /**
     * Add Two Numbers
     *
     * Adds two numbers together using the calculator provided.
     *
     * @access global
     * @param  Nosco\Learn\Interfaces\Calculator\CalculatorInterface $factory
     * @param  Nosco\Learn\Interfaces\Calculator\NumberInterface $first
     * @param  Nosco\Learn\Interfaces\Calculator\NumberInterface $second
     * @return Nosco\Learn\Interfaces\Calculator\NumberInterface
     */
    function addTwoNumbers(ICalc $factory, INum $first, INum $second)
    {
        return $factory->add($first, $second);
    }
