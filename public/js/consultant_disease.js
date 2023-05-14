function selectDisease(){
// ON selection of section this function will work
alert( document.getElementById('s1').value);

switch(document.getElementById('d1').value)
{
case "AML-Adult":
window.location.href="../../src/php/consultant_disease.php#AMLA";
break;

case "AML-Pediatric":
window.location="../../src/php/consultant_disease.php";
break;

case "ALL-Adult":
window.location="../../src/php/consultant_disease.php";
break;

case "ALL-Pediatric":
window.location="../../src/php/consultant_disease.php";
break;

case "MDS":
window.location="../../src/php/consultant_disease.php";
break;

case "CML":
window.location="../../src/php/consultant_disease.php";
break;

case "CLL":
window.location="../../src/php/consultant_disease.php";
break;

case "NHL":
window.location="../../src/php/consultant_disease.php";
break;

case "HodgkinLymphoma":
window.location="../../src/php/consultant_disease.php";
break;

case "MultipleMyeloma":
window.location="../../src/php/consultant_disease.php";
break;

case "SevereAplasticAnemia&MarrowFailure":
window.location="../../src/php/consultant_disease.php";
break;

case "SickleCellDisease":
window.location="../../src/php/consultant_disease.php";
break;

case "ImmuneDeficiencyDiseases":
window.location="../../src/php/consultant_disease.php";
break;

case "InheritedMetabolicDisorders":
window.location="../../src/php/consultant_disease.php";
break;

case "Thalassemia":
window.location="../../src/php/consultant_disease.php";
break;

case "OtherDiseases":
window.location="../../src/php/consultant_disease.php";
break;

case "MultipleSclerosis":
window.location="../../src/php/consultant_disease.php";
break;

case "SystemicSclerosis":
window.location="../../src/php/consultant_disease.php";
break;
}// end of switch
}
