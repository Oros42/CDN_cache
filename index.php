<?php
if(!empty($_GET['q'])){
	header('Access-Control-Allow-Origin: *');
	$folder='./files/';
	$q=substr($_SERVER["QUERY_STRING"], 14); // to keep parameters like "/fonts/family=Open+Sans:400italic,700italic,400,700"
	define('PHPPREFIX','<?php /* ');
	define('PHPSUFFIX',' */ ?>');
	define('DATASTORE','data.php');
	$data=(file_exists(DATASTORE) ? unserialize(gzinflate(base64_decode(substr(file_get_contents(DATASTORE),strlen(PHPPREFIX),-strlen(PHPSUFFIX))))) : array() );
	if($q=='list'){
		if(!empty($data)){
			foreach($data as $k => $d){
				echo htmlentities($k).' : '.htmlentities($d).'<br/>';
			}
		}
	}else{
		if(!empty($data[$q]) && is_file($data[$q])){
			echo file_get_contents($data[$q]);
		}else{
			$f=explode('/',$q);
			switch($f[0]){
				case 'ajax':
					header('Content-type: text/javascript');
					$q=substr($q,5);
					$url='https://ajax.googleapis.com/ajax/libs/'.$q;
					break;
				case 'apis':
					header('Content-type: text/javascript');
					$q=substr($q,5);
					$url='https://apis.google.com/js/'.$q;
					break;
				case 'themes':
					$q=substr($q,7);
					$url='https://themes.googleusercontent.com/'.$q;
					break;
				case 'fonts':
					header('Content-Type: text/css');
					$q=substr($q,6);
					$url='https://fonts.googleapis.com/css?'.$q;
					break;
				case 'gstatic-fonts':
					header('Content-Type: font/ttf');
                                        $q=substr($q,14);
					$url='https://fonts.gstatic.com/'.$q;
					break;
				case 'analytics':
					exit();
					break;
				default:
					exit('404');
			}
			$data[$q]=$folder.str_replace(array('/', "'", '"', '?', ',', ':', '+', '='),'__',$q).'.txt';
			file_put_contents(DATASTORE, PHPPREFIX.base64_encode(gzdeflate(serialize($data))).PHPSUFFIX);
			$file=file_get_contents($url);
			if(!file_exists($folder)){
				mkdir($folder);
			}
			file_put_contents($data[$q],$file);
			echo $file;
		}
	}

} ?>
