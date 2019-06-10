<?php
//which prevents child classes from overriding a method by prefixing the definition with final.
class BaseClass 
{
public function test() {
echo "BaseClass::test() called\n";
}
final public function moreTesting() {
echo "BaseClass::moreTesting() called\n";
}
}
class ChildClass extends BaseClass 
{
public function moreTesting() {
echo "ChildClass::moreTesting() called\n";
}
}
final class BaseClass 
{
public function test() {
echo "BaseClass::test() called\n";
}
// Here it doesn't matter if you specify the function as final or not
final public function moreTesting() {
echo "BaseClass::moreTesting() called\n";
}
}
class ChildClass extends BaseClass 
{
}
// Results in Fatal error: Class ChildClass may not inherit from final class 
(BaseClass)
?> 
