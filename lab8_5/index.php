<?php
include "config/config.php";
include ROOT."/include/function.php";
spl_autoload_register("loadClass");
$db= new Db();
$News = new News();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Database!</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
<table width="90%" border="1" align="center">
  <tr>
    <td colspan="3"><?php
    include "include/header.php";
	?></td>
  </tr>
  <tr>
    <td width="29%" valign="top">
   
			<div class='boxleft'><?php
        	include "include/category.php";
			?>
            </div>
            <div class='boxleft'>
            <?php
			include "include/publisher.php";
			?>
            </div>
	</td>
    <td width="42%" valign="top">
    	<?php
			$mod = getIndex("mod","book");
			
			if ($mod=="book")
				include "module/book/index.php";
			if ($mod=="news")
				include "module/news/index.php";
			//....
			
			?>
    </td>
    <td width="29%" valign="top"><?php
    //$news = $db->select("select * from news where hot=1 limit 0, 10");
    $news = $News->getAll();
	foreach($news as $r)
	{
		?>
        <div class=news>
        	<a href="index.php?mod=news&ac=detail&id=<?php echo $r["id"];?>">
				<?php echo  $r["title"];?>
             </a>
        </div>
        <?php	
		
	}
	?>
    </td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>