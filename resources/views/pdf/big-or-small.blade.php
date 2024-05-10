<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<style>
.main{
	width: 100%;
    height: 90%;
}
.left{
	margin-top: 300px;
	width: 50%;
    float: left;
}
.right{
	margin-top: 300px;
	width: 50%;
    float: right;
}
.box{
	border: 1px solid black;
    height: 150px;
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
            <h2>Which animal is bigger</h2>
            <div class="main">
                <div class="left">
                    <img src="https://bookgrip.s3.amazonaws.com/coloring-books/animal/1+({{ random_int(1, 583) }}).svg" alt="">
                    <br><br><br><br>
                    <div class="box"></div>
                </div>
                <div class="right">
                    <img src="https://bookgrip.s3.amazonaws.com/coloring-books/animal/1+({{ random_int(1, 583) }}).svg" alt="">
                    <br><br><br><br>
                    <div class="box"></div>
                </div>
            </div>
        </center>
    @endif
    @if ($size == 'A3')
        <center>
            <h2>Which animal is bigger</h2>
            <div class="main">
                <div class="left">
                    <img src="https://bookgrip.s3.amazonaws.com/coloring-books/animal/1+({{ random_int(1, 583) }}).svg" alt="">
                    <br><br><br><br>
                    <div class="box"></div>
                </div>
                <div class="right">
                    <img src="https://bookgrip.s3.amazonaws.com/coloring-books/animal/1+({{ random_int(1, 583) }}).svg" alt="">
                    <br><br><br><br>
                    <div class="box"></div>
                </div>
            </div>
        </center>
    @endif
<div class="page-break"></div>
@endfor
</body>
</html>

