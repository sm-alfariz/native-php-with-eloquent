<?php
require_once __DIR__.'/vendor/autoload.php';
use Helper\MyHelper ;
use Models\Berita; 
$db = MyHelper::konekDB(__DIR__.'/config/database.yml');
$loader = new Twig_Loader_Filesystem(__DIR__.'/templates');
$function = new Twig_SimpleFunction('limit_str', function ($text, $limit) { 
      if (str_word_count($text, 0) > $limit) {
          $words = str_word_count($text, 2);
          $pos = array_keys($words);
          $text = substr($text, 0, $pos[$limit]) . '...';
      }
      return $text;    
});
$twig = new Twig_Environment($loader, array(
    'cache' => 'cache',
    'debug' => true,
    'auto_reload' => true,
));
$twig->addFunction($function);
$steve_jobs_quotes = array(
	array('judul' => 'Technology is nothing.',
		'text'=>'Technology is nothing. Whats important is that you have a faith in people, that they re basically good and smart, and if you give them tools, they ll do wonderful things with them '),
	array('judul' => 'Design is a funny word.',
		'text'=>'Design is a funny word. Some people think design means how it looks. But of course, if you dig deeper, it s really how it works, Everyone here has the sense that right now is one of those moments when we are influencing the future.'),
	array('judul'=>'Your time is limited','text'=>'Your time is limited, so dont waste it living someone else s life. Dont be trapped by dogma - which is living with the results of other peoples thinking. Dont let the noise of others opinions drown out your own inner voice. And most important, have the courage to follow your heart and intuition')
);
$berita = Berita::limit(9)->get();
echo $twig->render('home.twig', array('berita' => $berita, 'quotes' => $steve_jobs_quotes));