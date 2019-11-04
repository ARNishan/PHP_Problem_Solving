<?php
class Database{
public $host = "localhost";
public $user = "root";
public $pass = "";
public $db_name = "test";
public $link;
public $error;
public function __construct()
{
$this->connectDB();
}
public function connectDB()
{
$this->link = new mysqli($this->host,$this->user,$this->pass,$this->db_name);
if (!$this->link) {
$this->error = "Connection fail".$this->link->connect_error;
return false;
}
}
public function insert($query){
$insert = $this->link->query($query) or die($this->error.__LINE__);
if($insert){
return $insert;
}else{
return false;
}
}
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/grid.css" media="screen" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- BEGIN: load jquery -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
        <!-- END: load jquery -->
        <script type="text/javascript" src="js/table/table.js"></script>
        <script src="js/setup.js" type="text/javascript"></script>
        <script type="text/javascript">
        $(document).ready(function () {
        setupLeftMenu();
        setSidebarHeight();
        });
        </script>
        <style type="text/css">
        span.error
        {
        margin: 8px 0 0 0;
        padding: 0;
        height: 1%;
        
        color: #FF0000;
        }
        span.success
        {
        margin: 8px 0 0 0;
        padding: 0;
        height: 1%;
        
        color: #7b912b;
        }
        </style>
    </head>
    <body>
        <div class="container">
            <?php
            $db = new Database();
            ?>
            <!-- <div class="box round first grid"> -->
            <h2>Add New Post</h2>
            <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
            
            $posttitle = mysqli_real_escape_string($db->link,$_POST['title']);
            $postbody = mysqli_real_escape_string($db->link,$_POST['body']);
            $posttags = mysqli_real_escape_string($db->link,$_POST['tags']);
            $permited  = array('jpg', 'jpeg', 'png', 'gif');
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_temp = $_FILES['image']['tmp_name'];
            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $uploaded_image = "upload/".$unique_image;
            if( $posttitle == ""|| $postbody == ""|| $posttags == ""|| $file_name == ""){
            echo "<span class='error'>Field Must Not Empty!</span>";
            }elseif ($file_size >1048567) {
            echo "<span class='error'>Image Size should be less then 1MB!</span>";
            }
            elseif (in_array($file_ext, $permited) === false) {
            echo "<span class='error'>You can upload only:-".implode(', ', $permited)."</span>";
            } else{
            move_uploaded_file($file_temp, $uploaded_image);
            $query = "INSERT INTO post(title,body,image,tags) VALUES('$posttitle','$postbody','$uploaded_image','$posttags')";
            $inserted_rows = $db->insert($query);
            if ($inserted_rows) {
            echo "<span class='success'>Post Inserted Successfully.</span>";
            }else {
            echo "<span class='error'>Post Not Inserted !</span>";
            }
            }
            }
            ?>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="Title">Title</label>
                    <input type="text" class="form-control" id="Title" placeholder="Enter Title" name= "title">
                </div>
                <div class="form-group">
                    <label for="Upload_Image">Upload Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Content</label>
                    <textarea class="tinymce" id="exampleFormControlTextarea1" rows="5" name="body"></textarea>
                </div>
                <div class="form-group">
                    <label for="tags">Tags</label>
                    <input type="text" class="form-control"  name= "tags" id="tags" placeholder="Enter Tags">
                </div>
                <input class="btn btn-primary" type="submit" name="submit" Value="Save" />
            </form>
        </div>
        <!-- Load TinyMCE -->
        <script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
        <script type="text/javascript">
        $(document).ready(function () {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
        });
        </script>
    </body>
</html>