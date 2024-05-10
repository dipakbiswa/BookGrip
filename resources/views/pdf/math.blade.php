@php 
function plus_minus($type) {
    $operator = "+";
    if (mt_rand() / mt_getrandmax() < 0.6) {
        $operator = "-";
    }
    if($type == 'easy'){
      $a = mt_rand(10, 30);
      $b = mt_rand(1, $a - 1);
    } if($type == 'medium'){
      $a = mt_rand(31, 69);
      $b = mt_rand(30, $a - 1);
    } if ($type == 'hard') {
      $a = mt_rand(70, 99);
      $b = mt_rand(60, $a - 1);
    }
    
    $c = $a - $b;
    if ($operator == "+") {
        $top = $b;
        $bottom = $c;
    } else {
        $top = $a;
        $bottom = $b;
    }
    return '<table class="problem">' .
        '<tr><td></td><td>' . $top . '</td></tr>' .
        '<tr><td>' . $operator . '</td><td>' . $bottom . '</td></tr>' .
        '</table>';
}

function plus($type) {
    $operator = "+";
    if($type == 'easy'){
      $a = mt_rand(10, 30);
      $b = mt_rand(1, $a - 1);
    } if($type == 'medium'){
      $a = mt_rand(31, 69);
      $b = mt_rand(30, $a - 1);
    } if ($type == 'hard') {
      $a = mt_rand(70, 99);
      $b = mt_rand(60, $a - 1);
    }
    $c = $a - $b;
    if ($operator == "+") {
        $top = $b;
        $bottom = $c;
    }
    return '<table class="problem">' .
        '<tr><td></td><td>' . $top . '</td></tr>' .
        '<tr><td>' . $operator . '</td><td>' . $bottom . '</td></tr>' .
        '</table>';
}

function minus($type) {
    $operator = "-";
    
    if($type == 'easy'){
      $a = mt_rand(10, 30);
      $b = mt_rand(1, $a - 1);
    } if($type == 'medium'){
      $a = mt_rand(31, 69);
      $b = mt_rand(30, $a - 1);
    } if ($type == 'hard') {
      $a = mt_rand(70, 99);
      $b = mt_rand(60, $a - 1);
    }
    $c = $a - $b;
    
    $top = $a;
    $bottom = $b;
    return '<table class="problem">' .
        '<tr><td></td><td>' . $top . '</td></tr>' .
        '<tr><td>' . $operator . '</td><td>' . $bottom . '</td></tr>' .
        '</table>';
}

function multiply($type) {
    $operator = "*";
    
    if($type == 'easy'){
      $a = mt_rand(10, 30);
      $b = mt_rand(1, $a - 1);
    } if($type == 'medium'){
      $a = mt_rand(31, 69);
      $b = mt_rand(30, $a - 1);
    } if ($type == 'hard') {
      $a = mt_rand(70, 99);
      $b = mt_rand(60, $a - 1);
    }
    $c = $a - $b;
    
    $top = $a;
    $bottom = $b;
    return '<table class="problem">' .
        '<tr><td></td><td>' . $top . '</td></tr>' .
        '<tr><td>' . $operator . '</td><td>' . $bottom . '</td></tr>' .
        '</table>';
}

function division($type) {
    $operator = "÷";
    
    if($type == 'easy'){
      $a = mt_rand(10, 30);
      $b = mt_rand(1, $a - 1);
    } if($type == 'medium'){
      $a = mt_rand(31, 69);
      $b = mt_rand(30, $a - 1);
    } if ($type == 'hard') {
      $a = mt_rand(70, 99);
      $b = mt_rand(60, $a - 1);
    }
    $c = $a - $b;
    
    // if ($a % $b == 0) {
      $top = $a;
      $bottom = $b;
    // } 
    
    return '<table class="problem">' .
        '<tr><td></td><td>' . $top . '</td></tr>' .
        '<tr><td>' . $operator . '</td><td>' . $bottom . '</td></tr>' .
        '</table>';
}
@endphp

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
  <title>Math Practice</title>
  <style type="text/css">
  h1 {
    text-align: center;
    font-family: Sans-Serif;
    font-weight: bold;
    font-size: 36px;
    margin: 20px 0 0 0;
    padding: 0;
  }
  #whole {
    margin-left: auto;
    margin-right: auto;
  }
  table.problem {
    font-family: Sans-Serif;
    font-size: 24px;
    text-align: right;
    border-bottom: solid;
    margin: 40px;
  }
  .page-break {
    page-break-after: always;
  }
  </style>
</head>
<body>
  @for ($i = 1; $i < $number; $i++)
    <h1>{{ $title }}</h1>
    <br><br><br>
    @include('pdf.math-code')
    <div class="page-break"></div>
  @endfor
</body>
</html>