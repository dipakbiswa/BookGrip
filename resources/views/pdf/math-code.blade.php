@if ($size == 'A3')
    <table id="whole">
            @if($id == 40)
            <?php 
                for ($i=0; $i<8; $i++){
                    echo "<tr >";
                    for ($j=0; $j<7; $j++) {
                        if ($problem == '+') {
                            echo "<td style='font-size: 50px;'>" . plus($type) . "</td>";
                        }
                        if ($problem == '-') {
                            echo "<td style='font-size: 50px;'>" . minus($type) . "</td>";
                        }
                        if ($problem == '*') {
                            echo "<td style='font-size: 50px;'>" . multiply($type) . "</td>";
                        }
                        if ($problem == '/') {
                            echo "<td style='font-size: 50px;'>" . division($type) . "</td>";
                        }
                        if ($problem == 'both') {
                            echo "<td style='font-size: 50px;'>" . plus_minus($type) . "</td>";
                        }
                        
                    }
                    echo "</tr>";
                }
            ?>
            @endif
            @if($id == 41)
            <?php 
                for ($i=0; $i<8; $i++){
                    echo "<tr>";
                    for ($j=0; $j<6; $j++) {
                        if ($problem == '+') {
                            echo "<td style='border: 1px solid black; border-radius: 5px;'>" . plus($type) . "</td>";
                        }
                        if ($problem == '-') {
                            echo "<td style='border: 1px solid black; border-radius: 5px;'>" . minus($type) . "</td>";
                        }
                        if ($problem == '*') {
                            echo "<td style='border: 1px solid black; border-radius: 5px;'>" . multiply($type) . "</td>";
                        }
                        if ($problem == '/') {
                            echo "<td style='border: 1px solid black; border-radius: 5px;'>" . division($type) . "</td>";
                        }
                        if ($problem == 'both') {
                            echo "<td style='border: 1px solid black; border-radius: 5px;'>" . plus_minus($type) . "</td>";
                        }
                        
                    }
                    echo "</tr>";
                }
            ?>
            @endif
            @if($id == 42)
            <?php 
                for ($i=0; $i<8; $i++){
                    echo "<tr>";
                    for ($j=0; $j<6; $j++) {
                        if ($problem == '+') {
                            echo "<td style='border: 1px solid black; border-radius: 5px; border-style: dotted;'>" . plus($type) . "</td>";
                        }
                        if ($problem == '-') {
                            echo "<td style='border: 1px solid black; border-radius: 5px; border-style: dotted;'>" . minus($type) . "</td>";
                        }
                        if ($problem == '*') {
                            echo "<td style='border: 1px solid black; border-radius: 5px; border-style: dotted;'>" . multiply($type) . "</td>";
                        }
                        if ($problem == '/') {
                            echo "<td style='border: 1px solid black; border-radius: 5px; border-style: dotted;'>" . division($type) . "</td>";
                        }
                        if ($problem == 'both') {
                            echo "<td style='border: 1px solid black; border-radius: 5px; border-style: dotted;'>" . plus_minus($type) . "</td>";
                        }
                        
                    }
                    echo "</tr>";
                }
            ?>
            @endif
    </table>
@endif
@if ($size == 'A4')
    <table id="whole">
            @if($id == 40)
            <?php 
                for ($i=0; $i<5; $i++){
                    echo "<tr>";
                    for ($j=0; $j<5; $j++) {
                    if ($problem == '+') {
                        echo "<td >" . plus($type) . "</td>";
                    }
                    if ($problem == '-') {
                        echo "<td >" . minus($type) . "</td>";
                    }
                    if ($problem == '*') {
                        echo "<td >" . multiply($type) . "</td>";
                    }
                    if ($problem == '/') {
                        echo "<td >" . division($type) . "</td>";
                    }
                    if ($problem == 'both') {
                        echo "<td >" . plus_minus($type) . "</td>";
                    }
                        
                    }
                    echo "</tr>";
                }
            ?>
            @endif
            @if($id == 41)
            <?php 
                for ($i=0; $i<5; $i++){
                    echo "<tr>";
                    for ($j=0; $j<5; $j++) {
                    if ($problem == '+') {
                        echo "<td style='border: 1px solid black; border-radius: 5px;'>" . plus($type) . "</td>";
                    }
                    if ($problem == '-') {
                        echo "<td style='border: 1px solid black; border-radius: 5px;'>" . minus($type) . "</td>";
                    }
                    if ($problem == '*') {
                        echo "<td style='border: 1px solid black; border-radius: 5px;'>" . multiply($type) . "</td>";
                    }
                    if ($problem == '/') {
                        echo "<td style='border: 1px solid black; border-radius: 5px;'>" . division($type) . "</td>";
                    }
                    if ($problem == 'both') {
                        echo "<td style='border: 1px solid black; border-radius: 5px;'>" . plus_minus($type) . "</td>";
                    }
                        
                    }
                    echo "</tr>";
                }
            ?>
            @endif
            @if($id == 42)
            <?php 
                for ($i=0; $i<5; $i++){
                    echo "<tr>";
                    for ($j=0; $j<5; $j++) {
                    if ($problem == '+') {
                        echo "<td style='border: 1px solid black; border-radius: 5px; border-style: dotted;'>" . plus($type) . "</td>";
                    }
                    if ($problem == '-') {
                        echo "<td style='border: 1px solid black; border-radius: 5px; border-style: dotted;'>" . minus($type) . "</td>";
                    }
                    if ($problem == '*') {
                        echo "<td style='border: 1px solid black; border-radius: 5px; border-style: dotted;'>" . multiply($type) . "</td>";
                    }
                    if ($problem == '/') {
                        echo "<td style='border: 1px solid black; border-radius: 5px; border-style: dotted;'>" . division($type) . "</td>";
                    }
                    if ($problem == 'both') {
                        echo "<td style='border: 1px solid black; border-radius: 5px; border-style: dotted;'>" . plus_minus($type) . "</td>";
                    }
                        
                    }
                    echo "</tr>";
                }
            ?>
            @endif
    </table>
@endif
@if ($size == 'A5')
    <table id="whole">
            @if($id == 40)
            <?php 
                for ($i=0; $i<3; $i++){
                    echo "<tr>";
                    for ($j=0; $j<3; $j++) {
                        if ($problem == '+') {
                            echo "<td >" . plus($type) . "</td>";
                        }
                        if ($problem == '-') {
                            echo "<td >" . minus($type) . "</td>";
                        }
                        if ($problem == '*') {
                            echo "<td >" . multiply($type) . "</td>";
                        }
                        if ($problem == '/') {
                            echo "<td >" . division($type) . "</td>";
                        }
                        if ($problem == 'both') {
                            echo "<td >" . plus_minus($type) . "</td>";
                        }
                        
                    }
                    echo "</tr>";
                }
            ?>
            @endif
            @if($id == 41)
            <?php 
                for ($i=0; $i<3; $i++){
                    echo "<tr>";
                    for ($j=0; $j<3; $j++) {
                        if ($problem == '+') {
                            echo "<td style='border: 1px solid black; border-radius: 5px;'>" . plus($type) . "</td>";
                        }
                        if ($problem == '-') {
                            echo "<td style='border: 1px solid black; border-radius: 5px;'>" . minus($type) . "</td>";
                        }
                        if ($problem == '*') {
                            echo "<td style='border: 1px solid black; border-radius: 5px;'>" . multiply($type) . "</td>";
                        }
                        if ($problem == '/') {
                            echo "<td style='border: 1px solid black; border-radius: 5px;'>" . division($type) . "</td>";
                        }
                        if ($problem == 'both') {
                            echo "<td style='border: 1px solid black; border-radius: 5px;'>" . plus_minus($type) . "</td>";
                        }
                        
                    }
                    echo "</tr>";
                }
            ?>
            @endif
            @if($id == 42)
            <?php 
                for ($i=0; $i<3; $i++){
                    echo "<tr>";
                    for ($j=0; $j<3; $j++) {
                        if ($problem == '+') {
                            echo "<td style='border: 1px solid black; border-radius: 5px; border-style: dotted;'>" . plus($type) . "</td>";
                        }
                        if ($problem == '-') {
                            echo "<td style='border: 1px solid black; border-radius: 5px; border-style: dotted;'>" . minus($type) . "</td>";
                        }
                        if ($problem == '*') {
                            echo "<td style='border: 1px solid black; border-radius: 5px; border-style: dotted;'>" . multiply($type) . "</td>";
                        }
                        if ($problem == '/') {
                            echo "<td style='border: 1px solid black; border-radius: 5px; border-style: dotted;'>" . division($type) . "</td>";
                        }
                        if ($problem == 'both') {
                            echo "<td style='border: 1px solid black; border-radius: 5px; border-style: dotted;'>" . plus_minus($type) . "</td>";
                        }
                        
                    }
                    echo "</tr>";
                }
            ?>
            @endif
    </table>
@endif
@if ($size == 'Letter')
    <table id="whole">
            @if($id == 40)
            <?php 
                for ($i=0; $i<5; $i++){
                    echo "<tr>";
                    for ($j=0; $j<5; $j++) {
                    if ($problem == '+') {
                        echo "<td >" . plus($type) . "</td>";
                    }
                    if ($problem == '-') {
                        echo "<td >" . minus($type) . "</td>";
                    }
                    if ($problem == '*') {
                        echo "<td >" . multiply($type) . "</td>";
                    }
                    if ($problem == '/') {
                        echo "<td >" . division($type) . "</td>";
                    }
                    if ($problem == 'both') {
                        echo "<td >" . plus_minus($type) . "</td>";
                    }
                        
                    }
                    echo "</tr>";
                }
            ?>
            @endif
            @if($id == 41)
            <?php 
                for ($i=0; $i<5; $i++){
                    echo "<tr>";
                    for ($j=0; $j<5; $j++) {
                    if ($problem == '+') {
                        echo "<td style='border: 1px solid black; border-radius: 5px;'>" . plus($type) . "</td>";
                    }
                    if ($problem == '-') {
                        echo "<td style='border: 1px solid black; border-radius: 5px;'>" . minus($type) . "</td>";
                    }
                    if ($problem == '*') {
                        echo "<td style='border: 1px solid black; border-radius: 5px;'>" . multiply($type) . "</td>";
                    }
                    if ($problem == '/') {
                        echo "<td style='border: 1px solid black; border-radius: 5px;'>" . division($type) . "</td>";
                    }
                    if ($problem == 'both') {
                        echo "<td style='border: 1px solid black; border-radius: 5px;'>" . plus_minus($type) . "</td>";
                    }
                        
                    }
                    echo "</tr>";
                }
            ?>
            @endif
            @if($id == 42)
            <?php 
                for ($i=0; $i<5; $i++){
                    echo "<tr>";
                    for ($j=0; $j<5; $j++) {
                    if ($problem == '+') {
                        echo "<td style='border: 1px solid black; border-radius: 5px; border-style: dotted;'>" . plus($type) . "</td>";
                    }
                    if ($problem == '-') {
                        echo "<td style='border: 1px solid black; border-radius: 5px; border-style: dotted;'>" . minus($type) . "</td>";
                    }
                    if ($problem == '*') {
                        echo "<td style='border: 1px solid black; border-radius: 5px; border-style: dotted;'>" . multiply($type) . "</td>";
                    }
                    if ($problem == '/') {
                        echo "<td style='border: 1px solid black; border-radius: 5px; border-style: dotted;'>" . division($type) . "</td>";
                    }
                    if ($problem == 'both') {
                        echo "<td style='border: 1px solid black; border-radius: 5px; border-style: dotted;'>" . plus_minus($type) . "</td>";
                    }
                        
                    }
                    echo "</tr>";
                }
            ?>
            @endif
    </table>
@endif
@if ($size == 'Legal')
    <table id="whole">
            @if($id == 40)
            <?php 
                for ($i=0; $i<7; $i++){
                    echo "<tr>";
                    for ($j=0; $j<5; $j++) {
                    if ($problem == '+') {
                        echo "<td >" . plus($type) . "</td>";
                    }
                    if ($problem == '-') {
                        echo "<td >" . minus($type) . "</td>";
                    }
                    if ($problem == '*') {
                        echo "<td >" . multiply($type) . "</td>";
                    }
                    if ($problem == '/') {
                        echo "<td >" . division($type) . "</td>";
                    }
                    if ($problem == 'both') {
                        echo "<td >" . plus_minus($type) . "</td>";
                    }
                        
                    }
                    echo "</tr>";
                }
            ?>
            @endif
            @if($id == 41)
            <?php 
                for ($i=0; $i<7; $i++){
                    echo "<tr>";
                    for ($j=0; $j<5; $j++) {
                    if ($problem == '+') {
                        echo "<td style='border: 1px solid black; border-radius: 5px;'>" . plus($type) . "</td>";
                    }
                    if ($problem == '-') {
                        echo "<td style='border: 1px solid black; border-radius: 5px;'>" . minus($type) . "</td>";
                    }
                    if ($problem == '*') {
                        echo "<td style='border: 1px solid black; border-radius: 5px;'>" . multiply($type) . "</td>";
                    }
                    if ($problem == '/') {
                        echo "<td style='border: 1px solid black; border-radius: 5px;'>" . division($type) . "</td>";
                    }
                    if ($problem == 'both') {
                        echo "<td style='border: 1px solid black; border-radius: 5px;'>" . plus_minus($type) . "</td>";
                    }
                        
                    }
                    echo "</tr>";
                }
            ?>
            @endif
            @if($id == 42)
            <?php 
                for ($i=0; $i<7; $i++){
                    echo "<tr>";
                    for ($j=0; $j<5; $j++) {
                    if ($problem == '+') {
                        echo "<td style='border: 1px solid black; border-radius: 5px; border-style: dotted;'>" . plus($type) . "</td>";
                    }
                    if ($problem == '-') {
                        echo "<td style='border: 1px solid black; border-radius: 5px; border-style: dotted;'>" . minus($type) . "</td>";
                    }
                    if ($problem == '*') {
                        echo "<td style='border: 1px solid black; border-radius: 5px; border-style: dotted;'>" . multiply($type) . "</td>";
                    }
                    if ($problem == '/') {
                        echo "<td style='border: 1px solid black; border-radius: 5px; border-style: dotted;'>" . division($type) . "</td>";
                    }
                    if ($problem == 'both') {
                        echo "<td style='border: 1px solid black; border-radius: 5px; border-style: dotted;'>" . plus_minus($type) . "</td>";
                    }
                        
                    }
                    echo "</tr>";
                }
            ?>
            @endif
    </table>
@endif