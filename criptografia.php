<?

$cont=strlen($input); // Input vem do post em "cadastro.php"

// Criptografia própria baseada em tabela e equivalência.

// 	>	Desenvolvido por: KoubackTr
//	>	koubacktr@gmail.com
//	>	http://koubacktr.wordpress.com
//	>	http://twitter.comkouback_tr_
		
/* 	Este é o código responsável pela conversão da string, "senha", em criptografia hash, 
 * 	por meio de tabela definida em código,por isso é EXTREMAMENTE IMPORTANTE, que o desenvolvedor 
 * 	utilize varias combinações de caracteres e que jamais divulgue os dados.
 *	Tentei criar um loop para deixar o código mais limpo, porem aconteceram alguns "bugs" 
 *	devido a sequência/posição das letras no alfabeto hash e na string.
 *
 *  LEMBRE-SE: isso é um esboço para a ideia de criptografia unica em sistemas, 
 *  a ideia é sempre criar uma criptografia propria para cada sistemas, 
 *  evitando o uso de criptografias conhecidas como MDA e Base64
 * 	que já foram expostas, o que levam a sua facil descriptografia.
 */

$i=0; // variável contadora

$output=""; // Variável que recebe os dados caso caracter de $input seja equivalente ao definido.


while($i<$cont){
	
	switch($input[$i]){

// CHARS
		case "a":
			$output="$output"."eZ52";		break;  
		case "A":
			$output="$output"."EaY0"; 		break;
		case "b":
			$output="$output"."e98a"; 		break;
		case "B":
			$output="$output"."Ae"; 		break;
		case "c":
			$output="$output"."eA10"; 		break;
		case "d":
			$output="$output"."eTx87"; 		break; 
		case "D":
			$output="$output"."Esd582";		break;
		case "e":
			$output="$output"."Awe0"; 		break;
		case "E":
			$output="$output"."TyTT"; 		break;
		case "f":
			$output="$output"."54Ec"; 		break;
		case "F":
			$output="$output"."ABC"; 		break;
		case "g":
			$output="$output"."E7e9"; 		break;
		case "G":
			$output="$output"."e7E9"; 		break;
		case "h":
			$output="$output"."ExY6"; 		break;
		case "H":
			$output="$output"."OyEp066"; 	break;
		case "i":
			$output="$output"."wQd"; 		break; 
		case "I":
			$output="$output"."W525"; 		break;
		case "j":
			$output="$output"."QQ7"; 		break;
		case "J":
			$output="$output"."aEu1"; 		break;
		case "k":
			$output="$output"."11005"; 		break;
		case "K":
			$output="$output"."010EaY"; 	break;
		case "l":
			$output="$output"."Aei0"; 		break;
		case "L":
			$output="$output"."Ou4"; 		break;
		case "m":
			$output="$output"."wQtx4"; 		break; 
		case "M": 
			$output="$output"."Oetc9"; 		break;  
		case "n":
			$output="$output"."Qx339"; 		break; 
		case "N":
			$output="$output"."qZ663"; 		break;
		case "o":
			$output="$output"."994EW"; 		break;
		case "O":
			$output="$output"."Braz69"; 	break;
		case "p":
			$output="$output"."$54eZ"; 		break;
		case "P":
			$output="$output"."Aep"; 		break;
		case "q":
			$output="$output"."QyE0"; 		break;
		case "Q":
			$output="$output"."Adu8"; 		break;
		case "r":
			$output="$output"."rRr1"; 		break;
		case "R":
			$output="$output"."RrR2"; 		break;
		case "s":
			$output="$output"."78ew9"; 		break;
		case "S":
			$output="$output"."a24dDS"; 	break;
		case "t":
			$output="$output"."qq4226"; 	break;
		case "T":
			$output="$output"."e#13"; 		break;
		case "u":
			$output="$output"."54#eYy"; 	break;
		case "U":
			$output="$output"."67$1pT"; 	break;
		case "v":
			$output="$output"."2110ot"; 	break;
		case "V":
			$output="$output"."ezxW"; 		break;
		case "x":
			$output="$output"."qY+45ds"; 	break;
		case "X":
			$output="$output"."QqYuG"; 		break;
		case "w":
			$output="$output"."EtKk1"; 		break;
		case "W":
			$output="$output"."ETkkk1"; 	break;
		case "y":
			$output="$output"."Q@411eR"; 	break;
		case "Y":
			$output="$output"."Aec+4"; 		break;
		case "z":
			$output="$output"."1iEpcTuy09"; break;
		case "Z":
			$output="$output"."WwZ"; 		break;
		case "ç":
			$output="$output"."EggS"; 		break;
		//END CASE CHARS

// INT		
		case "1":
			$output="$output"."EtUi"; 		break;
		case "2":  
			$output="$output"."A9eT"; 		break;
		case "3":
			$output="$output"."OoEe"; 		break;
		case "4":
			$output="$output"."001eA"; 		break;
		case "5":
			$output="$output"."AxC&"; 		break;
		case "6":
			$output="$output"."997eE"; 		break;
		case "7":
			$output="$output"."Yy"; 		break;
		case "8":
		 	$output="$output"."WxY"; 		break;
		case "9":
			$output="$output"."CÇy"; 		break;
		case "0":
			$output="$output"."sWpQ1"; 		break;	
		// END CASE INT
		

//SPECIAL CHARS		
		case "!":
			$output="$output"."EzK"; 		break;
		case "@":
			$output="$output"."Ae1A"; 		break;
		case "#":
			$output="$output"."QQ"; 		break;
		case "$":
			$output="$output"."EyY"; 		break;
		case "%":
			$output="$output"."11eXz"; 		break;
		case "&":
			$output="$output"."&%9"; 		break;
		case "*":
			$output="$output"."11"; 		break;
		case "(":
			$output="$output"."zW"; 		break;
		case ")":
			$output="$output"."28"; 		break;
		case "_":
			$output="$output"."M16"; 		break;
		case "=":
			$output="$output"."NH4"; 		break;
		case "}":
			$output="$output"."SHAGD"; 		break;
		case "]":
			$output="$output"."djfhs!"; 	break;
		case "{":
			$output="$output"."riuwq"; 		break;
		case "[":
			$output="$output"."eWwQe"; 		break;
		case "'":
			$output="$output"."112"; 		break;
		case "^":
			$output="$output"."2121"; 		break;
		case "~":
			$output="$output"."2110"; 		break;
		case "?":
			$output="$output"."A+ee"; 		break;
		case "/":
			$output="$output"."shgr"; 		break;
		case "\\":
			$output="$output"."AaaA"; 		break;
		case "|":
			$output="$output"."XzXE2"; 		break;
		case "<":
			$output="$output"."0698e"; 		break;
		case ">":
			$output="$output"."B26"; 		break;
		case ":":
			$output="$output"."245ASDr"; 	break;
		case ".":
			$output="$output"."DD4s4"; 		break;
		case "-":
			$output="$output"."KKK"; 		break;
		case ",":
			$output="$output"."LOLz"; 		break;
		case '"':
			$output="$output"."BRBRuhe"; 	break;
		// END CASE SPECIAL CHARS

	}

$i++;
}

?>
