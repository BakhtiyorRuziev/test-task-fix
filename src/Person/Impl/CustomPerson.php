<?php
/**
 * Created by OSON.PRO
 * User: bakhtiyor
 * Date: 23.08.17
 * Time: 21:31
 */

namespace BakhaRuziev\Person\Impl;


use BakhaRuziev\Dance\Dance;
use BakhaRuziev\Dance\Impl\DefaultDance;
use BakhaRuziev\Music\Music;

class CustomPerson extends DefaultPerson
{


    protected $dances;


    /**
     * CustomPerson constructor.
     * @param array $dances
     * @throws \TypeError
     */
    public function __construct(array $dances)
    {
        foreach ($dances as $dance) {
            if (!($dance instanceof Dance)) {

                throw new \TypeError();
            }
        }
        $this->dances = $dances;
    }


}