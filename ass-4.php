<?php
/*ID: 602110197
Name: Yuqin Zhou(Ice)
Wechat: blue*/
$arrayA=[];
$arrayB=[];
$arrayC=[];
$arrayD=[];
$arrayF=[];
for($i=0;;$i++){
    echo"Student  ",$i+1,": (name grade, enter for end of data): ";
    $n=null;
    $g=null;
    fscanf(STDIN,"%s %s",$n,$g);
    if($n==null){
    break;
    }elseif($g!="A"&&$g!="B"&&$g!="C"&&$g!="D"&&$g!="F"){
        echo"Please input A, B, C, D or F for grade!!!\n";
        $i--;
    }elseif($g=="A"){
        $arrayA[]=$n;
    }elseif($g=="B"){
        $arrayB[]=$n;
    }elseif($g=="C"){
        $arrayC[]=$n;
    }elseif($g=="D"){
        $arrayD[]=$n;
    }elseif($g=="F"){
        $arrayF[]=$n;
    }
}echo"A ( ",count($arrayA),"): ";
for($i=0;$i<count($arrayA);$i++){
    $i<count($arrayA)-1?$c=", ":$c="";
    echo$arrayA[$i],$c;
}echo"\nB ( ",count($arrayB),"): ";
for($i=0;$i<count($arrayB);$i++){
    $i<count($arrayB)-1?$c=", ":$c="";
    echo$arrayB[$i],$c;
}echo"\nC ( ",count($arrayC),"): ";
for($i=0;$i<count($arrayD);$i++){
    $i<count($arrayD)-1?$c=", ":$c="";
    echo$arrayD[$i],$c;
}echo"\nF ( ",count($arrayF),"): ";
for($i=0;$i<count($arrayF);$i++){
    $i<count($arrayF)-1?$c=", ":$c="";
    echo$arrayF[$i],$c;
}
$ave1=4*count($arrayA);
$ave2=3*count($arrayB);
$ave3=2*count($arrayC);
$ave4=1*count($arrayD);
$ave5=0*count($arrayF);
$total=$ave1+$ave2+$ave3+$ave4+$ave5;
$ave=$total/(count($arrayA)+count($arrayB)+count($arrayC)+count($arrayD)+count($arrayF));
printf("\n%.2F", $ave);