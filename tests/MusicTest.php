<?php
use BakhaRuziev\Dance\Impl\ElectroDanceDance;
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
class MusicTest extends PHPUnit_Framework_TestCase {

    public function testDefaultMusic()
    {
        $default_music = new DefaultMusic("DefaultMusic", []);
        $this->assertEquals($default_music->getName(), "DefaultMusic");

    }


    public function testPopMusic()
    {
        $pop_music = new PopMusic();
        $this->assertEquals($pop_music->getName(), "PopMusic");
        $pop_dance = new PopMusicDance();

        $this->assertTrue($pop_music->danceExist($pop_dance->getName()));
        $this->assertFalse($pop_music->danceExist("ErrorDance"));
    }

    public function testCustomMusic()
    {

        $pop_dance = new PopMusicDance();

        $custom_music = new CustomMusic("KazanMusic", [new PopMusicDance()]);

        $this->assertEquals("KazanMusic", $custom_music->getName());

        $this->assertTrue($custom_music->danceExist($pop_dance->getName()));
        $this->assertFalse($custom_music->danceExist("ErrorDance"));

    }

}