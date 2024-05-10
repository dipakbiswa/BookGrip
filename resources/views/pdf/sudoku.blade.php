
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Sudoku</title>
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    
    <style type="text/css">
    
      /* html, body {
        background-color: #FAFAFA
      } */

      table {
        border: 2px solid #000000;
      }

      td {
        border: 1px solid #000000;
        text-align: center;
        vertical-align: middle;  
      }

      
      .container{
        position: absolute;
        top: 20%;
        left: 15%;
        /* text-align: center; */
      }
      .page-break {
        page-break-after: always;
      }
    </style>
</head>
<body>
@if ($id == 49)
  @for ($i = 1; $i < $number; $i++)
    @include('pdf.sudoku-code')
    <div class="page-break"></div>
  @endfor
@endif
</body>
</html>