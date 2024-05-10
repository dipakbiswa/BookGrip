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
    </style>
</head>
<body>
    
    {{-- Alphabate Maze --}}
    @if ($id == 13)
        @if ($size == 'A3')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(1, 3419);
                @endphp
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <center>
                    <img height="950" src="https://bookgrip.s3.amazonaws.com/alphabate-maze/1+({{$random_number}}).svg" alt="">
                </center>
                <div class="page-break"></div>
            @endfor
        @endif

        @if ($size == 'A4')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(1, 3419);
                @endphp
                <br><br><br>
                <center>
                    <img height="850" src="https://bookgrip.s3.amazonaws.com/alphabate-maze/1+({{$random_number}}).svg" alt="">
                </center>
                <div class="page-break"></div>
            @endfor
        @endif

        @if ($size == 'A5')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(1, 3419);
                @endphp
                <center>
                    <img height="650" src="https://bookgrip.s3.amazonaws.com/alphabate-maze/1+({{$random_number}}).svg" alt="">
                </center>
                <div class="page-break"></div>
            @endfor
        @endif

        @if ($size == 'Letter')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(1, 3419);
                @endphp
                <br><br><br><br><br><br><br>
                <center>
                    <img height="650" src="https://bookgrip.s3.amazonaws.com/alphabate-maze/1+({{$random_number}}).svg" alt="">
                </center>
                <div class="page-break"></div>
            @endfor
        @endif

        @if ($size == 'Legal')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(1, 3419);
                @endphp
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <center>
                    <img height="650" src="https://bookgrip.s3.amazonaws.com/alphabate-maze/1+({{$random_number}}).svg" alt="">
                </center>
                <div class="page-break"></div>
            @endfor
        @endif
        
    @endif
    

    {{-- Square Maze --}}
    @if ($id == 14)
        @if ($size == 'A3')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(1, 1000);
                @endphp
                @if ($type == 'easy')
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="700" src="https://bookgrip.s3.amazonaws.com/square/easy/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'medium')
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="700" src="https://bookgrip.s3.amazonaws.com/square/Medium/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'hard')
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="700" src="https://bookgrip.s3.amazonaws.com/square/Hard/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
            @endfor
        @endif
        @if ($size == 'A4')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(1, 1000);
                @endphp
                @if ($type == 'easy')
                    <br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/square/easy/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'medium')
                    <br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/square/Medium/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'hard')
                    <br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/square/Hard/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
            @endfor
        @endif
        @if ($size == 'A5')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(1, 1000);
                @endphp
                @if ($type == 'easy')
                    <br><br><br><br><br><br><br><br>
                    <center>
                        <img height="400" src="https://bookgrip.s3.amazonaws.com/square/easy/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'medium')
                    <br><br><br><br><br><br><br><br>
                    <center>
                        <img height="400" src="https://bookgrip.s3.amazonaws.com/square/Medium/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'hard')
                    <br><br><br><br><br><br><br><br>
                    <center>
                        <img height="400" src="https://bookgrip.s3.amazonaws.com/square/Hard/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
            @endfor
        @endif
        @if ($size == 'Letter')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(1, 1000);
                @endphp
                @if ($type == 'easy')
                    <br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/square/easy/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'medium')
                    <br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/square/Medium/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'hard')
                    <br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/square/Hard/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
            @endfor
        @endif
        @if ($size == 'Legal')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(1, 1000);
                @endphp
                @if ($type == 'easy')
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/square/easy/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'medium')
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/square/Medium/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'hard')
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/square/Hard/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
            @endfor
        @endif
    @endif
    {{-- Square Maze --}}


    {{-- Circle Maze --}}
    @if ($id == 15)
        @if ($size == 'A3')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(0, 1000);
                @endphp
                @if ($type == 'easy')
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="700" src="https://bookgrip.s3.amazonaws.com/circular/Easy/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'medium')
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="700" src="https://bookgrip.s3.amazonaws.com/circular/Medium/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'hard')
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="700" src="https://bookgrip.s3.amazonaws.com/circular/Hard/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
            @endfor
        @endif
        @if ($size == 'A4')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(0, 1000);
                @endphp
                @if ($type == 'easy')
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/circular/Easy/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'medium')
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/circular/Medium/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'hard')
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/circular/Hard/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
            @endfor
        @endif
        @if ($size == 'A5')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(0, 1000);
                @endphp
                @if ($type == 'easy')
                    <br><br><br><br><br><br><br>
                    <center>
                        <img height="450" src="https://bookgrip.s3.amazonaws.com/circular/Easy/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'medium')
                    <br><br><br><br><br><br><br>
                    <center>
                        <img height="450" src="https://bookgrip.s3.amazonaws.com/circular/Medium/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'hard')
                    <br><br><br><br><br><br><br>
                    <center>
                        <img height="450" src="https://bookgrip.s3.amazonaws.com/circular/Hard/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
            @endfor
        @endif
        @if ($size == 'Letter')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(0, 1000);
                @endphp
                @if ($type == 'easy')
                    <br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/circular/Easy/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'medium')
                    <br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/circular/Medium/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'hard')
                    <br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/circular/Hard/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
            @endfor
        @endif
        @if ($size == 'Legal')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(0, 1000);
                @endphp
                @if ($type == 'easy')
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/circular/Easy/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'medium')
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/circular/Medium/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'hard')
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/circular/Hard/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
            @endfor
        @endif
    @endif
    
    {{-- Hexa Bridge Maze --}}
    @if ($id == 16)
        @if ($size == 'A3')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(1, 283);
                @endphp
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <center>
                    <img height="850" src="https://bookgrip.s3.amazonaws.com/hexa-bridge-mazes/1+({{$random_number}}).svg" alt="">
                </center>
                <div class="page-break"></div>
            @endfor
        @endif
        @if ($size == 'A4')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(1, 283);
                @endphp
                <br><br><br><br><br><br><br><br><br>
                <center>
                    <img height="650" src="https://bookgrip.s3.amazonaws.com/hexa-bridge-mazes/1+({{$random_number}}).svg" alt="">
                </center>
                <div class="page-break"></div>
            @endfor
        @endif
        @if ($size == 'A5')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(1, 283);
                @endphp
                <br><br><br><br>
                <center>
                    <img height="450" src="https://bookgrip.s3.amazonaws.com/hexa-bridge-mazes/1+({{$random_number}}).svg" alt="">
                </center>
                <div class="page-break"></div>
            @endfor
        @endif
        @if ($size == 'Letter')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(1, 283);
                @endphp
                <br><br><br><br><br><br>
                <center>
                    <img height="650" src="https://bookgrip.s3.amazonaws.com/hexa-bridge-mazes/1+({{$random_number}}).svg" alt="">
                </center>
                <div class="page-break"></div>
            @endfor
        @endif
        @if ($size == 'Legal')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(1, 283);
                @endphp
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <center>
                    <img height="650" src="https://bookgrip.s3.amazonaws.com/hexa-bridge-mazes/1+({{$random_number}}).svg" alt="">
                </center>
                <div class="page-break"></div>
            @endfor
        @endif
    @endif
   

    {{-- Cross Maze --}}
    @if ($id == 17)
        @if ($size == 'A3')
            @for ($i = 1; $i < $number; $i++)
                @if ($type == 'easy')
                    @php
                        $random_number = random_int(1, 2000);
                    @endphp
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="850" src="https://bookgrip.s3.amazonaws.com/cross-maze/Easy/Easy+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
                @if ($type == 'medium')
                    @php
                        $random_number = random_int(1, 4000);
                    @endphp
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="850" src="https://bookgrip.s3.amazonaws.com/cross-maze/Medium/Medium+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
                @if ($type == 'hard')
                    @php
                        $random_number = random_int(1, 4000);
                    @endphp
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="850" src="https://bookgrip.s3.amazonaws.com/cross-maze/Hard/Hard+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
                @if ($type == 'extreme')
                    @php
                        $random_number = random_int(1, 2000);
                    @endphp
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="850" src="https://bookgrip.s3.amazonaws.com/cross-maze/Extreme/Ex+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
            @endfor
        @endif
        @if ($size == 'A4')
            @for ($i = 1; $i < $number; $i++)
                @if ($type == 'easy')
                    @php
                        $random_number = random_int(1, 2000);
                    @endphp
                    <br><br><br><br><br><br><br><br>
                    <center>
                        <img height="750" src="https://bookgrip.s3.amazonaws.com/cross-maze/Easy/Easy+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
                @if ($type == 'medium')
                    @php
                        $random_number = random_int(1, 4000);
                    @endphp
                    <br><br><br><br><br><br><br><br>
                    <center>
                        <img height="750" src="https://bookgrip.s3.amazonaws.com/cross-maze/Medium/Medium+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
                @if ($type == 'hard')
                    @php
                        $random_number = random_int(1, 4000);
                    @endphp
                    <br><br><br><br><br><br><br><br>
                    <center>
                        <img height="750" src="https://bookgrip.s3.amazonaws.com/cross-maze/Hard/Hard+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
                @if ($type == 'extreme')
                    @php
                        $random_number = random_int(1, 2000);
                    @endphp
                    <br><br><br><br><br><br><br><br>
                    <center>
                        <img height="750" src="https://bookgrip.s3.amazonaws.com/cross-maze/Extreme/Ex+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
            @endfor
        @endif
        @if ($size == 'A5')
            @for ($i = 1; $i < $number; $i++)
                @if ($type == 'easy')
                    @php
                        $random_number = random_int(1, 2000);
                    @endphp
                    <br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/cross-maze/Easy/Easy+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
                @if ($type == 'medium')
                    @php
                        $random_number = random_int(1, 4000);
                    @endphp
                    <br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/cross-maze/Medium/Medium+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
                @if ($type == 'hard')
                    @php
                        $random_number = random_int(1, 4000);
                    @endphp
                    <br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/cross-maze/Hard/Hard+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
                @if ($type == 'extreme')
                    @php
                        $random_number = random_int(1, 2000);
                    @endphp
                    <br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/cross-maze/Extreme/Ex+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
            @endfor
        @endif
        @if ($size == 'Letter')
            @for ($i = 1; $i < $number; $i++)
                @if ($type == 'easy')
                    @php
                        $random_number = random_int(1, 2000);
                    @endphp
                    <br><br><br><br>
                    <center>
                        <img height="750" src="https://bookgrip.s3.amazonaws.com/cross-maze/Easy/Easy+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
                @if ($type == 'medium')
                    @php
                        $random_number = random_int(1, 4000);
                    @endphp
                    <br><br><br><br>
                    <center>
                        <img height="750" src="https://bookgrip.s3.amazonaws.com/cross-maze/Medium/Medium+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
                @if ($type == 'hard')
                    @php
                        $random_number = random_int(1, 4000);
                    @endphp
                    <br><br><br><br>
                    <center>
                        <img height="750" src="https://bookgrip.s3.amazonaws.com/cross-maze/Hard/Hard+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
                @if ($type == 'extreme')
                    @php
                        $random_number = random_int(1, 2000);
                    @endphp
                    <br><br><br><br>
                    <center>
                        <img height="750" src="https://bookgrip.s3.amazonaws.com/cross-maze/Extreme/Ex+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
            @endfor
        @endif
        @if ($size == 'Legal')
            @for ($i = 1; $i < $number; $i++)
                @if ($type == 'easy')
                    @php
                        $random_number = random_int(1, 2000);
                    @endphp
                    <br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="850" src="https://bookgrip.s3.amazonaws.com/cross-maze/Easy/Easy+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
                @if ($type == 'medium')
                    @php
                        $random_number = random_int(1, 4000);
                    @endphp
                    <br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="850" src="https://bookgrip.s3.amazonaws.com/cross-maze/Medium/Medium+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
                @if ($type == 'hard')
                    @php
                        $random_number = random_int(1, 4000);
                    @endphp
                    <br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="850" src="https://bookgrip.s3.amazonaws.com/cross-maze/Hard/Hard+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
                @if ($type == 'extreme')
                    @php
                        $random_number = random_int(1, 2000);
                    @endphp
                    <br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="850" src="https://bookgrip.s3.amazonaws.com/cross-maze/Extreme/Ex+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
            @endfor
        @endif
    @endif
    {{-- Cross Maze --}}

    {{-- extream wave Maze --}}
    @if ($id == 18)
        @if ($size == 'A3')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(0, 499);
                @endphp
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                @if ($type === "curly")
                    <center>
                        <img height="950" src="https://bookgrip.s3.amazonaws.com/Extreme+Weave+mazes/Maze+Weave+Curly/{{$random_number}}+-+MazeW.svg" alt="">
                    </center>
                @endif
                @if ($type === "straight")
                    <center>
                        <img height="950" src="https://bookgrip.s3.amazonaws.com/Extreme+Weave+mazes/Maze+Weave+Straight/{{$random_number}}+-+Maze.svg" alt="">
                    </center>
                @endif
                <div class="page-break"></div>
            @endfor
        @endif
        @if ($size == 'A4')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(0, 499);
                @endphp
                <br><br><br><br><br><br>
                @if ($type === "curly")
                    <center>
                        <img height="800" src="https://bookgrip.s3.amazonaws.com/Extreme+Weave+mazes/Maze+Weave+Curly/{{$random_number}}+-+MazeW.svg" alt="">
                    </center>
                @endif
                @if ($type === "straight")
                    <center>
                        <img height="800" src="https://bookgrip.s3.amazonaws.com/Extreme+Weave+mazes/Maze+Weave+Straight/{{$random_number}}+-+Maze.svg" alt="">
                    </center>
                @endif
                <div class="page-break"></div>
            @endfor
        @endif
        @if ($size == 'A5')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(0, 499);
                @endphp
                <br><br><br><br>
                @if ($type === "curly")
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/Extreme+Weave+mazes/Maze+Weave+Curly/{{$random_number}}+-+MazeW.svg" alt="">
                    </center>
                @endif
                @if ($type === "straight")
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/Extreme+Weave+mazes/Maze+Weave+Straight/{{$random_number}}+-+Maze.svg" alt="">
                    </center>
                @endif
                <div class="page-break"></div>
            @endfor
        @endif
        @if ($size == 'Letter')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(0, 499);
                @endphp
                <br><br><br>
                @if ($type === "curly")
                    <center>
                        <img height="850" src="https://bookgrip.s3.amazonaws.com/Extreme+Weave+mazes/Maze+Weave+Curly/{{$random_number}}+-+MazeW.svg" alt="">
                    </center>
                @endif
                @if ($type === "straight")
                    <center>
                        <img height="850" src="https://bookgrip.s3.amazonaws.com/Extreme+Weave+mazes/Maze+Weave+Straight/{{$random_number}}+-+Maze.svg" alt="">
                    </center>
                @endif
                <div class="page-break"></div>
            @endfor
        @endif
        @if ($size == 'Legal')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(0, 499);
                @endphp
                <br><br><br><br><br><br><br><br><br><br>
                @if ($type === "curly")
                    <center>
                        <img height="850" src="https://bookgrip.s3.amazonaws.com/Extreme+Weave+mazes/Maze+Weave+Curly/{{$random_number}}+-+MazeW.svg" alt="">
                    </center>
                @endif
                @if ($type === "straight")
                    <center>
                        <img height="850" src="https://bookgrip.s3.amazonaws.com/Extreme+Weave+mazes/Maze+Weave+Straight/{{$random_number}}+-+Maze.svg" alt="">
                    </center>
                @endif
                <div class="page-break"></div>
            @endfor
        @endif
    @endif
    {{-- extream wave Maze --}}


    {{-- Squreare bridge Maze --}}
    @if ($id == 19)
        @if ($size == 'A3')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(0, 343);
                @endphp
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <center>
                    <img height="850" src="https://bookgrip.s3.amazonaws.com/square-bridge-maze/1+({{$random_number}}).svg" alt="">
                </center>
                <div class="page-break"></div>
            @endfor
        @endif
        @if ($size == 'A4')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(0, 343);
                @endphp
                <br><br><br><br>
                <center>
                    <img height="800" src="https://bookgrip.s3.amazonaws.com/square-bridge-maze/1+({{$random_number}}).svg" alt="">
                </center>
                <div class="page-break"></div>
            @endfor
        @endif
        @if ($size == 'A5')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(0, 343);
                @endphp
                <br><br><br><br>
                <center>
                    <img height="550" src="https://bookgrip.s3.amazonaws.com/square-bridge-maze/1+({{$random_number}}).svg" alt="">
                </center>
                <div class="page-break"></div>
            @endfor
        @endif
        @if ($size == 'Letter')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(0, 343);
                @endphp
                <br><br><br><br><br><br>
                <center>
                    <img height="650" src="https://bookgrip.s3.amazonaws.com/square-bridge-maze/1+({{$random_number}}).svg" alt="">
                </center>
                <div class="page-break"></div>
            @endfor
        @endif
        @if ($size == 'Legal')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(0, 343);
                @endphp
                <br><br><br><br><br><br><br><br>
                <center>
                    <img height="850" src="https://bookgrip.s3.amazonaws.com/square-bridge-maze/1+({{$random_number}}).svg" alt="">
                </center>
                <div class="page-break"></div>
            @endfor
        @endif
    @endif
    {{-- Squreare bridge Maze --}}

    {{-- heart Maze --}}
    @if ($id == 20)
        @if ($size == 'A3')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(0, 999);
                @endphp
                @if ($algorithm === "kruskal")
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="950" src="https://bookgrip.s3.amazonaws.com/heart/kruskal/MazeK{{ $random_number }}.svg" alt="">
                    </center>
                @endif
                @if ($algorithm === "prism")
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="950" src="https://bookgrip.s3.amazonaws.com/heart/prism/MazeP{{ $random_number }}.svg" alt="">
                    </center>
                @endif
                @if ($algorithm === "recursive")
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="950" src="https://bookgrip.s3.amazonaws.com/heart/recursive/MazeRB{{ $random_number }}.svg" alt="">
                    </center>
                @endif
                @if ($algorithm === "wilson")
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="950" src="https://bookgrip.s3.amazonaws.com/heart/wilson/MazeW{{ $random_number }}.svg" alt="">
                    </center>
                @endif
                <div class="page-break"></div>
            @endfor
        @endif
        @if ($size == 'A4')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(0, 999);
                @endphp
                @if ($algorithm === "kruskal")
                    <br><br><br><br>
                    <center>
                        <img height="850" src="https://bookgrip.s3.amazonaws.com/heart/kruskal/MazeK{{ $random_number }}.svg" alt="">
                    </center>
                @endif
                @if ($algorithm === "prism")
                    <br><br><br><br>
                    <center>
                        <img height="850" src="https://bookgrip.s3.amazonaws.com/heart/prism/MazeP{{ $random_number }}.svg" alt="">
                    </center>
                @endif
                @if ($algorithm === "recursive")
                    <br><br><br><br>
                    <center>
                        <img height="850" src="https://bookgrip.s3.amazonaws.com/heart/recursive/MazeRB{{ $random_number }}.svg" alt="">
                    </center>
                @endif
                @if ($algorithm === "wilson")
                    <br><br><br><br>
                    <center>
                        <img height="850" src="https://bookgrip.s3.amazonaws.com/heart/wilson/MazeW{{ $random_number }}.svg" alt="">
                    </center>
                @endif
                <div class="page-break"></div>
            @endfor
        @endif
        @if ($size == 'A5')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(0, 999);
                @endphp
                @if ($algorithm === "kruskal")
                    <br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/heart/kruskal/MazeK{{ $random_number }}.svg" alt="">
                    </center>
                @endif
                @if ($algorithm === "prism")
                    <br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/heart/prism/MazeP{{ $random_number }}.svg" alt="">
                    </center>
                @endif
                @if ($algorithm === "recursive")
                    <br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/heart/recursive/MazeRB{{ $random_number }}.svg" alt="">
                    </center>
                @endif
                @if ($algorithm === "wilson")
                    <br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/heart/wilson/MazeW{{ $random_number }}.svg" alt="">
                    </center>
                @endif
                <div class="page-break"></div>
            @endfor
        @endif
        @if ($size == 'Letter')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(0, 999);
                @endphp
                @if ($algorithm === "kruskal")
                    <br><br><br>
                    <center>
                        <img height="850" src="https://bookgrip.s3.amazonaws.com/heart/kruskal/MazeK{{ $random_number }}.svg" alt="">
                    </center>
                @endif
                @if ($algorithm === "prism")
                    <br><br><br>
                    <center>
                        <img height="850" src="https://bookgrip.s3.amazonaws.com/heart/prism/MazeP{{ $random_number }}.svg" alt="">
                    </center>
                @endif
                @if ($algorithm === "recursive")
                    <br><br><br>
                    <center>
                        <img height="850" src="https://bookgrip.s3.amazonaws.com/heart/recursive/MazeRB{{ $random_number }}.svg" alt="">
                    </center>
                @endif
                @if ($algorithm === "wilson")
                    <br><br><br>
                    <center>
                        <img height="850" src="https://bookgrip.s3.amazonaws.com/heart/wilson/MazeW{{ $random_number }}.svg" alt="">
                    </center>
                @endif
                <div class="page-break"></div>
            @endfor
        @endif
        @if ($size == 'Legal')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(0, 999);
                @endphp
                @if ($algorithm === "kruskal")
                    <br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="850" src="https://bookgrip.s3.amazonaws.com/heart/kruskal/MazeK{{ $random_number }}.svg" alt="">
                    </center>
                @endif
                @if ($algorithm === "prism")
                    <br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="850" src="https://bookgrip.s3.amazonaws.com/heart/prism/MazeP{{ $random_number }}.svg" alt="">
                    </center>
                @endif
                @if ($algorithm === "recursive")
                    <br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="850" src="https://bookgrip.s3.amazonaws.com/heart/recursive/MazeRB{{ $random_number }}.svg" alt="">
                    </center>
                @endif
                @if ($algorithm === "wilson")
                    <br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="850" src="https://bookgrip.s3.amazonaws.com/heart/wilson/MazeW{{ $random_number }}.svg" alt="">
                    </center>
                @endif
                <div class="page-break"></div>
            @endfor
        @endif
    @endif
    {{-- heart Maze --}}



    {{-- Triangular Maze --}}
    @if ($id == 21)
        @if ($size == 'A3')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(0, 1000);
                @endphp
                @if ($type == 'easy')
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="750" src="https://bookgrip.s3.amazonaws.com/Triangular/Easy/1+({{ $random_number }}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'medium')
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="750" src="https://bookgrip.s3.amazonaws.com/Triangular/Medium/1+({{ $random_number }}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'hard')
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="750" src="https://bookgrip.s3.amazonaws.com/Triangular/Hard/1+({{ $random_number }}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
            @endfor
        @endif
        @if ($size == 'A4')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(0, 1000);
                @endphp
                @if ($type == 'easy')
                    <br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/Triangular/Easy/1+({{ $random_number }}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'medium')
                    <br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/Triangular/Medium/1+({{ $random_number }}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'hard')
                    <br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/Triangular/Hard/1+({{ $random_number }}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
            @endfor
        @endif
        @if ($size == 'A5')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(0, 1000);
                @endphp
                @if ($type == 'easy')
                    <br><br><br><br><br><br><br>
                    <center>
                        <img height="400" src="https://bookgrip.s3.amazonaws.com/Triangular/Easy/1+({{ $random_number }}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'medium')
                    <br><br><br><br><br><br><br>
                    <center>
                        <img height="400" src="https://bookgrip.s3.amazonaws.com/Triangular/Medium/1+({{ $random_number }}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'hard')
                    <br><br><br><br><br><br><br>
                    <center>
                        <img height="400" src="https://bookgrip.s3.amazonaws.com/Triangular/Hard/1+({{ $random_number }}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
            @endfor
        @endif
        @if ($size == 'Letter')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(0, 1000);
                @endphp
                @if ($type == 'easy')
                    <br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/Triangular/Easy/1+({{ $random_number }}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'medium')
                    <br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/Triangular/Medium/1+({{ $random_number }}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'hard')
                    <br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/Triangular/Hard/1+({{ $random_number }}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
            @endfor
        @endif
        @if ($size == 'Legal')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(0, 1000);
                @endphp
                @if ($type == 'easy')
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/Triangular/Easy/1+({{ $random_number }}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'medium')
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/Triangular/Medium/1+({{ $random_number }}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'hard')
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/Triangular/Hard/1+({{ $random_number }}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
            @endfor
        @endif
    @endif

    {{-- Bunny Maze --}}
    @if ($id == 22)
        @if ($size == 'A3')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(1, 10000);
                @endphp
                <br><br><br><br><br><br><br><br><br><br><br>
                <center>
                    <img height="1050" src="https://bookgrip.s3.amazonaws.com/bunny-mazes/1+({{$random_number}}).svg" alt="">
                </center>
                <div class="page-break"></div>
            @endfor
        @endif
        @if ($size == 'A4')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(1, 10000);
                @endphp
                <br><br><br><br>
                <center>
                    <img height="850" src="https://bookgrip.s3.amazonaws.com/bunny-mazes/1+({{$random_number}}).svg" alt="">
                </center>
                <div class="page-break"></div>
            @endfor
        @endif
        @if ($size == 'A5')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(1, 10000);
                @endphp
                <br><br>
                <center>
                    <img height="600" src="https://bookgrip.s3.amazonaws.com/bunny-mazes/1+({{$random_number}}).svg" alt="">
                </center>
                <div class="page-break"></div>
            @endfor
        @endif
        @if ($size == 'Letter')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(1, 10000);
                @endphp
                <br><br><br>
                <center>
                    <img height="850" src="https://bookgrip.s3.amazonaws.com/bunny-mazes/1+({{$random_number}}).svg" alt="">
                </center>
                <div class="page-break"></div>
            @endfor
        @endif
        @if ($size == 'Legal')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(1, 10000);
                @endphp
                <br><br><br><br><br><br><br><br>
                <center>
                    <img height="850" src="https://bookgrip.s3.amazonaws.com/bunny-mazes/1+({{$random_number}}).svg" alt="">
                </center>
                <div class="page-break"></div>
            @endfor
        @endif
    @endif

    {{-- Hexa Maze --}}
    @if ($id == 23)
        @if ($size == 'A3')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(0, 1000);
                @endphp
                @if ($type == 'easy')
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="850" src="https://bookgrip.s3.amazonaws.com/hexagonal-maze/easy/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'medium')
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="850" src="https://bookgrip.s3.amazonaws.com/hexagonal-maze/medium/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'hard')
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="850" src="https://bookgrip.s3.amazonaws.com/hexagonal-maze/hard/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
            @endfor
        @endif
        @if ($size == 'A4')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(0, 1000);
                @endphp
                @if ($type == 'easy')
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/hexagonal-maze/easy/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'medium')
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/hexagonal-maze/medium/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'hard')
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/hexagonal-maze/hard/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
            @endfor
        @endif
        @if ($size == 'A5')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(0, 1000);
                @endphp
                @if ($type == 'easy')
                    <br><br><br><br><br><br><br><br>
                    <center>
                        <img height="400" src="https://bookgrip.s3.amazonaws.com/hexagonal-maze/easy/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'medium')
                    <br><br><br><br><br><br><br><br>
                    <center>
                        <img height="400" src="https://bookgrip.s3.amazonaws.com/hexagonal-maze/medium/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'hard')
                    <br><br><br><br><br><br><br><br>
                    <center>
                        <img height="400" src="https://bookgrip.s3.amazonaws.com/hexagonal-maze/hard/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
            @endfor
        @endif
        @if ($size == 'Letter')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(0, 1000);
                @endphp
                @if ($type == 'easy')
                    <br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/hexagonal-maze/easy/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'medium')
                    <br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/hexagonal-maze/medium/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'hard')
                    <br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="550" src="https://bookgrip.s3.amazonaws.com/hexagonal-maze/hard/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
            @endfor
        @endif
        @if ($size == 'Legal')
            @for ($i = 1; $i < $number; $i++)
                @php
                    $random_number = random_int(0, 1000);
                @endphp
                @if ($type == 'easy')
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="650" src="https://bookgrip.s3.amazonaws.com/hexagonal-maze/easy/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'medium')
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="650" src="https://bookgrip.s3.amazonaws.com/hexagonal-maze/medium/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif

                @if ($type == 'hard')
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <center>
                        <img height="650" src="https://bookgrip.s3.amazonaws.com/hexagonal-maze/hard/1+({{$random_number}}).svg" alt="">
                    </center>
                    <div class="page-break"></div>
                @endif
            @endfor
        @endif
    @endif



</body>
</html>