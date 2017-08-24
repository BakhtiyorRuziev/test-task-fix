<?php
use BakhaRuziev\Dance\Impl\DefaultDance;
use BakhaRuziev\Dance\Impl\ElectroDanceDance;
use BakhaRuziev\Dance\Impl\HipHopDance;
use BakhaRuziev\Dance\Impl\PopMusicDance;
use BakhaRuziev\Music\Impl\CustomMusic;
use BakhaRuziev\Music\Impl\DefaultMusic;
use BakhaRuziev\Music\Impl\PopMusic;

/**
 * Created by OSON.PRO
 * User: bakhtiyor
 * Date: 23.08.17
 * Time: 21:23
 */
class DanceTest extends PHPUnit_Framework_TestCase {

    public function testDefaultDance()
    {
        $default_dance = new DefaultDance();
        $this->assertEmpty($default_dance->getFootMove());
    }

    public function testHipHopDance()
    {
        $hip_hop_dance = new HipHopDance();
        $this->assertNotEmpty($hip_hop_dance->getFootMove());
    }

}