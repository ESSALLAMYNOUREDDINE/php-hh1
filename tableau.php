<?php 
$tab=[];
for($i=0;$i<=10;$i++)
{
    $tab[$i]=$i;
}
$j=0;
foreach($tab as $t)
{
    echo"tab[$j]=".$t."<br>";
    $j++;
}
//exercice de somme
$somme=0;
foreach($tab as $item)
{
    $somme+=$item;
}
echo"somme est".$somme."<br>";
$nombre=0;
foreach($tab as $items){
    if($items%2==0){
        $nombre+=1;
    }
}
echo"le nombre de element pair est:".$nombre."<br>";
$num=5;
$s=0;
for($k=2;$k<=4;$K++){
    if($num%$k==0){
        $s++;
    }
}
if($s>=1){
    echo"cest ne pas premier";
}
else{echo "premier";}
$premier=0;
$table=[1,2,3,4,5,6,7,8,9,13];
for($i=0;$i<count($table);$i++){
    $count=0;
    for($j=2;$j<$table[$i];$j++){
        if($table[$i]%$j==0){
            $count++;
        }
    }
    if($count==0){
        $premier++;
    }
}
echo "le nombre des elements premier de tableau est:".$premier;
echo "<br>";
$count1=0;
$table1="abdo salah jeraidi";
for($i=0;$i<strlen($table1);$i++){
    if (substr($table1,$i,1)=="a"){
        $count1++;
}
}
echo "le nombre de tableau est:".$count1;
echo "<br>";
$pr=0;
$ch=["anass","wassima","othman"];
foreach($ch as $tab){
    for($j=0;$j<strlen($tab);$j++){
        if(substr($tab,$j,1)=="a"){
            $pr++;
        }
    }
}
echo "le nombre des (a) dans le tableau est:".$pr*/
/*$table2 =[8,9,10];
$somme=0;
for($i=0;$i<count($table2);$i++){
    $somme+=$table2[$i];
}
$moy=$somme/count($table2);
while($moy < 12){
    $somme1=0;
    for($i=0;$i<count($table2);$i++){
        $somme1+=$table2[$i]+1;
    }
    $moy=$somme1/count($table2);
    if ($moy<=12){
        for($i=0;$i<count($table2);$i++){
            $table2[$i]+=1;
    }
    $moy=$somme1/count($table2);
}
}
print_r($table2);
echo "<br>";
print_r($moy)*/
/*$tab=["nom"=>"abderrahim","prenom"=>"jeraidi","moyenne"=>18];
$tab["age"]=20;//ajouter le age d'un tableu
$tab["moyenne"]=20;//modifier la valeur de la moyenne
array_pop($tab);//supprimer la fin
array_splice($tab,0,2);//supprier par indice //mnin bghet nsupprimer o chhal bghet nsupprimer
foreach($tab as $clè=>$valeur){
    echo $clè."=".$valeur;echo "<br>";
}
?>