### Object-Oriented

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PHP is a server-side scripting language, mainly used for web development but also used as a general-purpose programming language. Object-Oriented Programming (PHP OOP),  is a type of programming language principle added to php5, that helps in building complex, reusable web applications.<br/>
The  Object Oriented concepts in PHP are:
* Class − This is a programmer-defined data type, which includes local functions as well as local data. You can think of a class as a template for making many instances of the same kind (or class) of object.
* Object − An individual instance of the data structure defined by a class. You define a class once and then make many objects that belong to it. Objects are also known as instance.
* Inheritance − When a class is defined by inheriting existing function of a parent class then it is called inheritance. Here child class will inherit all or few member functions and variables of a parent class.
 * Polymorphism − This is an object oriented concept where same function can be used for different purposes. For example function name will remain same but it make take different number of arguments and can do different task.
* Overloading − a type of polymorphism in which some or all of operators have different implementations depending on the types of their arguments. Similarly functions can also be overloaded with different implementation.
* Data Abstraction − Any representation of data in which the implementation details are hidden (abstracted). * Encapsulation − refers to a concept where we encapsulate all the data and member functions together to form an object.
* Constructor − refers to a special type of function which will be called automatically whenever there is an object formation from a class.
* Destructor − refers to a special type of function which will be called automatically whenever an object is deleted or goes out of scope.

**Class  & Object:**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Class is a programmer-defined data type, which includes local methods and local variables. It is a collection of objects. Object has properties and behaviour.<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;First we have to define a php class, where classname should be same as filename.<br/>
Example for simple class:
```
<?php
class Books{
  public function name(){
  echo “Drupal book”;
  }
  public function price(){
  echo “900 Rs/-”;
  }
}
To create php object we have to use a  new operator. Here php object is the object of the Books Class. 
$obj = new Books();
$obj->name();
$obj->price();
?>
```
Output:
```
Drupal book
900 Rs/-
```

**Creating Objects in PHP**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When class is created, we can create any number of objects to that class. The object is created with the help of new keyword.

**Calling Member Function**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When the object is created we can access the variables and method function of the class with the help of operator ‘->, accessing the method is done to get the information of that method. Also look into how we can access object properties via variables
```
<?php
   class Mobile {
      /* Member variables */
      var $price;
      var $title;
      /* Member functions */
      function setPrice($par){
         $this->price = $par;
      }
      function getPrice(){
         echo $this->price ."<br/>";
      }
      function setName($par){
         $this->title = $par;
      }
      function getName(){
         echo $this->title ." <br/>";
      }
   }
$Samsung = new Mobile();
$Xiaomi = new Mobile();
$Iphone = new Mobile();
$Samsung->setName( "SamsungS8 );
$Iphone->setName( "Iphone7s" );
$Xiaomi->setName( "MI4" );
$Samsung->setPrice( 90000 );
$Iphone->setPrice( 65000 );
$Xiaomi->setPrice( 15000 );
Now you call another member functions to get the values set by in above example
$Samsung->getName();
$Iphone->getName();
$Xiaomi->getName();
$Samsung->getPrice();
$Iphone->getPrice();
$Xiaomi->getPrice();
?>
```
Output
```
Samsung S8
Iphone S7
MI4
90000
65000
15000
```
**Inheritance**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When the properties and the methods of the parent class are accessed by the child class, we call the concept has inheritance. The child class can inherit the parent method and give own method implementation, this property is called overridden method. When the same method of the parent class is inherited we call as inherited method. Now let us see types of inheritance supported in Object Oriented Programming and corresponding Php inheritance examples.

Types Of Inheritance
- Single Level Inheritance
- Multilevel Inheritance

**Single Level Inheritance:**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In Single Level Inheritance the Parent class methods will be extended by the child class. All the methods can be inherited.<br/>
Example for Single Level Inheritance
```
<?php
class A {
    public function printItem($string) {
        echo ' Hi : ' . $string; 
    } 
    public function printPHP() {
        echo 'I am from valuebound' . PHP_EOL;
    }
}
class B extends A {
    public function printItem($string) {
        echo 'Hi: ' . $string . PHP_EOL;
    }
 public function printPHP() {
        echo "I am from ABC";
    }
}
$a = new A();
$b = new B();
$a->printItem('Raju');
$a->printPHP();       
$b->printItem('savan'); 
$b->printPHP();       
?>
```
Output
```
Hi : Pavan
I am from valuebound
Hi: savan
I am from ABC
```
**MultiLevel Inheritance :**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In MultiLevel Inheritance, the parent class method will be inherited by child class and again subclass will inherit the child class method. 
```
<?php
class A {
	public function myage() {
	return  ' age is 80';
	}
}
class B extends A {	
	public function mysonage() {
	return  ' age is 50';
	}
}
class C extends B {
	public function mygrandsonage() {
	return  'age is 20';
	   }
        public function myHistory() {
        echo "Class A " .$this->myage();
        echo "Class B ".$this-> mysonage();
        echo "Class C " . $this->mygrandsonage();
        }
}
$obj = new C();
$obj->myHistory();
?>
```
Output
```
Class A is 80
Class B is 50 
Class C 20
```
**INTERFACES:**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;An interface is a description of the actions that an object can do.Interface is written in the same way as the class the declaration with interface keyword.

Rules of Interfaces:

- All methods declared in an interface must be public; this is the nature of an interface.
- All methods in the interface must be implemented within a class; failure to do so will result in a fatal error.
- The class implementing the interface must use the exact same method signatures as are defined in the interface
- Interfaces can be extended like classes using the extends operator.<br/>
Example for the interface class
```
<?php
interface A {
    public function setProperty($x);
    public function description();
}
class Mangoes implements A {
   public function setProperty($x) {
        $this->x = $x;
    }
    public function description() {
        echo 'Describing' . $this->x . tree;
  }
}
$Mango = new Mangoes();
$Mango->setProperty(mango);
$Mango->description();
?>
```
Output:
```Describing Mango tree```

**Abstract Classes:**

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;An abstract class is a class that contains at least one abstract method. The abstract method is function declaration without anybody and it has the only name of the method and its parameters.
There can be any number of methods in the class and we have to declare the class as abstract only when there is an abstract method<br/>
Example for Abstract class
```
<?php
abstract class Cars {
    public abstract function getCompanyName();
    public abstract function getPrice();
}
class Baleno  extends Cars {
    public function getCompanyName() {
        return "Maruthi Suzuki" . '<br/>';
    }
    public  function getPrice() {
      return 720000 . '<br/>';
    }
}
class Santro extends Cars {
    public function getCompanyName() {
        return "Hyundai" . '<br/>';
    }
    public function getPrice() {
        return 300000 . '<br/>';
    }
}
$car = new Baleno();
$car1 = new Santro();
echo $car->getCompanyName();
echo $car->getPrice();
echo $car1->getCompanyName();
echo $car1->getPrice();
?>
```
Output
```
Maruthi Suzuki
720000
Hyundai
300000
```


 
