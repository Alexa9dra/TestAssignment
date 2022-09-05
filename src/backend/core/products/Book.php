<?php

    class Book extends Product {

        public function createAttribute($attribute) {
            $this->attribute = $attribute . ' Kg';
        }
    }
