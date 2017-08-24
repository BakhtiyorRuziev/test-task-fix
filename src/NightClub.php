<?php
/**
 * Created by OSON.PRO
 * User: bakhtiyor
 * Date: 23.08.17
 * Time: 22:45
 */

namespace BakhaRuziev;


use BakhaRuziev\Music\Music;
use BakhaRuziev\Person\Person;

class NightClub
{
    /** @var Person[] */
    protected $persons = [];
    /** @var Music */
    protected $music = null;




    /**
     * @return Person[]
     */
    public function getPersons(): array
    {
        return $this->persons;
    }

    /**
     * @param array $persons
     */
    public function setPersons(array $persons)
    {
        $this->persons = $persons;
    }

    /**
     * @return Music
     */
    public function getMusic()
    {
        return $this->music;
    }

    /**
     * @param Music $music
     */
    public function setMusic(Music $music)
    {
        $this->music = $music;
    }



    public function getInformationText()
    {
        echo PHP_EOL . "Музыка: " . $this->music->getName() . PHP_EOL;
        echo PHP_EOL . '=============================================' . PHP_EOL;
        foreach ($this->getPersons() as $person) {
            $person->listenMusic($this->getMusic());
            echo  implode(", " , $person->getMoves()) . PHP_EOL;
        }

        echo PHP_EOL . '=============================================' . PHP_EOL;



    }

    public function getInformation()
    {
        $data = [
            'music'=>$this->music->getName(),
            'dancing_person'=>0,
            'not_dancing_person'=>0,
        ];

        foreach ($this->getPersons() as $person) {
            $person->listenMusic($this->getMusic());
            if ($person->isDance()) {
                $data['dancing_person']+=1;
            } else {
                $data['not_dancing_person']+=1;
            }

        }

        return $data;
    }




}