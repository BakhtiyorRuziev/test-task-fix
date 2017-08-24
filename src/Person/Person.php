<?php
/**
 * Created by OSON.PRO
 * User: bakhtiyor
 * Date: 23.08.17
 * Time: 21:30
 */

namespace BakhaRuziev\Person;


use BakhaRuziev\Music\Music;

interface Person
{

    public function listenMusic(Music $music);

    public function getMoves();

    public function isDance();



}