<?php
/**
 * Created by PhpStorm.
 * User: boroda
 * Date: 25.02.19
 * Time: 14:11
 */

require_once __DIR__.'/StructureInterface.php';
abstract class Structure implements StructureInterface
{
    protected $storage = [];
}