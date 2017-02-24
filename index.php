<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/index.css" media="screen">
    <title>Document</title>
  </head>
  <body>
    <p>
        <?php
          class Cat {
            public $isAlive = true;
            public $numLegs = 4;
            public $name;

            public function __construct($name){
                $this->name = $name;
                }

            public function meow(){
                return "Meow meow";}

            };

            $cat1 = new Cat("CodeCat");

            echo $cat1 -> meow();
        ?>
      </p>

  <script src="src/index.js" charset="utf-8"></script>
  </body>
  </html>
