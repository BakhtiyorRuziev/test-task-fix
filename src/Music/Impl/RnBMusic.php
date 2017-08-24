<?php
/**
 * Created by OSON.PRO
 * User: bakhtiyor
 * Date: 23.08.17
 * Time: 21:20
 */

namespace BakhaRuziev\Music\Impl;



use BakhaRuziev\Dance\Impl\HipHopDance;
use BakhaRuziev\Dance\Impl\RnBDance;

class RnBMusic extends DefaultMusic
{
    protected $name = "RnBMusic";
    protected $dances = [
        HipHopDance::class,
        RnBDance::class
    ];


    public function __construct()
    {
        $this->dances = [
            new HipHopDance(),
            new RnBDance()
        ];
    }



}