<?php
session_start();
    include("dbconnect.php");
if (!isset($_SESSION['admin'])){
    header("Location: admin-assoc-login.php");
}
if (isset($_SESSION['business_id'])){
    header("Location: assoc-menu.php");
}
    $query = "SELECT * from cinema";
    $result = mysqli_query($conn, $query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;800&display=swap" rel="stylesheet">
    <link rel="icon" href="https://i.pinimg.com/originals/b1/47/47/b147478668fcb07bd72b253f178e3a01.png">
    <link rel="stylesheet" href="css/navigation-general.css">
    <link rel="stylesheet" href="css/style4.css">
    <title>Update Cinema</title>
</head>
<body>
    <header class="main-screen-header">
        <a href="mainscreen.php" class="logo-link">
        <div class="logo-container">
            <img src="DesignMaterials/Icons/undraw_cabin_hkfr.png" alt="Mall Logo Image" style="grid-column: 1/span 1; grid-row: 1/span 2;">
            <h1 class="abc-mall"><b>ABC Mall</b></h1>
            <h3 class="mall-slogan">Mall Slogan</h3>
        </div>
        </a>

        <div class="login-as-text-container">
            <h2>Logged in as, <a href="admin-menu.php">Admin</a></h2>
        </div>
    </header>

    <section class="grid-page-2">
        <div class="left"><a href="admin-menu.php"><b>←</b></a></div>
        <div class="center">
            <form action="" enctype="multipart/form-data" method = "POST">
                <div class="update-cinema-form-container">
                    <div class="row1">
                        <input type="text" name="movie_title" placeholder="Enter Movie Name">
                    </div>
                    <div class="row2">
                        <div class="time-start">
                            <label for="time-start-input">Start: </label>
                            <input type="time" name="time_start" id="time-start-input">
                        </div>
                        <div class="time-duration">
                            <label for="">Duration: </label>
                            <input type="text" name="time_duration_hrs" id="time-duration-hrs">
                            <label for="time-duration-hrs">hrs</label>
                            <input type="text" name="time_duration_mins" id="time-duration-mins">
                            <label for="time-duration-mins">mins</label>
                        </div>
                        <div class="cinema-num">
                            <input type="text" name="cinema_num" id="cinema-num" placeholder="Enter Cinema No.">
                        </div>
                    </div>
                    <div class="movie-info">
                            <textarea name="movie_info" id="additional-info" cols="30" rows="10" placeholder="Enter Additional information"></textarea>
                            <div class="file-uploads">
                                <label for="movie-trailer">Movie Trailer</label>
                                <input type="text" name="movie_trailer" id="movie-trailer" placeholder = "change 'watch?v=' to embed/">
                                <div class="separator"></div>
                                <label for="movie-poster">Movie Poster</label>
                                <input type="file" name="movie_poster" id="movie-poster">
                            </div>
                    </div>
                    <div class="movie-submit">
                        <input type="submit" value="+" name = "submit">
                    </div>

                   
                        <?php 
                        
                        if (isset($_POST['submit'])){
                            $dir_post = "Cinema/Posters";
                            $upload_post = move_uploaded_file($_FILES['movie_poster']['tmp_name'], $dir_post. "/". $_FILES['movie_poster']['name']);
                            $moviename = $_POST['movie_title'];
                            $link_trail = $_POST['movie_trailer'];
                            $filename_post = $_FILES['movie_poster']['name'];
                            $timestart = $_POST['time_start'];
                            $time_hrs = $_POST['time_duration_hrs'];
                            $time_mins = $_POST['time_duration_mins'];
                            $cinema_num = $_POST['cinema_num'];
                            $movie_info = $_POST['movie_info'];
                            $insert = "INSERT INTO cinema (movie_name, movie_description, start_time, duration_hours, duration_mins, file_picture, file_trailer, cinema_no) VALUES ('$moviename','$movie_info','$timestart',$time_hrs,$time_mins,'$filename_post','$link_trail', $cinema_num)";
                            
                            if (!mysqli_query($conn, $insert)){
                                echo("Error description: " . mysqli_error($conn));
                                echo "<h3 style = 'color:red; text-align:center'>Wrong Input Values, review values</h3>";
                            } else {
                                header("Location: update-cinema.php");
                            }
                    
                        }

                        
                        
                        ?> 


                </div>
            </form>
            <!-- Displaying Movies -->

            <?php 
                if (mysqli_num_rows($result) == 0){
                    
                } else {

                    while ($qValue = mysqli_fetch_assoc($result)){

                
            ?>

                    <div class="display-container">
                        <div class="display-infos" id="movie-infos">
                            <div class="display-label">
                                <h3>Movie Name</h3>
                            </div>
                            <div class="display-value">
                                <?php echo $qValue['movie_name']?>
                            </div>
                        </div>  

                        <div class="display-infos" id="movie-infos">
                            <div class="display-label">
                                <h3>Start Time</h3>
                            </div>
                            <div class="display-value">
                                <?php echo $qValue['start_time']?>
                            </div>
                        </div>
                        
                        <div class="display-infos" id="movie-infos">
                            <div class="display-label">
                                <h3>Duration</h3>
                            </div>
                            <div class="display-value">
                                <?php echo $qValue['duration_hours'].'hrs, '.$qValue['duration_mins'].'mins'?>
                            </div>
                        </div> 

                        <div class="display-infos" id="movie-infos">
                            <div class="display-label">
                                <h3>Cinema</h3>
                            </div>
                            <div class="display-value">
                                <?php echo $qValue['cinema_no']?>
                            </div>
                        </div> 

                        <div class="display-infos" id="info-scroll">
                            <div class="display-label">
                                <h3>Information</h3>
                            </div>
                            <div class="display-value">
                                <?php echo $qValue['movie_description']?>
                            </div>
                        </div> 
                    </div>
                <?php
                        }
                    }
                ?>

                    <form action="update-cinema.php" method="post" id="delete-form">
                        <div class="delete-form-container">
                            <input type="text" name="movie_name" id="delete-business" placeholder="Movie Name">
                            <input type="text" name="cinema_num" id="delete-business" placeholder="Cinema#">
                            <input type="submit" name="Delete" value="Delete" id="Delete">
                        </div> 
                    </form>
                    
                    <?php 
                    
                        if(isset($_POST['Delete'])){
                            $del_name = $_POST['movie_name'];
                            $del_cinema_num = $_POST['cinema_num'];

                            $query = "DELETE FROM cinema WHERE movie_name = '$del_name' and cinema_no = $del_cinema_num";

                            if (!mysqli_query($conn, $query)){
                                echo("Error description: " . mysqli_error($conn));
                                echo "<h3 style = 'color:red; text-align:center'>No Existing Account Name</h3>";
                            } else {
                                echo "<h3> The Change will apply after the refresh</h3>";
                            }

                        }
                    
                    
                    ?>
        </div>
        <div class="right"></div>
    </section>
    
</body>
</html>