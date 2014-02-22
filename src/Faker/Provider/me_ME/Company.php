<?php

namespace Faker\Provider\me_ME;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{companyName}} {{companyType}}'
    );

    protected static $names = array(
        'FOND ZAJEDNIČKOG ULAGANJA MONETA', 'INDUSTRIAIMPEX A.D.', 'GORNJI IBAR A.D.', 'GP RADNIK BETON', 'LUTRIJA CRNE GORE', 'OSIGURAVAJUĆE DRUŠTVO SWISS OSIGURANJE', 'LOVĆEN PODGORICA', 'PROGAS PODGORICA', 'DUVANSKI KOMBINAT, PODGORICA', 'DUKLJA-PEKARA', 'ŽELJEZNICA CRNE GORE', 'BUSINESSMONTENEGRO PODGORICA', 'ELASTIK-PLASTIKA AD PODGORICA', 'MLJEKARA', 'IZDAVAČKO-PROMETNO DRUŠTVO LJETOPIS', 'ATLAS BANKA', 'DRUŠTVO ZA UPRAVLJANJE INVESTICIONIM FONDOM ATLAS MONT', 'INPEK', 'PODGORICAEKSPRES', 'EXPORT-IMPORT SERVISIMPORT SI', 'INTOURS', 'MORAČA PODGORICA', 'TEHNOMARKETI', 'CRNAGORAPUT', 'CENTRALNA DEPOZITARNA AGENCIJA ', 'MORAČA SA P.O.', 'CRNOGORSKI TELEKOM', 'LOVĆENINVEST PODGORICA', 'EUROMARKET BANKA NLB GRUPA ', 'AUTOREMONT OSMANAGIĆ', 'PRVA BANKA CRNE GORE PODGORICA', 'DOCLEA EXPRESS PODGORICA', 'CRNAGORADRVO', 'DUKLJA PODGORICA', 'SOCIETE GENERALE BANKA MONTENEGRO AD', '13 JUL - PLANTAŽE ', 'NEX MONTENEGRO', 'RIBNICA COMMERCE', 'INSTITUT ZA ŠUMARSTVO ', 'HOTEL RAVNJAK', 'GRAĐEVINAR PODGORICA', 'VELIMPORT PODGORICA', 'MONETA A.D.', 'STADION', 'MESOPROMET PODGORICA', 'CRNOGORSKA KOMERCIJALNA BANKA ', 'ERSTE BANK AD PODGORICA', 'INVEST BANKA MONTENEGRO', 'TRGOPRESS', '19 DECEMBAR PODGORICA', 'TPC RAŽNATOVIĆ', 'LOVĆEN-RE', 'MARGOMARKET PODGORICA', 'ŠUMARSKO PREDUZEĆE ', 'MONTENEGROBERZA AKCIONARSKO DRUŠTVO', 'AGROKOMBINAT 13 JUL', 'MAŠINOPROMET', 'VELEPROMET PODGORICA', 'SI PROMET A.D.', 'VOLUMENTRADE PODGORICA', 'BOŽUR-VELEXPORT', 'UNIFARM ', 'DRVOIMPEX', 'CENTROKOŽA-PRODUKT ', 'GROSS MARKET PODGORICA', 'AGROKOMBINAT 13 JUL', 'CG BROKER', 'ZETATRANS', 'UTIP CRNA GORA', 'PAPIR', 'H.T.P.VELIKA PLAŽA A.D', 'CMC AD PODGORICA', 'TREND A.D.', 'NOVOGRADNJA AD PODGORICA', 'MAŠINOPROMET-COMMERCE', 'CEMEX MONTENEGRO', 'DRVOIMPEX', 'DRVOIMPEX-BAMS', 'DRVOIMPEX-MOBILE', 'DRVOIMPEX-GM PODGORICA', 'PROMET', 'DRVOIMPEX-FINCOM', 'VATROSTALNA PODGORICA', 'SIGMOBIL', 'GORICAPROMET PODGORICA', 'VELETRGOVINA-KOLAŠIN', 'DRVOIMPEX', 'HIGIJENA PODGORICA', 'SOLAR 80 - ELASTIK', 'DUKLJA - ZORA', 'EXAL', 'HIPOTEKARNA BANKA', 'SAVA MONTENEGRO PODGORICA'
    );

    protected static $types = array(
        'A.D.', 'A.D PODGORICA'
    );

    public static function companyType()
    {
        return static::randomElement(static::$types);
    }

    public static function companyName()
    {
        return static::randomElement(static::$names);
    }

}
