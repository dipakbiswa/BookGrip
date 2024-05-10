
<!DOCTYPE html>
<html>
<head>
<title>Riddle</title>
<style>
    
@font-face {
    font-family: 'comici';
    src: url({{ storage_path('fonts\comici.ttf') }}) format("truetype");
    font-weight: 400; 
    font-style: normal;
}
@font-face {
    font-family: 'arial';
    src: url({{ storage_path('fonts\arial.ttf') }}) format("truetype");
    font-weight: 400; 
    font-style: normal;
}
.center-screen{
  border: 2px solid black;
  height: 100vh;
}
.riddle{
  width: 90%;
  height: 300px;
  margin-top: 25px;
  /* border: 1px solid black; */
  margin-left: 32px;
}
.image{
  width: 90%;
  height: 300px;
  margin-left: 32px;
  margin-bottom: 30px;
  /* border: 1px solid black; */
}
.answer{
  width: 90%;
  height: 250px;
  border: 2px solid black;
  margin-top: 25px;
  margin-left: 32px;
  margin-bottom: 25px;
  background: #f0f0f0;
}
.hr{
  /*margin-top: 25px;*/
  border: 1px solid black;
}
.riddle-text{
    margin-left: 20px;
    margin-right: 20px;
    
}
.page-break {
    page-break-after: always;
}
img{
    height: 300px;
    margin-bottom: 25px;
}
.answer-heading{
    font-family: comici;
}
.answer2{
    width: 90%;
  height: 500px;
  border: 2px solid black;
  margin-top: 25px;
  margin-left: 32px;
  margin-bottom: 25px;
  background: #f0f0f0;
}

</style>
</head>
<body>
@for ($i = 1; $i < $number; $i++)
@php

    //API call
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://riddles-api.vercel.app/random');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($ch);
    $result = json_decode($result, true);
    // echo "<pre>";
    // print_r($result);
    $riddle = $result['riddle'];
    $answer = $result['answer'];
    $words = str_word_count($riddle);
    $answerWords = str_word_count($answer);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);

@endphp

<center>
 <div class="center-screen">
 	<div class="riddle">
        <p class="riddle-text" 
            @if($words <= 40)
                style="font-size: 30px; font-family: {{$font}};"
            @else
                style="font-size: 20px; font-family: {{$font}};"
            @endif
        >{{$riddle}}</p>
    </div>
    <br>
    <div class="image">
        <center>
            <img src="https://bookgrip.com/api/photo/riddle/image.png" alt="">
        </center>
    </div>
    <div class="answer">
    	<p class="answer-heading" style="font-size: 20px; font-family: {{$font}};">Answer</p>
    	<hr class="hr">
    </div>
 </div>
</center>
<div class="page-break"></div>
{{-- Answer --}}
    @if($withAnswer == "1")
    <center>
        <div class="center-screen">
        <div class="answer2">
            <p class="answer-heading" style="font-size: 20px; font-family: {{$font}};">Answer</p>
            <hr class="hr">
            <p class="riddle-text" 
                @if($answerWords <= 40)
                    style="font-size: 30px; font-family: {{$font}};"
                @else
                    style="font-size: 20px; font-family: {{$font}};"
                @endif
            >{{$answer}}</p>
        </div>
        </div>
    </center>
    <div class="page-break"></div>
    @endif
@endfor
</body>
</html>
