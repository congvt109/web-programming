<?php
        // class User {
        //     public $name;
        //     private $password;
        //     private $lastLogin;
        //     public function __construct ( $name, $password ) {
        //         $this->name = $name;
        //         $this->password = $password;
        //     }
        //     function getLastLogin () {
        //         return (date("M d Y", $this->lastLogin));
        //     }
        // }
?>
<?php
    // class BaseClass {
    //     function __construct() {
    //         echo "In BaseClass constructor <br/>";
    //     }
    // }
    // class SubClass extends BaseClass {
    //     function __construct() {
    //         parent::__construct();
    //         print "nIn SubClass constructorn<br/>";
    //     }
    // }
    // // $obj1 = new BaseClass();
    // $obj2 = new SubClass();
?> 
<?php
    class Counter {
        private static $count = 0;
        const VERSION = 2.0;
        
        function __construct(){ self::$count++; }
        
        function __destruct(){ self::$count--; }
        
        static function getCount() { 
            return self::$count; 
        }
    }
        $c1 = new Counter();
        print($c1->getCount() . "<br>\n");
        $c2 = new Counter();
        print(Counter::getCount() . "<br>\n");
        
        $c2 = NULL;
        print($c1->getCount() . "<br>\n");
        print("Version used: ".Counter::VERSION."<br>\n");
?>