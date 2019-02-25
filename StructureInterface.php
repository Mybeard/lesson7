<?php
/**
 * Created by PhpStorm.
 * User: boroda
 * Date: 25.02.19
 * Time: 14:09
 */

interface StructureInterface
{
    public function in($value);
    public function out();
    public function isEmpty();
}