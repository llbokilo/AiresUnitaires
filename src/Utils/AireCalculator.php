<?php
class AireCalculator
{
    /*calcul surface triangle */
    function getAireTriangle($pLongueurCote,$pHauteur):float
    {
        if (($pLongueurCote <=0 ) || ($pHauteur <=0))
        throw 
            new \InvalidArgumentException('La fonction getAireTriangle attend des longueurs strictement positives: pLongueurCote:'.
                $pLongueurCote.',pHauteur:'.$pHauteur);
        return $pLongueurCote*$pHauteur/2;
    }

    /*calcul surface parallelogramme */
    function getAirePara($pLongueurBase,$pHauteur):float
    {
        if (($pLongueurBase <=0 ) || ($pHauteur <=0))
        throw 
            new \InvalidArgumentException('La fonction getAirePara attend des longueurs strictement positives: pLongueurBase:'.
                $pLongueurBase.',pHauteur:'.$pHauteur);
        return $pLongueurBase*$pHauteur;
    }

    /*calcul surface cercle */
    function getAireCercle($pRayon):float
    {
        if ($pRayon <=0 )
        throw 
            new \InvalidArgumentException('La fonction getAireCercle attend une longueur strictement positive: pRayon:'.
                $pRayon);
        return 3.14*$pRayon*$pRayon;
    }
}