<?php
    class Shop{
        public $items=[];
        function addItem($i) 
        { 
            array_push( $this->items, $i);
        }
        function findItemByID($id){
            for($j =0; $j<sizeof($items); $j++){
                $items[$j]->id===$id;
                return $items[$j];
            }
        }
        
    };
    class Item{
        public $id,$name,$description,$price;
        
        function __construct($id,$n,$d,$p) 
        {   $this->id=$id;
            $this->name=$n;
            $this->description=$d;
            $this->price=$p;
        }
        
    }
    class ShoppingCart{
        public $cart =[];
        function __construct() 
        {
            array_push($this->cart, $item);
        }
        function addItem($item){
            array_push($this->cart, $item);
        }
        
    }
?>