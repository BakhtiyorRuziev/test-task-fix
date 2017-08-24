<?php
/**
 * Created by OSON.PRO
 * User: bakhtiyor
 * Date: 23.08.17
 * Time: 21:28
 */

namespace BakhaRuziev\Music\Impl;


use BakhaRuziev\Dance\Impl\PopMusicDance;
use BakhaRuziev\Music\Music;

class PopMusic extends DefaultMusic
{
    protected $name = "PopMusic";
    protected $dances = [
        PopMusicDance::class,
    ];



}