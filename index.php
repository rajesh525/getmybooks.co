<?php
	include("admin/php/connect_to_mysql.php");
	include("admin/php/myFunctions.php");
	$displayImages = "";
	$raj="";
	if(isset($_GET['ac']))
	{  $raj=base64_decode($_GET['ac']);}
     	$sqlSelProd = mysql_query("select * from tblproduct order by prod_name") or die(mysql_error());
	
	if(isset($_GET['cat']))
	{
if($_GET['cat'] == "Engineering")
		$sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
	else if($_GET['cat']=="Technology")
		$sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
else if($_GET['cat']=="compitative")
		$sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
	else if($_GET['cat']=="Teaching Resources")
		$sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
	else if($_GET['cat']==" Medical")
		$sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
	else if($_GET['cat']=="computing")
		$sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
	else if($_GET['cat']=="Art and Photography")
		$sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
	else if($_GET['cat']=="Audio Books")
		$sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
	else if($_GET['cat']=="Biography")
		$sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
	else if($_GET['cat']=="Business, Finance and Law")
		$sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
	else if($_GET['cat']=="Crime and Thriller")
		$sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
	else if($_GET['cat']=="Dictionaries and Languages")
		$sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
	else if($_GET['cat']=="Entertainment")
	     $sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
    else if($_GET['cat']=="Health")
	     $sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
    else if($_GET['cat']=="History and Archaeology")
         $sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error()); 
    else if($_GET['cat']=="Humour")
	     $sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
    else if($_GET['cat']=="Mind, Body and Spirit")
	     $sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
    else if($_GET['cat']=="Natural History")
	     $sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
    else if($_GET['cat']=="Personal Development")
	     $sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
    else if($_GET['cat']=="Poetry and Drama")
	     $sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
    else if($_GET['cat']=="Reference")
	     $sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
    else if($_GET['cat']=="Religion")
	     $sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
    else if($_GET['cat']=="Science and Geography")
	     $sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
    else if($_GET['cat']=="Science Fiction")
	     $sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
    else if($_GET['cat']=="Society and Social Sciences")
	     $sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
    else if($_GET['cat']=="Sport")
	     $sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
    else if($_GET['cat']=="Teaching Resources")
	     $sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
    else if($_GET['cat']=="Transport")
	     $sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
    else if($_GET['cat']=="Travel and Holiday Guides")
	     $sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
	else
		$sqlSelProd = mysql_query("select * from tblproduct") or die(mysql_error());
	}
	if(mysql_num_rows($sqlSelProd) >= 1){
		while($getProdInfo = mysql_fetch_array($sqlSelProd)){
			$prodNo = $getProdInfo["prod_no"];
			$prodID = $getProdInfo["prod_id"];
			$prodName = $getProdInfo["prod_name"];
			$prodPrice = $getProdInfo["prod_price"];
			
			$displayImages .= '<div class="col col_14 product_gallery" id="r'.$prodNo.'">
			<a href="productdetail.php?p='.base64_encode($prodNo).'"><img src="images/product/'.$prodNo.'.jpg" alt="Product '.$prodNo.'" width="170" height="150" /></a>
			<h3>'.$prodName.'</h3>
			<p class="product_price">₹'.$prodPrice.'</p>
			<a href="logcheck.php?p='.base64_encode($prodNo).'&sd='.base64_encode($raj).'" class="add_to_cart">BUY</a></div>';		}
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>getMybooks.co</title>
<link href="css/slider.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<link rel="stylesheet" type="text/css" href="css/styles.css" />
<style></style>
<script language="javascript" type="text/javascript">

	function clearText(field)
	{

		if (field.defaultValue == field.value) field.value = '';
		else if (field.value == '') field.value = field.defaultValue;
	}
</script>

</head>

<body id="home">

<div id="main_wrapper">
	<div id="main_header">
    	<div id="site_title"><h1><font color="#000000" size="+1"><img src='images/get1.png' style="opacity:0.78;"/></font></h1></div>
        
        <div id="header_right">
            <div id="main_search">
                <form action="products.php" method="get" name="search_form">
                  <input type="text" value="Search" name="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
                </form>
            </div>
            
      </div> <!-- END -->
    </div> <!-- END of header -->
    
    <div id="main_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="index.php" class="selected">Home</a></li>
           
            <li>&nbsp;&nbsp;&nbsp;</li>
            <li>&nbsp;&nbsp;&nbsp;</li>
			<li><a href="login.php">Login</a></li>
			<li><a href="signup.php">Signup</a></li>

			<li><a href="admin/index.php">Admin Login</a></li>
			<li><a href="about.php">About</a></li>
        </ul>
        <br style="clear: left" />
    </div> <!-- end of menu -->
    
    <div id="main_middle">
    	<img src="images/logo.png" alt="Image 01" width="200" height="220"/>
    	<h1></h1>
        <p></p>
        <a href="index.php" class="buy_now"></a>
    </div> <!-- END of middle -->
    
    <div id="main_top"></div>
    <div id="main">
        <div id="sidebar">
            <h3>Categories</h3>
            <ul class="sidebar_menu">
           	<li><a href='index.php?cat=Engineering'>Engineering</a></li>
<li><a href='index.php?cat=Technology'>Technology</a></li>
<li><a href='index.php?cat=compitative'>compitative </a></li>
<li><a href='index.php?cat=Teaching Resources'>Teaching Resources</a></li>
<li><a href='index.php?cat= Medical'> Medical</a></li>
<li><a href='index.php?cat=computing'>computing</a></li>
<li><a href='index.php?cat=Art and Photography'>Art & Photography</a></li>
<li><a href='index.php?cat=Audio Books'>Audio Books</a></li>
<li><a href='index.php?cat=Biography'>Biography</a></li>
<li><a href='index.php?cat=Business, Finance and Law'>Business, Finance & Law</a></li>
<li><a href='index.php?cat=Crime and Thriller'>Crime & Thriller</a></li>
<li><a href='index.php?cat=Dictionaries and Languages'>Dictionaries & Languages</a></li>
<li><a href='index.php?cat=Entertainment'>Entertainment</a></li>
<li><a href='index.php?cat=Health'>Health</a></li>
<li><a href='index.php?cat=History and Archaeology'>History & Archaeology</a></li>
<li><a href='index.php?cat=Humour'>Humour</a></li>
<li><a href='index.php?cat=Mind, Body and Spirit'>Mind, Body & Spirit</a></li>
<li><a href='index.php?cat=Natural History'>Natural History</a></li>
<li><a href='index.php?cat=Personal Development'>Personal Development</a></li>
<li><a href='index.php?cat=Poetry and Drama'>Poetry & Drama</a></li>
<li><a href='index.php?cat=Reference'>Reference</a></li>
<li><a href='index.php?cat=Religion'>Religion</a></li>
<li><a href='index.php?cat=Science and Geography'>Science & Geography</a></li>
<li><a href='index.php?cat=Science Fiction'>Science Fiction</a></li>
<li><a href='index.php?cat=Society and Social Sciences'>Society & Social Sciences</a></li>
<li><a href='index.php?cat=Sport'>Sport</a></li>
<li><a href='index.php?cat=Teaching Resources'>Teaching Resources</a></li>
<li><a href='index.php?cat=Transport'>Transport</a></li>
<li><a href='index.php?cat=Travel and Holiday Guides'>Travel & Holiday Guides</a></li>
		</ul>
        </div> <!-- END of sidebar -->
        
        <div id="content">
		<h2>Books</h2>
		<?php echo $displayImages; ?>
        </div> <!-- END of content -->
        <div class="cleaner"></div>
    </div> <!-- END of main -->
	<div id="main_footer">   
       
		
    </div> 
    
</div>
<div style="height:150px;background-color:#00796b;opacity:0.88;">
<center ><br><br><br><p style="color:white;opacity:0.89;">
			Copyright © 2015 getmybooks.co</p>
		</center>
</div>

<script type='text/javascript' src='js/logging.js'></script>
</body>

</html>
