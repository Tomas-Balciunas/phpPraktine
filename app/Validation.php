<?php

namespace PraktineApp;

class Validation {

    private static $errors = [];
    private static $error = [];
    private static $reg = [];

    public static function validation($data) {
        self::valPavadinimas($data['pavadinimas']);
        self::valKodas($data['kodas']);
        self::valPvmkodas($data['pvmkodas']);
        self::valAdresas($data['adresas']);
        self::valTel($data['tel']);
        self::valElpastas($data['elpastas']);
        self::valVeikla($data['veikla']);
        self::valVadovas($data['vadovas']);
        return self::$errors;
    }

    public static function validation2($data2) {
        self::valDelkodas($data2['delkodas']);
        return self::$error;
    }

    private static function valDelkodas($title2) {
        $valid = preg_match('/^[0-9]{7,9}$/', $title2);
        if (empty($title2)) {
            Validation::$error['1'] = 'Įveskite kodą pašalinimui';
        } else if (!$valid) {
            Validation::$error['1'] = 'Įmonės Kodas negali būti ilgesnis kaip 9 ir trumpesnis kaip 7 skaičiai';
        } else {
            Validation::$error['1'] = '';
        }
    }

    private static function valPavadinimas($title) {
        $valid = preg_match('/^[\w\d ,.]{5,100}$/', $title);
        if (empty($title)) {
            Validation::$errors['1'] = 'Įveskite pavadinimą';
        } else if (!$valid) {
            Validation::$errors['1'] = 'Pavadinime naudokite tik raides ir skaicius';
        } else {
            Validation::$errors['1'] = '';
        }
    }

    private static function valKodas($title) {
        $valid = preg_match('/^[0-9]{7,9}$/', $title);
        if (empty($title)) {
            Validation::$errors['2'] = 'Įveskite kodą';
        } else if (!$valid) {
            Validation::$errors['2'] = 'Įmonės Kodas negali būti ilgesnis kaip 9 ir trumpesnis kaip 7 skaičiai';
        } else {
            Validation::$errors['2'] = '';
        }
    }

    private static function valPvmkodas($title) {
        $valid = preg_match('/^[A-Z]{2}+[0-9]{5,15}$/', $title);
        if (empty($title)) {
            Validation::$errors['3'] = 'Įveskite PVM kodą';
        } else if (!$valid) {
            Validation::$errors['3'] = 'PVM kodas negali būti ilgesnis kaip 15 skaičiai';
        } else {
            Validation::$errors['3'] = '';
        }
    }

    private static function valAdresas($title) {
        $valid = preg_match('/^[A-Za-z0-9\-\\,.#]{3,50}+/', $title);
        if (empty($title)) {
            Validation::$errors['4'] = 'Įveskite adresą';
        } else if (!$valid) {
            Validation::$errors['4'] = 'Adrese nenaudokite specialiųjų ženklų išskyrus ,#/-';
        } else {    
            Validation::$errors['4'] = '';
        }
    }

    private static function valTel($title) {
        $valid = preg_match('/^[0-9)(+]{5,20}$/', $title);
        if (empty($title)) {
            Validation::$errors['5'] = 'Įveskite tel. numerį';
        } else if (!$valid) {
            Validation::$errors['5'] = 'Telefono laukelyje naudokite tik skaičius bei ženklus + ( )';
        } else {
            Validation::$errors['5'] = '';
        }
    }

    private static function valElpastas($title) {
        if (empty($title)) {
            Validation::$errors['6'] = 'Įveskite el. paštą';
        } else if (!filter_var($title, FILTER_VALIDATE_EMAIL)) {
            Validation::$errors['6'] = 'Neteisingas el. paštas';
        } else {
            Validation::$errors['6'] = '';
        }
    }

    private static function valVeikla($title) {
        $valid = preg_match('/^[a-zA-Z0-9]{2,50}+/', $title);
        if (empty($title)) {
            Validation::$errors['7'] = 'Įveskite veiklą';
        } else if (!$valid) {
            Validation::$errors['7'] = 'Veiklos laukelyje naudokite tik raides ir skaičius';
        } else {
            Validation::$errors['7'] = '';
        }
    }

    private static function valVadovas($title) {
        $valid = preg_match('/^[a-zA-Z]{2,50}+/', $title);
        if (empty($title)) {
            Validation::$errors['8'] = 'Įveskite vadovo vardą ir pavardę';
        } else if (!$valid) {
            Validation::$errors['8'] = 'Vardo laukelyje naudokite tik raides';
        } else {
            Validation::$errors['8'] = '';
        }
    }

    public static function reg($data3) {
        self::regname($data3['vardas']);
        self::regemail($data3['emailas']);
        self::regpass($data3['slaptazodis']);
        return self::$reg;
    }

    private static function regname($vardas) {
        $valid = preg_match('/^[a-zA-Z0-9-_]{3,20}$/', $vardas);
        if (!$valid) {
            Validation::$reg['1'] = 'Vardas turi buti nuo 3 iki 20 simbolių, naudokite tik raides, skaičius, simbolius - ir _';
        } else {
            Validation::$reg['1'] = '';
        }
    }

    private static function regemail($emailas) {
        if (!filter_var($emailas, FILTER_VALIDATE_EMAIL)) {
            Validation::$reg['2'] = 'Neteisingas el. paštas';
        } else {
            Validation::$reg['2'] = '';
        }
    }

    private static function regpass($slaptazodis) {
        $valid = preg_match('/^(.{6,20})$/', $slaptazodis);
        if (!$valid) {
            Validation::$reg['2'] = 'Slaptažodis turi būti nuo 6 iki 20 simbolių';
        } else {
            Validation::$reg['2'] = '';
        }
    }
}