@php
    //API call
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://opentdb.com/api.php?amount=1&category=9&difficulty=$difficulty&type=$type");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($ch);
    $result = json_decode($result, true);
        
    $response = $result['response_code'];
        
    if($response == 0){
        $questionType = $result['results'][0]['type'];
        $question = $result['results'][0]['question'];
        $correctAnswer = $result['results'][0]['correct_answer'];
        $incorrectAnswer = $result['results'][0]['incorrect_answers'];
    }

    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);

@endphp

<center>
 <div class="center-screen">
 	<div class="riddle">
        <p class="riddle-text" style="font-size: 30px; font-family: ;">{{ $question }}</p>
    </div>
    <br>
    <img src="https://bookgrip.com/api/photo/riddle/image.png" alt="">
    <div class="answer">
    	<p class="answer-heading" style="font-size: 20px; font-family: ;">Answer</p>
    	<hr class="hr">
    </div>
 </div>
</center>