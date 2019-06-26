<?php

class Header {

    private $title;
    private $meta;

    public function __construct($var1, $var2) {
        $this->title = $var1;
        $this->meta = $var2;
    }

    public function f_display() {
        echo "<html><head>\n";
        echo "<title>" . $this->title . "</title>\n";
        echo "<meta name='description' content='{ $this->meta }' \>\n";
        echo "<meta http-equiv='Content-Type' content='text/html;charset=utf-8' \>\n";       
        echo "</head>";
        echo "<body>\n";
        echo "Title=".$this->title;
        echo "Meta={$this->meta}";
    }

}

?> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/ex3">Пример 3</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>