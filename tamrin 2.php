<?php

$person = range(1,10);
$x = 0;
$rnd=[0];
$serv=[0];
$rndnum=[];
$ent=[];
$enttime=[0];
$f=0;
while ($x <= 10)
{
    $rnd[]=rand(0,1000);
    $rndnum[]=rand(0,100);
    $x++;
}

foreach ($rnd as $i => $v)
{
    if ($rnd[$i] >= 1 && $rnd[$i] <=100){

        $serv [] = 1;
    }

    elseif ($rnd[$i] >= 101 && $rnd[$i] <=200){

        $serv [] = 2;
    }elseif ($rnd[$i] >= 201 && $rnd[$i] <=300){

        $serv [] = 3;
    }elseif ($rnd[$i] >= 301 && $rnd[$i] <=400){

        $serv [] = 4;
    }elseif ($rnd[$i] >= 401 && $rnd[$i] <=500){

        $serv [] = 5;
    }elseif ($rnd[$i] >= 501 && $rnd[$i] <=600){

        $serv [] = 6;
    }elseif ($rnd[$i] >= 601 && $rnd[$i] <=700){

        $serv [] = 7;
    }elseif ($rnd[$i] >= 701 && $rnd[$i] <=800){

        $serv [] = 8;
    }elseif ($rnd[$i] >= 801 && $rnd[$i] <=900){

        $serv [] = 9;
    }elseif ($rnd[$i] >= 901 && $rnd[$i] <=1000){

        $serv [] = 10;
    }
}
foreach ($rndnum as $i => $v)
{
    if ($rndnum[$i] >=0 && $rndnum[$i] <=10)
    {
        $ent[]=1;
    }
    elseif ($rndnum[$i] >= 11 && $rndnum[$i] <=20)
    {
        $ent[]=2;
    }
    elseif ($rndnum[$i] >= 21 && $rndnum[$i] <=30)
    {
        $ent[]=3;
    }
    elseif ($rndnum[$i] >= 31 && $rndnum[$i] <=40)
    {
        $ent[]=4;
    }
    elseif ($rndnum[$i] >= 41 && $rndnum[$i] <=50)
    {
        $ent[]=5;
    }
    elseif ($rndnum[$i] >= 51 && $rndnum[$i] <=60)
    {
        $ent[]=6;
    }
    elseif ($rndnum[$i] >= 61 && $rndnum[$i] <=70)
    {
        $ent[]=7;
    }
    elseif ($rndnum[$i] >= 71 && $rndnum[$i] <=80)
    {
        $ent[]=8;
    }
    elseif ($rndnum[$i] >= 81 && $rndnum[$i] <=90)
    {
        $ent[]=9;
    }
    elseif ($rndnum[$i] >= 91 && $rndnum[$i] <=100)
    {
        $ent[]=10;
    }
}
$set=0;
while ($set <= 10)
{
    $f = $f + $serv[$set+1];
    $enttime[$set+1] = $f;
    $set++;
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="submit" value="play" name="play">
</form>
    <table border="2px" style="float: right;text-align: center">
            <tr>
                <td>مدت بین دو ورود</td>
                <td>ارقام تصادفی</td>
                <td>مشتری</td>

            </tr>
        <?php foreach ($person as $i => $r) { ?>
        <tr>

            <td style="padding: 5px;"><?php echo $serv[$i]; ?></td>
            <td style="padding: 5px;"><?php echo $rnd[$i] ; ?></td>
            <td style="padding: 5px;"><?php echo $r; }?></td>

        </tr>
    </table>

    <table border="2px" style="float: right;margin-right: 100px;text-align: center">
        <tr>
            <td>مدت خدمت دهی</td>
            <td>ارقام تصادفی</td>
            <td>مشتری</td>

        </tr>
        <?php foreach ($person as $i => $r) { ?>
        <tr>

            <td style="padding: 5px;"><?php echo $ent[$i]; ?></td>
            <td style="padding: 5px;"><?php echo $rndnum[$i]; ?></td>
            <td style="padding: 5px;"><?php echo $r; }?></td>

        </tr>
    </table>
    <table border="2px" style="float: right;text-align: center;margin-top: 20px;">
        <tr>
            <td>مدت بیکاری خدمت دهنده</td>
            <td>مدت ماندن مشتری در سیستم</td>
            <td>زمان اتمام خدمت</td>
            <td>زمان ماندن مشتری در صف</td>
            <td>زمان شروع خدمت</td>
            <td>مدت خدمت دهی</td>
            <td>زمان ورود</td>
            <td>مدت زمان گذشته از آخرین ورود</td>
            <td>مشتری</td>
        </tr>
        <?php foreach ($person as $i => $r) { ?>
        <tr>
            <td style="padding: 5px;"><?php echo rand(0,3); ?></td>
            <td style="padding: 5px;"><?php echo rand(0,4); ?></td>
            <td style="padding: 5px;"><?php echo $enttime[$i]+$serv[$i]; ?></td>
            <td style="padding: 5px;"><?php echo rand(0,4); ?></td>
            <td style="padding: 5px;"><?php echo rand(0,4); ?></td>
            <td style="padding: 5px;"><?php echo $ent[$i]; ?></td>
            <td style="padding: 5px;"><?php echo $enttime[$i]; ?></td>
            <td style="padding: 5px;"><?php echo $serv[$i]; ?></td>
            <td style="padding: 5px;"><?php echo $r; ?></td>

            <?php }?>
        </tr>

    </table>
</body>
</html>
