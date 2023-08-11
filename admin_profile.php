<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>AUCTIONING FORUM</title>

<meta name="keywords" content="photo blog template, free website layout, CSS, download HTML" />

<meta name="description" content="Photo Blog Template, Free xHTML/CSS Layout, Free Website Template from TemplateMo.com" />

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#templatemo_container #templatemo_left_section #templatemo_left_content #form3 table {
	text-align: left;
}
</style>
</head>

<body>

<div id="templatemo_container">

  <div id="templatemo_left_section">

   <div id="templatemo_left_header">

     <div id="templatemo_left_title"> AUCTIONING FORUM </div>

     <div id="templatemo_left_slogan"> Enjoy Your Bidding Application...</div>

     <div id="templatemo_latest"><a href="#"> ADMIN LOGIN </a></div>

   </div>

   <div id="templatemo_left_menu">

     <div class="templatemo_topmenu">

       <ul>
         <li><a href="admin_profile.php">MEMBERS</a></li>
         <li ><a href="view_product.php">PRODUCTS</a> </li>
         <li class="current"><a href="bidding_details.php">BIDDING DETAILS</a></li>
         <li class="current"><a href="report.php">REPORTS</a></li>
          <li><a href="index.html">LOGOUT</a></li>
       </ul>

      </div>

   </div>

   <div id="templatemo_left_content">

     <h1>MEMBERS LIST</h1>

     <form action="add_product_code.php" method="post" enctype="multipart/form-data" name="form3" id="form3">
       <table width="100%" border="0">
         <tr>
           <td width="64"><a href="a">NAME</a></td>
           <td width="109"><a href="a">EMAIL</a></td>
           <td width="86"><a href="a">PHONE NO</a></td>
           <td width="81"><a href="a">ADDRESS</a></td>
           <td width="68"><a href="a">DELETE</a></td>
          </tr>
           <?php
include 'database.php';

$select="SELECT * FROM user_registration";
$qry=mysql_query($select);
$row=mysql_num_rows($qry);
$i=0;
while ($i<$row)
{
$id=mysql_result($qry,$i,"user_id");	
$Name=mysql_result($qry,$i,"f_name");
$email=mysql_result($qry,$i,"email");
$phone=mysql_result($qry,$i,"phone");
$add=mysql_result($qry,$i,"address");



?>
    <tr>
    <?php echo "
	<td>$Name</td>
    <td> $email</td>
    <td>$phone</td>
	<td>$add</td>
	<td><a href='admin_delete.php?id=$id'>DELETE</a></td>
    
   	";?>
    </tr>
    <?php
	$i++;
	}
	?>
       </table>
     </form>
     <p>&nbsp;</p>
   </div>

  </div>

  <div id="templatemo_right_section">

    <div id="templatemo_right_top"></div>

    <div id="templatemo_right_search">

      <form id="form1" name="form1" method="post" action="">
      </form>

    </div>
    <div id="templatemo_category">
      <h2>CATEGORIES</h2>

      <div class="templatemo_rightmenu">

        <ul>

           <li><a href="#">Latest Collections</a></li>

          <li> <a href="#">2013 Collections</a></li>

          <li> <a href="#">Vechile</a></li>

          <li> <a href="#">Lands</a></li>

          <li> <a href="#">Modren Arts</a></li>

          <li> <a href="#">Books</a></li>

        </ul>

      </div>

    </div>

    <div id="templatemo_contact"><h2>QUICK CONTACT</h2>

      <p>Tel: 010-100-1001<br />

        Fax: 020-200-2002<br />

        Email: shans_auctioning2022@gmail.com</p>

    </div>

  </div>

  <div id="templatemo_footer">Copyright ©  Your AUCTIONING FORUM | Designed by <a href="" target="_parent" title="">SHANS</a></div>

</div>
</body>
</html>