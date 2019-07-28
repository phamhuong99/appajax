<?php
$phpArray = array("Hà Nội", " Hồ Chí Minh", "Đà Nẵng");

class student {
    public $name;

    public $age;

    public $location;

    public function __construct($name, $age, $location)
    {
        $this->name = $name;
        $this->age = $age;
        $this->location = $location;
    }

}
$huong = new student("Phạm Thị Hương", 20, "Hưng Yên" );

echo "<pre>";
print_r($phpArray);
echo "</pre>";


echo "<pre>";
print_r($huong);
echo "</pre>";

$phpJson1 = json_encode($phpArray);

echo "<pre>";
print_r($phpJson1);
echo "</pre>";

$phpJson2 = json_encode($huong);

echo "<pre>";
print_r($phpJson2);
echo "</pre>";

?>
