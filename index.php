<?php
class Application {
    private string $name;
    public static int $count = 0;
    public function __construct(string $name) {
        $this->name = $name;
        self::$count++;
    }
    public function __toString(): string
    {
        return 'Application name:' .$this->name;
    }
}
echo "Tong so luong doi tuong la: " .Application::$count ."<br>";
$app1 = new Application('App one');
echo "Tong so luong doi tuong la: " .Application::$count ."<br>";
$app2 = new Application('App two');
echo "Total objects count: ". Application::$count ."<br/>";
echo $app1 .'<br/>';
echo $app2 .'<br/>';