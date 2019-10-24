<!-- // Database Structure 
CREATE TABLE 'webpage_details' (
 'link' text NOT NULL,
 'title' text NOT NULL,
 'description' text NOT NULL,
 'internal_link' text NOT NULL,
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1
 -->

<?php
if(isset($_POST['submit'])){
 
 $main_url=$_POST['url'];
 $str = file_get_contents($main_url);
 
 // Gets Webpage Title
 if(strlen($str)>0)
 {
  $str = trim(preg_replace('/\s+/', ' ', $str)); // supports line breaks inside <title>
  preg_match("/\<title\>(.*)\<\/title\>/i",$str,$title); // ignore case
  $title=$title[1];
 }
	
 // Gets Webpage Description
 $b =$main_url;
 @$url = parse_url( $b );
 @$tags = get_meta_tags($url['scheme'].'://'.$url['host'] );
 $description=$tags['description'];
	
 // Gets Webpage Internal Links
 $doc = new DOMDocument; 
 @$doc->loadHTML($str); 
 
 $items = $doc->getElementsByTagName('a'); 
 foreach($items as $value) 
 { 
  $attrs = $value->attributes; 
  $sec_url[]=$attrs->getNamedItem('href')->nodeValue;
 }
 $all_links=implode(",",$sec_url);
 
 // Store Data In Database
 $host="localhost";
 $username="root";
 $password="";
 $databasename="sample";
 $connect=mysqli_connect($host,$username,$password,$databasename);
 $db=mysqli_select_db($connect,$databasename);
 $sql = "INSERT into webpage_details(link,title,description,internal_link) values('$main_url','$title','$description','$all_links')";

 $query = mysqli_query($connect, $sql);
}

?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<form action="" method="POST">
 	<input type="text" name="url">
 	<input type="submit" name="submit" value="Submit">

 	</form>
 
 </body>
 </html>