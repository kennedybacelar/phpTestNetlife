<?php
require 'vendor/autoload.php';

require_once("ITwareTestProcessing.php");
use Project\ITwareTest;

/*Block Related to test of the Task1 */
function testTask1()
{
	$test1 = new ItWareTest();
	$test1->testTask1();
}

/*Block Related to test of the Task2 */
function testTask2()
{
	$test2 = new ItWareTest();
	$test2->testTask2();
}

testTask1(); // Here you test the task 1

testTask2(); // Here you test the task 2

?>