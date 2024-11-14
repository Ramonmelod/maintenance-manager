<?php
echo "Bem-vindo";
$name=['letras'=>'abc','number' => 2,"boolean"=>true];
var_dump($name[0]);
$idade = '';
//echo $idade;
$change = (object) $name;
var_dump($name);

var_dump($change->string);