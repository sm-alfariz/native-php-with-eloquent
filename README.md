##instalasi :
- Kalo via git yah tinggal di clone aja
- edit configurasi database.yml menyesuaikan dengan database di komputer masing masing
- karena saya tidak sertakan folder vendor dan bower_components jadi :
  install sendiri di komputernya via composer : composer update (didalam folder projek)
- jika ingin source bootsrap dan jquery ada di local seperti contoh maka mesti install via bower :
  bower install bower install bootstrap, yah klo mau css sama js di load dari internet/cdn edit 
  layout.twig 	
  ubah bagian ini 
```<link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">```
menjadi 
```<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">```
dan di paling bawah ganti 
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>   
menjadi 
```
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
```
** saya sertakan juga dump mysql untuk database nya

referensi :
* [Elequont laravel](https://laravel.com/docs/5.3/eloquent)
* [Twig Template](twig.sensiolabs.org/documentation)
* [bootsratp](getbootstrap.com/getting-started/)
* [composer](https://getcomposer.org/)
