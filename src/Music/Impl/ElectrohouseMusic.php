<?php
/**
 * Created by OSON.PRO
 * User: bakhtiyor
 * Date: 23.08.17
 * Time: 21:28
 */

namespace BakhaRuziev\Music\Impl;


use BakhaRuziev\Dance\Impl\ElectroDanceDance;
use BakhaRuziev\Dance\Impl\HouseDance;
use BakhaRuziev\Music\Music;

class ElectrohouseMusic extends DefaultMusic
{
    protected $name = "ElectrohouseMusic";
    protected $dances = [
        ElectroDanceDance::class,
        HouseDance::class
    ];

}