<?php

/**
 * The radius of the Earth
 *
 * @author rick
 */

namespace Ricklab\Location;

class Earth extends Planet
{

    protected $radius = 6371.009;

    protected $majorSemiAxis = 6378137;

    /**
     * @var float The radius at the poles in metres (for use in vincenty)
     */
    protected $minorSemiAxis = 6356752.314245;
}