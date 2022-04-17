<?php
    class Product{
        private $name;
        private $image1;
        private $image2;
        private $image3;
        private $image4;
        private $image5;
        private $image6;
        private $brand;
        private $old_price;
        private $current_price;

        function __construct($name,$image1,$image2,$image3,$image4,$image5,$image6,$brand,$old_price,$current_price)
        {
            $this->name = $name;
            $this->image1 = $image1;
            $this->image2 = $image2;
            $this->image3 = $image3;
            $this->image4 = $image4;
            $this->image5 = $image5;
            $this->image6 = $image6;
            $this->brand = $brand;
            $this->old_price = $old_price;
            $this->current_price = $current_price;
        }

        //getters   
        function getName(){
            return $this->name;
        }
        function getImage1(){
            return $this->image1;
        }
        function getImage2(){
            return $this->image2;
        }
        function getImage3(){
            return $this->image3;
        }
        function getImage4(){
            return $this->image4;
        }
        function getImage5(){
            return $this->image5;
        }
        function getImage6(){
            return $this->image6;
        }
        function getBrand(){
            return $this->brand;
        }
        function getOldPrice(){
            return $this->old_price;
        }
        function getCurrentPrice(){
            return $this->current_price;
        }

    }