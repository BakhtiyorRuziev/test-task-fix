<?php
/**
 * Created by OSON.PRO
 * User: bakhtiyor
 * Date: 23.08.17
 * Time: 21:38
 */

namespace BakhaRuziev\Dance;


interface Dance
{
    public function getHeadMove();
    public function getBodyMove();
    public function getHandMove();
    public function getFootMove();
    public function getName();

}