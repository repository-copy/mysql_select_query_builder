<?php
/**
 * Created by PhpStorm.
 * User: dev@dermanov.ru
 * Date: 04.06.2018
 * Time: 12:43
 *
 *
 */


namespace Core\Db\Query\AgregatFunction;


class CountFunction extends AgregatFunctionAbstract
{
    
    /**
     * CountFunction constructor.
     */
    public function __construct($distinct = false)
    {
        parent::__construct("COUNT", $distinct);
    }
}