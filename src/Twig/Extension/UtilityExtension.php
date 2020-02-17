<?php

namespace App\Twig\Extension;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;


class UtilityExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('server_url', [$this, 'getServerUrl']), 
            new TwigFunction('heure_minutes', [$this, 'heureMinutes']), 
            new TwigFunction('heure_normal', [$this, 'heureNormal']) 
        ];
    }

    public function getServerUrl()
    {
        $protocol=$_SERVER['PROTOCOL'] = isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https' : 'http';
        return $protocol . '://' . $_SERVER['HTTP_HOST'];
    }

    public function heureMinutes($totalheure)
    {
        $duree=$totalheure;
        $min=$duree%60;
        $heures=($duree-$min)/60;

        if ($heures == 0 && $min == 0) 
        {
            return intval(0);
        }else{
            return $heures."h".'  '.$min.'min';
        }    
    }

    public function heureNormal($dayinMonth){
        $hourInDay = 8;
        $totalHour = $hourInDay * $dayinMonth;
        return $totalHour."h";

    }
}