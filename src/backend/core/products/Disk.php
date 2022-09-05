<?php

    class Disk extends Product {

        public function createAttribute($attribute) {
            $this->attribute = $attribute . ' Mb';
        }
    }
