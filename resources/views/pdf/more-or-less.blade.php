<!DOCTYPE html>
<html>
<head>
<title>More or Less</title>
<style>
.main{
	width: 100%;
    height: 100%;
    margin-top: 0;
}
.left{
	width: 50%;
    float: left;
}
.right{
	width: 50%;
    float: right;
}
.subpara{
	font-size: 30px;
}
.subhead{
	font-size: 20px;
}
.mostleft{
	float: left;
    margin-left: 50px;
}
.mostright{
	float: left;
    margin-left: 150px;
}
.mostright div{
	width: 150px;
    height: 100px;
    border-style: dotted;
    border-radius: 10px;
}
.main_section{
	/* margin-top: 0px; */
    margin: 10px;
	height: 450px;
    border: 3px solid black;
    border-radius: 10px;
    padding: 50px;
}
table tr td{
	padding: 5px;
}
.page-break {
    page-break-after: always;
}
</style>
</head>
<body>
@for ($i = 1; $i < $number; $i++)
    @if ($size == 'A4')
        <center>
            <h1>More or Less</h1>
            <p class="subpara">Let's see if you can count the cute ducks and<br> kittens and idenitfy which group has more?</p>
            <p class="subhead">Did you find the answer? Put a tick mark in the correct box.</p>
                <div class="left">
                    <div class="mostleft">
                        <img src="https://bookgrip.com/api/photo/more-or-less/4.png" style="height:100px;">
                    </div>
                    <div class="mostright">
                        <div class="bordercount"></div>
                    </div>
                </div>
                <div class="right">
                    <div class="mostleft">
                        <img src="https://bookgrip.com/api/photo/more-or-less/3.png" style="height:100px;">
                    </div>
                    <div class="mostright">
                        <div class="bordercount"></div>
                    </div>
                </div>
                <br><br><br><br><br><br><br><br><br>
            <div class="main_section">
                <table align="center">
                    <tr>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                    </tr>
                    <tr>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                    </tr>
                    <tr>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                    </tr>
                    <tr>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                    </tr>
                </table>
            </div>
        </center>
        <div class="page-break"></div>
    @endif
    @if ($size == 'A3')
        <center>
            <h1>More or Less</h1>
            <p class="subpara">Let's see if you can count the cute ducks and<br> kittens and idenitfy which group has more?</p>
            <p class="subhead">Did you find the answer? Put a tick mark in the correct box.</p>
                <div class="left">
                    <div class="mostleft">
                        <img src="https://bookgrip.com/api/photo/more-or-less/4.png" style="height:100px;">
                    </div>
                    <div class="mostright">
                        <div class="bordercount"></div>
                    </div>
                </div>
                <div class="right">
                    <div class="mostleft">
                        <img src="https://bookgrip.com/api/photo/more-or-less/3.png" style="height:100px;">
                    </div>
                    <div class="mostright">
                        <div class="bordercount"></div>
                    </div>
                </div>
                <br><br><br><br><br><br><br><br><br>
            <div class="main_section">
                <table align="center">
                    <tr>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                    </tr>
                    <tr>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                    </tr>
                    <tr>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                    </tr>
                    <tr>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                        <td><img src="https://bookgrip.com/api/photo/more-or-less/{{random_int(3, 4)}}.png" style="height:100px;"></td>
                    </tr>
                </table>
            </div>
        </center>
        <div class="page-break"></div>
    @endif
@endfor
</body>
</html>

