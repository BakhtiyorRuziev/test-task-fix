<?php
use BakhaRuziev\Dance\Impl\ElectroDanceDance;
use BakhaRuziev\Dance\Impl\RnBDance;
use BakhaRuziev\Music\Impl\RnBMusic;
use BakhaRuziev\Person\Impl\CustomPerson;
use BakhaRuziev\Person\Impl\DefaultPerson;

/**
 * Created by OSON.PRO
 * User: bakhtiyor
 * Date: 24.08.17
 * Time: 12:03
 */
class PersonTest extends PHPUnit_Framework_TestCase {

    public function testDefaultPerson()
    {
        $person = new DefaultPerson();
        $this->assertTrue(count($person->getDances()) == 0);
        $person->listenMusic(new RnBMusic());
        $this->assertTrue(in_array("В бар и пьет водку.", $person->getMoves()));
        $this->assertFalse($person->isDance());
    }

    public function testCustomPerson()
    {
        $person = new CustomPerson([new RnBDance(), new ElectroDanceDance()]);

        $this->assertTrue(count($person->getDances()) == 2);
        $person->listenMusic(new RnBMusic());
        $this->assertTrue(count($person->getMoves()) == 4);
        $this->assertTrue($person->isDance());
    }

}