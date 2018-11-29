<?php

//a vantagem é que mantem o formato e garante o tipo de dado. É possivel fazer verificações individualmente
class Data
{
	public $dia;
    public $mes;
    public $ano;

    public function mostra(){
    	return "{$this->dia}/
    			{$this->mes}/
    			{$this->ano}";
    }
}
