<?php
/**
 * Created by OSON.PRO
 * User: bakhtiyor
 * Date: 23.08.17
 * Time: 21:31
 */

namespace BakhaRuziev\Person\Impl;


use BakhaRuziev\Dance\Dance;
use BakhaRuziev\Music\Music;
use BakhaRuziev\Person\Person;

class DefaultPerson implements Person
{

    /** @var Dance[] */
    protected $dances = [];
    /** @var Music */
    protected $listen_music = null;

    /**
     * @return Dance[]
     */
    public function getDances(): array
    {
        return $this->dances;
    }


    /**
     * @param Music $music
     */
    public function listenMusic(Music $music)
    {
        $this->listen_music = $music;

    }

    public function isDance()
    {
        if ($this->listen_music  == null) {
            throw new \Exception("ListenMusic is null");
        }

        foreach ($this->getDances() as $dance) {

            if (in_array(get_class($dance), $this->listen_music->getDances(), true))
            {
                return true;
            }
        }

        return false;
    }


    public function getMoves()
    {
        if ($this->listen_music  == null) {
            throw new \Exception("ListenMusic is null");
        }

        $moves = [];
        foreach ($this->getDances() as $dance) {

            if (in_array(get_class($dance), $this->listen_music->getDances(), true)) {
                $moves[] = "Голова: " . $dance->getHeadMove();
                $moves[] = "Руки: " . $dance->getHandMove();
                $moves[] = "Тело: " . $dance->getBodyMove();
                $moves[] = "Ноги: " . $dance->getFootMove();
                return $moves;
            }
        }
        $moves[] = "В бар и пьет водку.";
        return $moves;


    }


}