<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


function die_pre($array = array())
{

    die("<pre>die_pre:<br />".print_r($array, TRUE)."<br />/die_pre</pre>");

}

function pre($array = array()) 
{
	 echo "<pre>die_pre:<br />".print_r($array, TRUE)."<br />/die_pre</pre>"; 
}

//con esta funcion quito los acentos de una cadena				
function normaliza ($cadena)
{
	$originales = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞ
	ßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ';
	$modificadas = 'aaaaaaaceeeeiiiidnoooooouuuuy
	bsaaaaaaaceeeeiiiidnoooooouuuyybyRr';
	$cadena = utf8_decode($cadena);
	$cadena = strtr($cadena, utf8_decode($originales), $modificadas);
	$cadena = strtolower($cadena);
	return utf8_encode($cadena);
}

//HELPER DE DICCIONARIO
//esto de be estar en un helper de diccionario
function normaliza_ultra ($cadena)
{
	$originales = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞ
	ßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ';
	$modificadas = 'aaaaaaaceeeeiiiidnoooooouuuuy
	bsaaaaaaaceeeeiiiidnoooooouuuyybyRr';
	$cadena = utf8_decode($cadena);
	$cadena = strtr($cadena, utf8_decode($originales), $modificadas);
	$cadena = strtolower($cadena);
	
	$cadena = str_ireplace(';','',$cadena);	
	$cadena = str_ireplace(':','', $cadena);	
	$cadena = str_ireplace(', ','-', $cadena);	
	$cadena = str_ireplace(' ', '-', $cadena);
	
	return utf8_encode($cadena);
}


//es la conbinacion de normailizar llevando todo a minuscula y sin espacios
function normalizaSinEspacios($cadena)
{
	$originales = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞ
	ßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ';
	$modificadas = 'aaaaaaaceeeeiiiidnoooooouuuuy
	bsaaaaaaaceeeeiiiidnoooooouuuyybyRr';
	$cadena = utf8_decode($cadena);
	$cadena = strtr($cadena, utf8_decode($originales), $modificadas);
	$cadena = strtolower($cadena);
	$cadena = utf8_encode($cadena);

	return str_ireplace(" ","",$cadena);
	
}

//funcion: normaliza el campo cadena seleccionado en el contenido de cada posicion de un vector de objetos
//NOTA:  
function vector_normalizaEspacios($vector)
{
	
	$originales = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞ
	ßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ';
	$modificadas = 'aaaaaaaceeeeiiiidnoooooouuuuy
	bsaaaaaaaceeeeiiiidnoooooouuuyybyRr';
	
	
	foreach ($vector as $posicion) 
	{
		//$objeto = new stdClass();
		$cadena = utf8_decode($posicion->nombre);
		$cadena = strtr($cadena, utf8_decode($originales), $modificadas);
		$cadena = strtolower(utf8_encode($cadena));
		$valor = str_ireplace(" ","",$cadena);
		
		$vector_resul[] = $valor;
	}

	return ($vector_resul);
	
}


//normalizo y distingo entre mayusculas y minisculas
function inormaliza ($cadena)
{
	$originales = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÒÓÔÕÖØÙÚÛÜÝÞ
	ßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ';
	$modificadas = 'AAAAAAACEEEEIIIIDNOOOOOOUUUUY
	BSaaaaaaaceeeeiiiidnoooooouuuyybyRr';
	$cadena = utf8_decode($cadena);
	$cadena = strtr($cadena, utf8_decode($originales), $modificadas);
	//$cadena = strtolower($cadena);
	return utf8_encode($cadena);
}

function acentos($texto)
{
	$originales = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞ
	ßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ';	
}

function sin_espacio($cadena)
{
	$trozos=explode(" ",$cadena);
	if (count($trozos)>1)
	{
		$nombre_libro = $trozos[0].$trozos[1];
	}
	else
	{
		$nombre_libro = $trozos[0];
	}
	return $nombre_libro;	
}

	
			
function limites($menor,$mayor,$actual) //evita pasar los limites
{
	//die_pre($mayor);
	if($actual < $menor)
	{
		$actual = $mayor;
	}
	elseif( $actual > $mayor )
	{
		$actual = $menor;
	}
	return($actual);
}



//segun wordprees esto terminos son rellenos innecesarios para pala busqueda
function termino_vacio($cadena)
{
	$obviar = array("a","acá","ahí","al","algo","alguna","algunas","alguno","algunos","algún","alli","allá","allí","ante","antes",
	"aquel","aquella","aquellas","aquello","aquellos","aqui","aquí","asi","atras","aun","aunque","b2","bajo","bastante",
	"bien","c","cabe","cada","casi","cierta","ciertas","cierto","ciertos","como","con","conmigo","conseguimos","conseguir,
	consigo","consigue","consiguen","consigues","contigo","contra","cual","cuales","cualquier","cualquiera",
	"cualquieras","cuando","cuanta","cuantas","cuanto","cuantos","cuánta","cuántas","cuánto","cuántos","cómo",
	"d","de","dejar","del","demas","demasiada","demasiadas","demasiado","demasiados","demás","dentro","desde",
	"donde","dos","e","el","ella","ellas","ello","ellos","en","encima","entonces","entre","era","eramos","eran",
	"eras","eres","es","esa","esas","ese","eso","esos","esta","estaba","estado","estais","estamos","estan","estar,
	estas","este","esto","estos","estoy","etc","f","fin","fue","fueron","fui","fuimos","g","gueno","h","ha","hace","haceis",
	"hacemos","hacen","hacer","haces","hacia","hago","han","hasta","i","incluso","intenta","intentais","intentamos",
	"intentan","intentar","intentas","intento","ir","j","jamás","junto","juntos","k","l","la","largo","las","le",
	"les","lo","los","m","mas","me","menos","mi","mia","mias","mientras","mio","mios","mis","misma","mismas","mismo",
	"mismos","modo","mucha","muchas","mucho","muchos","muchísima","muchísimas","muchísimo","muchísimos","muy",
	"más","mía","mío","n","nada","ni","ningun","ninguna","ningunas","ninguno","ningunos","no","nos","nosotras",
	"nosotros","nuestra","nuestras","nuestro","nuestros","nunca","o","os","otra","otras","otro","otros","p","para",
    "parecer","pero","poca","pocas","poco","pocos","podeis","podemos","poder","podria","podriais","podriamos","podrian",
    "podrias","por","por qué","porque","primero","primero desde","puede","pueden","puedo","pues","q","que","querer","quien",
    "quienes","quienquiera","quiera","quiza","quizas","quién","qué","r","s","sabe","sabeis","sabemos","saben","saber","sabes",
    "se","segun","según","ser","si","siempre","siendo","sin","sino","so","sobre","sois","solamente","solo","somos","soy","sr","sra",
  	"sres","su","sus","suya","suyas","suyo","suyos","sí","sín","t","tal","tales","tambien","también","tampoco","tan","tanta","tantas",
  	"tanto","tantos","te","teneis","tenemos","tener","tengo","ti","tiempo","tiene","tienen","toda","todas","todo","todos","tras","tu",
  	"tus","tuya","tuyo","tuyos","tú","u","ultimo","un","una","unas","uno","unos","usa","usais","usamos","usan","usar","usas","uso","usted",
  	"ustedes","v","va","vais","vamos","van","varias","varios","vaya","verdad","verdadera","vosotras","vosotros","voy","vuestra",
  	"vuestras","vuestro","vuestros","w","x","y","ya","yo","z","él","ñ");

  	for ($i=0;$i<count($obviar);$i++) 
  	{ 
  		//los espacios agregados es para que pueda buscar el termino exacto y no la sub-cadena
  		if(stripos($cadena,' '.$obviar[$i].' '))
  		{
  			$cadena = str_ireplace(' '.$obviar[$i].' ',' ',$cadena);
  		}		
  	}
  	return ($cadena);	
 } 

 //lo utilizare para normalizar la cadena de busqueda (todo a minuscula)
function limpiar_frase($cadena)
{
	$coincide  = array("á","é","í","ó","ú","ä","ë","ï","ö","ü","à","è","ì","ò","ù","ñ",",",".",";",":","&#161;","!","&#191;","?","/","*","+","&#180;","{","}","&#168;","â","ê","î","ô","û", "^","#","|","&#176;","=","[","]","&lt;","&gt;","`","(",")","&amp;","%","$","&#172;", "@","Á","É","Í","Ó","Ú","Ä","Ë","Ï","Ö","Ü","Â","Ê","Î","Ô","Û","~","À","È","Ì","Ò","Ù","_","\\"); 
	$reemplaza = array("a","e","i","o","u","a","e","i","o","u","a","e","i","o","u","n","","","","","","","","","","","","","","","","a","e","i","o","u","","","","","", "","","","","","","","","","","","","a","e","i","o","u","a","e","i","o", "u","a","e","i","o","u","","a","e","i","o","u","-","");
	$cadena_limpia = str_replace($coincide,$reemplaza,$cadena);

	return($cadena_limpia);	
}

 //lo utilizare para normalizar la cadena de busqueda (todo a minuscula) y omitiendo los .,:;- que usan las citas biblicas 
function limpiar_frase_concordancia($cadena)
{
    $coincide  = array("á","é","í","ó","ú","ä","ë","ï","ö","ü","à","è","ì","ò","ù","ñ","&#161;","!","&#191;","?","/","*","+","&#180;","{","}","&#168;","â","ê","î","ô","û", "^","#","|","&#176;","=","[","]","&lt;","&gt;","`","(",")","&amp;","%","$","&#172;", "@","Á","É","Í","Ó","Ú","Ä","Ë","Ï","Ö","Ü","Â","Ê","Î","Ô","Û","~","À","È","Ì","Ò","Ù","_","\\"); 
    $reemplaza = array("a","e","i","o","u","a","e","i","o","u","a","e","i","o","u","n","","","","","","","","","","","","a","e","i","o","u","","","","","", "","","","","","","","","","","","","a","e","i","o","u","a","e","i","o", "u","a","e","i","o","u","","a","e","i","o","u","-","");
    $cadena_limpia = str_replace($coincide,$reemplaza,$cadena);

    return($cadena_limpia); 
}  

//contruir busquedas en las plantillas de wordpress como noticia,imagenes que usaremos la url para introducir las busquedas
function urlBusqueda_wordpress($cadena)
{
	//pre('original: '.$cadena);
	$cadena = termino_vacio($cadena);
	//pre('sin terminos: '.$cadena);
	$cadena = limpiar_frase($cadena);
	//pre('normalizada: '.$cadena);
	$palabras = explode(" ",$cadena);
	$url = '?s=';

	//die_pre($palabras);
	$tope = count($palabras)-1;
	for ($i=0;$i<=$tope;$i++) 
  	{
  		//para que el la ultima iteracion no le agregue el + al final de la cadena 
  		if($i==$tope)
  		{
  			$url = $url.$palabras[$i];   
  		}else
  		{
  			$url = $url.$palabras[$i].'+';   
  		}
  	}

	//retorna la cadena de busqueda que se agrega a la url
	return($url);
}

function urlBusqueda_concordancia($cadena)
{
    //pre('original: '.$cadena);
    //$cadena = termino_vacio($cadena);
    //pre('sin terminos: '.$cadena);
    $cadena = limpiar_frase($cadena);
    //pre('normalizada: '.$cadena);
    $palabras = explode(" ",$cadena);
    $url = '?s=';

    //die_pre($palabras);
    $tope = count($palabras)-1;
    for ($i=0;$i<=$tope;$i++) 
    {
        //para que el la ultima iteracion no le agregue el + al final de la cadena 
        if($i==$tope)
        {
            $url = $url.$palabras[$i];   
        }else
        {
            $url = $url.$palabras[$i].'+';   
        }
    }

    //retorna la cadena de busqueda que se agrega a la url
    return($url);
}

function resul_negrita($palabra,&$texto)
{	
	//opcion 3
	$tam_palabra = strlen($palabra);
	$palabra = normaliza($palabra);
	//frase dividida en palabras
	$palabras = (object)explode(" ",$palabra);
	$obviar = array("la","los","un","una","de","se","y","que","del","a","es","el","lo");
	
	foreach ($texto as $verso) 
	{
		//die_pre($verso->info_versiculo);
		$verso_copia = inormaliza($verso->info_versiculo);
		$pos_inicio = stripos($verso_copia,$palabra);
		$verso_enutf8 = utf8_decode($verso->info_versiculo);
		
		if(is_numeric($pos_inicio))//es para saber si consiguen la primera posicion de la palabra
		{
			//decodifico para eliminar los caracteres raros y trabajar mejor la cadena y evitar perder posiciones  
			$verso->info_versiculo = utf8_encode(substr_replace($verso_enutf8,'<strong>'.substr($verso_enutf8,$pos_inicio,$tam_palabra).'</strong>',$pos_inicio,$tam_palabra));
		}
		else 
		{
			foreach ($palabras as $valor)
			{
				if(!in_array($valor,$obviar))
				{
					//tamano de cada palabra de la frase de busqueda
					
					$tam_valor = strlen($valor);	
					$pos_inicio_valor = stripos($verso_copia,$valor);
					if(is_numeric($pos_inicio_valor))
					{
						//pre($valor);
						//pre($verso_copia);
						//pre($pos_inicio_valor);
						
						//utf8 encode para quitar los caracteres extranos
						$verso->info_versiculo = utf8_encode(substr_replace($verso_enutf8,'<strong>'.substr($verso_enutf8,$pos_inicio_valor,$tam_valor).'</strong>',$pos_inicio_valor,$tam_valor));
						//pre($verso->info_versiculo);
						//$obviar [] = $valor;
						
						//decodifico para que quede como lo puede renderizar bien html
						$verso_enutf8 = utf8_decode($verso->info_versiculo);
						$verso_copia= inormaliza($verso->info_versiculo);
					}
				}
			}
				
			//$verso->info_versiculo = utf8_decode($verso->info_versiculo); 
		//die_pre("sdsds");
		}	
		//die_pre($verso->info_versiculo);
	}
	//die_pre("sdsds");
}
//codifica el url y sustituye los mas por un codigo que es aceptado por twiter en la url
function mi_urlencode($cadena)
{
	$resul = urlencode($cadena);
	$resul = str_replace('+','%2520',$resul);
	return($resul);	
}

//copia un arreglo de posiciones
function copia_matriz($array)
{
    foreach ($array as $i => $v) {
        $copia[$i] = clone $v;
    }   
    return($copia);
}

?>