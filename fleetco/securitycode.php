<?php
require_once("include/dbcommon.php");

Function randString($stype,$ct)
{
	$i=1;
	$randStr="";
	$randNum="";
	$useList="";
	$alpha="A,B,C,D,E,F,G,H,I,J,K,L,M,N,P,Q,R,S,T,U,V,W,X,Y,Z,a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z";
	$secure="!,@,$,%,&,*,-,_,=,+,?,~";
	if($stype=="alpha")
	{
		$randNum=52;
		$useList=$alpha;
	}
	else if($stype=="alphanum")
	{
		$randNum=62;
		$useList=$alpha . ",1,2,3,4,5,6,7,8,9";
	}
	else if($stype=="secure")
	{
		$randNum=73;
		$useList=$alpha . ",0,1,2,3,4,5,6,7,8,9," . $secure;
	}
	else
	{
		$randNum=10;
		$useList="0,1,2,3,4,5,6,7,8,9";
	}

	$arr = Array();
	$arr = explode(",",$useList);
	$randNum=count($arr);
	for($i=0;$i<$ct;$i++)
	{
		$randStr=$randStr . $arr[rand(0,$randNum-1)];
	}
	return $randStr;
}
//Modify the randstring variable below to customize your security code.
//- Use 'num' for numbers only
//- Use 'alphanum' for numbers and letters
//- Use 'secure' for numbers, letter and special characters
//Modify the number in the string to reflect how many characters you want your security code to be

$_SESSION["captcha_" . $_GET["id"]]=randString("alphanum",6);
?>
&securitycode=<?php echo $_SESSION["captcha_" . $_GET["id"]];?>&