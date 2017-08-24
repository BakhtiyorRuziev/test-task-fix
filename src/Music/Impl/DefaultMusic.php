<?php
/**
 * Created by OSON.PRO
 * User: bakhtiyor
 * Date: 23.08.17
 * Time: 21:47
 */

namespace BakhaRuziev\Music\Impl;


use BakhaRuziev\Dance\Dance;
use BakhaRuziev\Music\Music;

class DefaultMusic implements Music
{
    protected $name = "DefaultMusic";
    protected $dances = [];

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }



    /**
     * @return Dance[]
     */
    public function getDances(): array
    {
        return $this->dances;
    }









}