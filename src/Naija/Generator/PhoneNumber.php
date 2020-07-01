<?php
namespace NaijaFaker\Generator;

class PhoneNumber extends \NaijaFaker\Factory\PhoneNumber
{ 
 
 private $networkCode;
 private $provider;
 private $name;
 private $formats;

	protected static $extraFormat = array(
        '+234-{{networkCode}}-{{exchangeCode}}-####',
        '+234 ({{networkCode}}) {{exchangeCode}}-####',
        '+234-{{networkCode}}-{{exchangeCode}}-####',
        '+234.{{networkCode}}.{{exchangeCode}}.####',
        '+234{{networkCode}}{{exchangeCode}}####'
    );

    protected static $normalFormat = array(
        '{{networkCode}}-{{exchangeCode}}-####',
        '({{networkCode}}) {{exchangeCode}}-####',
    );


    protected static $fullFormat = array(
        '234-{{networkCode}}-{{exchangeCode}}-####',
        '234-({{networkCode}}) {{exchangeCode}}-####',
    );

	protected static $landLineFormat = array(
        '+234-{{areaCode}}-###-####',
        '({{areaCode}})-###-####',
    );

	protected static $landLineNoFormat = array(
        '+234{{areaCode}}#######',
        '({{areaCode}})###-####',
    );


	 public function __construct($networkCode = null, $provider = null, $name = null, $formats = null)
    {
		$this->networkCode = $networkCode;
		$this->provider = $provider;
		$this->name = $name;
		$this->formats = $formats;
    }

    public function randomPhoneNumber()
    {
    	//1. get NetworkCode
    	$areCode = self::getRandom(static::$allPrefix);
    	//2. get random 8 didgit
    	$rand = strlen($areCode) > 3 ? static::numberGenerator(7) : static::numberGenerator(8);
    	//3. pass to formater
    	return self::numberFormater($rand, '{{areaCode}}#######', [$areCode] );
    }


//Fetch local line (Random, by Area)

//Fetch Mobile Line (Random, By Provider, formats {full(+234), normal (without +234), extra (234)})

//Fetch Providers (Random, By Name)

	public function getNumber($count = 7)
	{
		return static::$areaCode['Umuahia'];
	}

}