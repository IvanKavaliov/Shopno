<?php
    include_once '../../includes/class_person.php';
    $new_person = new Person(htmlspecialchars($_POST['name']), htmlspecialchars($_POST['position']), 
                            htmlspecialchars($_POST['info']), htmlspecialchars($_POST['link_facebook']), 
                            htmlspecialchars($_POST['link_twitter']), htmlspecialchars($_POST['link_git']), 
                            htmlspecialchars($_POST['link_email']), "team_3.png");
    include "../orm/Database.php";
    $query = "INSERT INTO team (name, position, info, link_facebook, link_twitter, link_git, link_email, image) 
            VALUES ('$new_person->name', '$new_person->position', '$new_person->info', '$new_person->link_facebook', '$new_person->link_twitter', '$new_person->link_git', '$new_person->link_email', '$new_person->person_image')";
    $result = mysqli_query($connection, $query)
    or die ('Error in query to database');
    mysqli_close($connection);
    header('location: ../table_team.php');
    exit();
?>