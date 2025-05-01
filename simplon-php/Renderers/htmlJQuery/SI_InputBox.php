<?php
/*
Sow Peace License (MIT-Compatible with Attribution Visit)
Copyright (c) 2025 Ruben Schaffer Levine and Luca Lauretta
https://simplonphp.org/Sow-PeaceLicense.txt
*/
abstract class SI_InputBox extends SI_Item {
    public function __construct(SI_Input $input, $label) {
        $this->label = $label;
        $this->input = $input;
    }

}
