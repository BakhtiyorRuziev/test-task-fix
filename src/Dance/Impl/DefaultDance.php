<?php
/**
 * Created by OSON.PRO
 * User: bakhtiyor
 * Date: 23.08.17
 * Time: 22:18
 */

namespace BakhaRuziev\Dance\Impl;


use BakhaRuziev\Dance\Dance;

class DefaultDance implements Dance
{
    protected $head_move = '';
    protected $body_move = '';
    protected $hand_move = '';
    protected $foot_move = '';

    public function getHeadMove()
    {
        return $this->head_move;
    }

    public function getBodyMove()
    {
        return $this->body_move;
    }

    public function getHandMove()
    {
        return $this->hand_move;
    }

    public function getFootMove()
    {
        return $this->foot_move;
    }





}