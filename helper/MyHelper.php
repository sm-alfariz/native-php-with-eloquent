<?php
namespace Helper;
use Symfony\Component\Yaml\Yaml; 
use Illuminate\Database\Capsule\Manager as Capsule;
class MyHelper {
    public static function konekDB($yml_config)
    {
		try {
		    //$db['config'] = Yaml::parse(file_get_contents(__DIR__.'/config/database.yml'));
		    $db['config'] = Yaml::parse(file_get_contents($yml_config));
		} catch (ParseException $e) {
		    printf("Unable to parse the YAML string: %s", $e->getMessage());
		}
		$capsule = new Capsule;
		$capsule->addConnection(
		    $db['config']['database']['connections'][
		        $db['config']['database']['connection']
		    ]
		);
		$capsule->setAsGlobal();
		$capsule->bootEloquent();
		return $capsule;    	
    }   
}