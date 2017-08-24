<?php
/**
 * Created by OSON.PRO
 * User: bakhtiyor
 * Date: 23.08.17
 * Time: 22:19
 */

namespace BakhaRuziev\Dance\Impl;


class CustomDance extends DefaultDance
{
    protected $head_move = '';
    protected $body_move = '';
    protected $hand_move = '';
    protected $foot_move = '';

    /**
     * CustomDance constructor.
     * @param string $head_move
     * @param string $body_move
     * @param string $hand_move
     * @param string $foot_move
     */
    public function __construct($head_move, $body_move, $hand_move, $foot_move)
    {
        $this->head_move = $head_move;
        $this->body_move = $body_move;
        $this->hand_move = $hand_move;
        $this->foot_move = $foot_move;
    }


}