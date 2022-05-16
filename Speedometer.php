<?php

class Speedometer
{
    const MILES_TO_KILOMETER = 1.61;

    public static function convertKMtoMiles(int $km): float
    {
        return round(($km / self::MILES_TO_KILOMETER), 2);
    }

    public static function convertMilestoKM(int $miles): float
    {
        return round(($miles * self::MILES_TO_KILOMETER), 2);
    }
}