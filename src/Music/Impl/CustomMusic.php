<?php
/**
 * Created by OSON.PRO
 * User: bakhtiyor
 * Date: 23.08.17
 * Time: 22:15
 */

namespace BakhaRuziev\Music\Impl;


use BakhaRuziev\Dance\Dance;

class CustomMusic extends DefaultMusic
{


    /**
     * CustomMusic constructor.
     * @param string $name
     * @param Dance[] $dances
     * @throws \TypeError
     */
    public function __construct(string $name, array $dances)
    {
        $this->name = $name;
        foreach ($dances as $dance) {
            if (!($dance instanceof Dance)) {
                throw new \TypeError("Not assign Dance implement interface.");
            }
        }
        $this->dances = $dances;
    }





}