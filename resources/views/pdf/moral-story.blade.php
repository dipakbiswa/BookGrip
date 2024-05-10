
<!DOCTYPE html>
<html>
<head>
<title>Moral Story</title>
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

    curl_setopt($ch, CURLOPT_URL, 'https://shortstories-api.onrender.com/');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($ch);
    $result = json_decode($result, true);
    // echo "<pre>";
    // print_r($result);
    $title = $result['title'];
    $author = $result['author'];
    $story = $result['story'];
    $moral = $result['moral'];
    // $words = str_word_count($riddle);
    // $answerWords = str_word_count($answer);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);

@endphp

  @if($size == 'A3')
    <div class="center-screen" style="height: 1480px;">
      <div class="riddle">
            <p style="font-size: 35px; text-align: center; font-family: {{ $titleFont }}; color: {{ $titleColor }};"><b>{{ $title }}</b></p>
            <p style="text-align: justify; font-size: 30px; font-family: {{ $storyFont }}; color: {{ $storyColor }};">{{ $story }}</p>
            <p style="text-align: center; font-size: 25px; font-family: {{ $moralFont }}; color: {{ $moralColor }};"><b>Moral:</b> {{ $moral }}</p>
        </div>
    </div>
    <div class="page-break"></div>
  @endif
  @if($size == 'A4')
    <div class="center-screen" style="height: 1000px;">
      <div class="riddle">
            <p style="font-size: 25px; text-align: center; font-family: {{ $titleFont }}; color: {{ $titleColor }};"><b>{{ $title }}</b></p>
            <p style="text-align: justify; font-size: 20px; font-family: {{ $storyFont }}; color: {{ $storyColor }};">{{ $story }}</p>
            <p style="text-align: center; font-size: 25px; font-family: {{ $moralFont }}; color: {{ $moralColor }};"><b>Moral:</b> {{ $moral }}</p>
        </div>
    </div>
    <div class="page-break"></div>
  @endif
  @if($size == 'A5')
    <div class="center-screen" style="height: 680px;">
      <div class="riddle">
            <p style="font-size: 18px; text-align: center; font-family: {{ $titleFont }}; color: {{ $titleColor }};"><b>{{ $title }}</b></p>
            <p style="text-align: justify; font-size: 20px; font-family: {{ $storyFont }}; color: {{ $storyColor }};">{{ $story }}</p>
            <p style="text-align: center; font-size: 20px; font-family: {{ $moralFont }}; color: {{ $moralColor }};"><b>Moral:</b> {{ $moral }}</p>
      </div>
    </div>
    <div class="page-break"></div>
  @endif
  @if($size == 'Letter')
    <div class="center-screen" style="height: 940px;">
      <div class="riddle">
        <p style="font-size: 25px; text-align: center; font-family: {{ $titleFont }}; color: {{ $titleColor }};"><b>{{ $title }}</b></p>
        <p style="text-align: justify; font-size: 20px; font-family: {{ $storyFont }}; color: {{ $storyColor }};">{{ $story }}</p>
        <p style="text-align: center; font-size: 25px; font-family: {{ $moralFont }}; color: {{ $moralColor }};"><b>Moral:</b> {{ $moral }}</p>
      </div>
    </div>
    <div class="page-break"></div>
  @endif
  @if($size == 'Legal')
    <div class="center-screen" style="height: 1200px;">
      <div class="riddle">
            <p style="font-size: 25px; text-align: center; font-family: {{ $titleFont }}; color: {{ $titleColor }};"><b>{{ $title }}</b></p>
            <p style="text-align: justify; font-size: 20px; font-family: {{ $storyFont }}; color: {{ $storyColor }};">{{ $story }}</p>
            <p style="text-align: center; font-size: 25px; font-family: {{ $moralFont }}; color: {{ $moralColor }};"><b>Moral:</b> {{ $moral }}</p>
      </div>
    </div>
    <div class="page-break"></div>
  @endif
@endfor
</body>
</html>
