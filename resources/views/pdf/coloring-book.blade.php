<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .page-break {
            page-break-after: always;
        }
        #mydiv {
            position:absolute;
            top: 25%;
            left: 50%;
            width:30em;
            height:18em;
            margin-top: -9em; /*set to a negative number 1/2 of your height*/
            margin-left: -15em; /*set to a negative number 1/2 of your width*/
        }
    </style>
</head>
<body>
    @if ($id == 43)
        @for ($i = 1; $i < $number; $i++)
            @php
                $random_number = random_int(1, 583);
            @endphp
            <div id="mydiv">
            <center>
                @if($size == "A4")
                    <img height="800" src="https://bookgrip.s3.amazonaws.com/coloring-books/animal/1+({{ $random_number }}).svg" alt="">
                @endif
                @if($size == "A3")
                    <img height="1000" src="https://bookgrip.s3.amazonaws.com/coloring-books/animal/1+({{ $random_number }}).svg" alt="">
                @endif
                @if($size == "A5")
                    <br><br><br>
                    <img height="500" src="https://bookgrip.s3.amazonaws.com/coloring-books/animal/1+({{ $random_number }}).svg" alt="">
                @endif
                @if($size == "Letter")
                    <img height="800" src="https://bookgrip.s3.amazonaws.com/coloring-books/animal/1+({{ $random_number }}).svg" alt="">
                @endif
                @if($size == "Legal")
                    <img height="800" src="https://bookgrip.s3.amazonaws.com/coloring-books/animal/1+({{ $random_number }}).svg" alt="">
                @endif
            </center>
            </div>
            <div class="page-break"></div>
        @endfor
    @endif
</body>
</html>