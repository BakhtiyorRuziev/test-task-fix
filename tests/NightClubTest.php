<?php
use BakhaRuziev\Dance\Impl\ElectroDanceDance;
use BakhaRuziev\Dance\Impl\HipHopDance;
use BakhaRuziev\Music\Impl\ElectrohouseMusic;
use BakhaRuziev\Music\Impl\RnBMusic;
use BakhaRuziev\NightClub;
use BakhaRuziev\Person\Impl\CustomPerson;

/**
 * Created by OSON.PRO
 * User: bakhtiyor
 * Date: 23.08.17
 * Time: 22:50
 */
class NightClubTest extends PHPUnit_Framework_TestCase {

    public function testNightClub()
    {

        $night_club = new NightClub();

        $rnb_music = new RnBMusic();
        $night_club->setMusic($rnb_music);

        $persons = [];
        $sample_person1 = new CustomPerson([new HipHopDance()]);
        $sample_person2 = new CustomPerson([new ElectroDanceDance()]);
        $persons[] = $sample_person1;
        $persons[] = $sample_person1;
        $persons[] = $sample_person1;
        $persons[] = $sample_person1;
        $persons[] = $sample_person1;
        $persons[] = $sample_person1;
        $persons[] = $sample_person2;
        $night_club->setPersons($persons);


        $result = $night_club->getInformation();
        $this->assertEquals($result['music'], $night_club->getMusic()->getName());
        $this->assertEquals($result['dancing_person'], 6);
        $this->assertEquals($result['not_dancing_person'], 1);

        $night_club->getInformationText();

        $night_club->setMusic(new ElectrohouseMusic());
        $result = $night_club->getInformation();

        $this->assertEquals($result['music'], $night_club->getMusic()->getName());
        $this->assertEquals($result['dancing_person'], 1);
        $this->assertEquals($result['not_dancing_person'], 6);


        $night_club->getInformationText();

    }


}