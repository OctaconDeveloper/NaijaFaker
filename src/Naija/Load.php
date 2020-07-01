<?php
	
	namespace NaijaFaker;

	class Load {

		private static $replace = array();

		private static $defaultNumber = '1234567890';

		protected static function getRandom(array $array)
		{
			return $array[array_rand($array)];
		}

		protected static function numberFormater(
			$number = '1234567890',
			$format = '####',
			$affix = array()
		)
		{
			$newFormat = '';

			$count = substr_count($format, "#");

			for ($i =0; $i < $count; $i++){
				$newFormat .= str_split($number)[$i];
			}
	        return trim(strtok(self::stringReplace($format, $affix), '#').$newFormat);
		}

		protected static function stringReplace(string $string, array $replace = [] )
		{
			self::$replace = $replace;
			return preg_replace_callback(
            "/{{.*}}/",
            "static::replaceMethod",
            $string);
		}

		private static function replaceMethod ($matches)
		{
			$toReplace = explode('-', $matches[0]); //splits the result into array
			$glue = implode('-',array_replace($toReplace,self::$replace)); //joins to array back
			return $glue; //return a glue with new replacements
		}
	}