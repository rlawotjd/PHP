<?php

class MakeShuffleDeck
{
    private  $arr_num;
    private  $arr_shape;

    public function __construct()
    {
        $this->arr_num=array(2,3,4,5,6,7,8,9,10,"J","Q","K","A");
        $this->arr_shape=array("S","C","H","D");
    }

    public  function fnc_make_shuffle_deck()
    {
        $make_deck=array();
        $shuffle_dack=array();
        for ($i=0; $i < count($this->arr_num); $i++) { 
            for ($u=0; $u < count($this->arr_shape); $u++) { 
                $make_deck[]= $this->arr_shape[$u].$this->arr_num[$i];
            }
        }
        shuffle($make_deck);
        return $make_deck;
    }

}

$obj_MakeShuffleDeck= new MakeShuffleDeck();

var_dump( $obj_MakeShuffleDeck->fnc_make_shuffle_deck());

class Select extends MakeShuffleDeck
{
    private static $deck;

    public function fnc_select()
    {
        // parent:: fnc_make_shuffle_deck();
        $select=array();
        $this->deck = $this->fnc_make_shuffle_deck();
        $select= array_pop($this->deck);
        return $select;
    }
    
}

$obj_select=new Select();
var_dump($obj_select->fnc_select());
var_dump($obj_select->fnc_select());
