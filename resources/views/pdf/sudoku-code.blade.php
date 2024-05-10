@php 
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://sudoku-api.vercel.app/api/dosuku?query={newboard(limit:1){grids{value,difficulty}}}');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      
    $result = curl_exec($ch);
    $result = json_decode($result, true);
    $difficulty = $result['newboard']['grids'][0]['difficulty'];
    // echo "<pre>";
    // print_r($result['newboard']['grids'][0]['difficulty']);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
@endphp
@if ($size == 'A3')
    <div class="container" style="position: absolute;
    top: 25%;
    left: 15%;">
      <center>
          <table id="grid">
              @for($i = 0; $i < 9; $i++)
                  <tr> 
                      @for($j = 0; $j < 9; $j++)
                          <td style="width: 75px; height: 75px; font-size: 50px;">
                              @if($result['newboard']['grids'][0]['value'][$i][$j] == 0)
                                  {{ " " }}
                              @else
                                  {{ $result['newboard']['grids'][0]['value'][$i][$j] }}
                              @endif
                          </td>
                      @endfor
                  </tr>
              @endfor
          </table>
      </center>
    </div>
@endif
@if ($size == 'A4')
    <div class="container" style="position: absolute;
    top: 25%;
    left: 15%;">
      <center>
          <table id="grid">
              @for($i = 0; $i < 9; $i++)
                  <tr> 
                      @for($j = 0; $j < 9; $j++)
                          <td style="width: 50px; height: 50px; font-size: 25px;">
                              @if($result['newboard']['grids'][0]['value'][$i][$j] == 0)
                                  {{ " " }}
                              @else
                                  {{ $result['newboard']['grids'][0]['value'][$i][$j] }}
                              @endif
                          </td>
                      @endfor
                  </tr>
              @endfor
          </table>
      </center>
    </div>
@endif
@if ($size == 'A5')
    <div class="container" style="position: absolute;
    top: 20%;
    left: 8%;">
      <center>
          <table id="grid">
              @for($i = 0; $i < 9; $i++)
                  <tr> 
                      @for($j = 0; $j < 9; $j++)
                          <td style="width: 40px; height: 40px; font-size: 20px;">
                              @if($result['newboard']['grids'][0]['value'][$i][$j] == 0)
                                  {{ " " }}
                              @else
                                  {{ $result['newboard']['grids'][0]['value'][$i][$j] }}
                              @endif
                          </td>
                      @endfor
                  </tr>
              @endfor
          </table>
      </center>
    </div>
@endif
@if ($size == 'Letter')
    <div class="container" style="position: absolute;
    top: 25%;
    left: 15%;">
      <center>
          <table id="grid">
              @for($i = 0; $i < 9; $i++)
                  <tr> 
                      @for($j = 0; $j < 9; $j++)
                          <td style="width: 50px; height: 50px; font-size: 25px;">
                              @if($result['newboard']['grids'][0]['value'][$i][$j] == 0)
                                  {{ " " }}
                              @else
                                  {{ $result['newboard']['grids'][0]['value'][$i][$j] }}
                              @endif
                          </td>
                      @endfor
                  </tr>
              @endfor
          </table>
      </center>
    </div>
@endif
@if ($size == 'Legal')
    <div class="container" style="position: absolute;
    top: 30%;
    left: 10%;">
      <center>
          <table id="grid">
              @for($i = 0; $i < 9; $i++)
                  <tr> 
                      @for($j = 0; $j < 9; $j++)
                          <td style="width: 60px; height: 60px; font-size: 30px;">
                              @if($result['newboard']['grids'][0]['value'][$i][$j] == 0)
                                  {{ " " }}
                              @else
                                  {{ $result['newboard']['grids'][0]['value'][$i][$j] }}
                              @endif
                          </td>
                      @endfor
                  </tr>
              @endfor
          </table>
      </center>
    </div>
@endif