<?php 
// 1. Создать структуру классов ведения товарной номенклатуры.
// а) Есть абстрактный товар.
// б) Есть цифровой товар, штучный физический товар и товар на вес.
// в) У каждого есть метод подсчета финальной стоимости.
// г) У цифрового товара стоимость постоянная – дешевле штучного товара в два раза. У штучного товара обычная стоимость, у весового – в зависимости от продаваемого количества в килограммах. У всех формируется в конечном итоге доход с продаж.
// д) Что можно вынести в абстрактный класс, наследование?
abstract class Good{
    const profit = 15; //Процент прибыли

    abstract function calcTotalPrice();//Подсчет финальной стоимости товара
    abstract function calcProfit();//Подсчет финальной прибыли

} 

class Good1 extends Good{//Цифровой продукт
    private const price = 100;//Цена цифрового товара всегда одинаковая
    private $count;//Кол-чество товаров

    public getPrice(){
        return $this->price;
    }
    public getCount(){
        return $this->count;
    }

    public function calcTotalPrice(){
        return $this->getPrice() * $this->getCount();
    }
    public function calcProfit(){
        return $this->getPrice() * $this->getCount() / 100 * parent::profit;
    }
}
class Good2 extends Good1{//Штучный продукт 
    
    public function getPrice(){//У штучного продукта цена в 2 раза выше чем у цифрового
        return parent::getPrice() * 2;//Берем цену цифрового товара и просто умножаем на 2
    }
    //Те же действия, только число товара наследуем от родителя
    public function calcTotalPrice(){
        return $this->getPrice() * parent::getCount();
    }
    public function calcProfit(){
        return $this->getPrice() * parent::getCount() / 100 * parent::profit;
    }
}

class Good3 extends Good{//Весовой продукт является независимым от 2 предыдущий, поэтому наследуется от абстрактного класса

    private $price;//Цена
    private $weight;//Вес

    public function __construct($price, $weight){
        $this->getPrice($price);
        $this->getWeight($weight);
    }

    public getPrice($price=0){
        return $this->price = $price;
    }
    public getWeight($weight=0){
        return $this->count = $weight;
    }

    public function calcTotalPrice(){
        return $this->price * $this->weight;
    }
    public function calcProfit(){
        return $this->price * $this->weight / 100 * parent::profit;
    }
}

//2. *Реализовать паттерн Singleton при помощи traits.

trait NeSingleton{
    private function __construct(){}

    public static function getObject(){
        if(self::$obj){
            self::$obj = new self();
        }return self::$obj;
    }
}

class Singleton{

    private static $obj; 

    public function SomeAct(){
        echo "!!!!!!!!!!!!";
    }

    use NeSingleton;
}

