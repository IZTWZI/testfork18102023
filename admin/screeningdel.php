<?php
	include 'inc/session.php';

	if(isset($_GET['delID']))
         {
             $id = $_GET['delID'];
             $query = " delete from show_movie where id = '".$id."'";
             $result = mysqli_query($conn,$query);
             if($result)
             {
				$_SESSION['success'] = 'Screening deleted successfully';
                 header("location:screening.php");
             }
             else
             {
				$_SESSION['error'] = 'Select item to delete first';
             }
        }
         else
         {
             header("location:screening.php");
         }
?>

