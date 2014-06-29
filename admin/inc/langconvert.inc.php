<?php

$search = array("А", "а", "Б", "б", "В", "в", "Г", "г", "Д", "д", "Е", "е", "Ё", "ё", "Ж", "ж", "З", "з", "И", "и", "Й", "й", "К", "к", "Л", "л", "М", "м", "Н", "н", "О", "о", "П", "п", "Р", "р", "С", "с", "Т", "т", "У", "у", "Ф", "ф", "Х", "х", "Ц", "ц", "Ч", "ч", "Ш", "ш", "Щ", "щ", "Ъ", "ъ", "Ы", "ы", "Ь", "ь", "Э", "э", "Ю", "ю", "Я", "я");
$replace = array("&#1040;", "&#1072;", "&#1041;", "&#1073;", "&#1042;", "&#1074;", "&#1043;", "&#1075;", "&#1044;", "&#1076;", "&#1045;", "&#1077;", "&#1025;", "&#1105;", "&#1046;", "&#1078;", "&#1047;", "&#1079;", "&#1048;", "&#1080;", "&#1049;", "&#1081;", "&#1050;", "&#1082;", "&#1051;", "&#1083;", "&#1052;", "&#1084;", "&#1053;", "&#1085;", "&#1054;", "&#1086;", "&#1055;", "&#1087;", "&#1056;", "&#1088;", "&#1057;", "&#1089;", "&#1058;", "&#1090;", "&#1059;", "&#1091;", "&#1060;", "&#1092;", "&#1061;", "&#1093;", "&#1062;", "&#1094;", "&#1063;", "&#1095;", "&#1064;", "&#1096;", "&#1065;", "&#1097;", "&#1066;", "&#1098;", "&#1067;", "&#1099;", "&#1068;", "&#1100;", "&#1069;", "&#1101;", "&#1070;", "&#1102;", "&#1071;", "&#1103;");


if ($_SESSION[user]->adminlang == 'russian')
{
	foreach ($FS_PHRASES AS $key => $value) {
		if (!is_array($value)) $FS_PHRASES[$key] = str_replace($search, $replace, $value);
		else foreach($value AS $key2 => $value2) {
			$FS_PHRASES[$key][$key2] = str_replace($search, $replace, $value2);;
		}
	}
}

?>