function selectDisease(){
// ON selection of section this function will work
//alert( document.getElementById('s1').value);

switch(document.getElementById('d1').value)
{
case "AML-Adult":
window.location="";
break;

case "AML-Pediatric":
window.location="";
break;

case "ALL-Adult":
window.location="";
break;

case "ALL-Pediatric":
window.location="";
break;

case "MDS":
window.location="";
break;

case "CML":
window.location="";
break;

case "CLL":
window.location="";
break;

case "NHL":
window.location="";
break;

case "HodgkinLymphoma":
window.location="";
break;

case "MultipleMyeloma":
window.location="";
break;

case "SevereAplasticAnemia&MarrowFailure":
window.location="";
break;

case "SickleCellDisease":
window.location="";
break;

case "ImmuneDeficiencyDiseases":
window.location="";
break;

case "InheritedMetabolicDisorders":
window.location="";
break;

case "Thalassemia":
window.location="";
break;

case "OtherDiseases":
window.location="";
break;

case "MultipleSclerosis":
window.location="";
break;

case "SystemicSclerosis":
window.location="";
break;

/// Can be extended to other different selections of SubCategory //////
default:
window.location="../"; // if no selection matches then redirected to home page
break;
}// end of switch
}
