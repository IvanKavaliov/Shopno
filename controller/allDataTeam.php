<?php
    require_once "$pathDatabase";
    require_once "$pathQuery";
    $result = allTeamQuery($connection);
    while ($team = mysqli_fetch_assoc($result))
    {
        $ID_person = $team['id'];
        $name = $team['name'];
        $position = $team['position'];
        $info = $team['info'];
        $link_facebook = $team['link_facebook'];
        $link_twitter = $team['link_twitter'];
        $link_git = $team['link_git'];
        $link_email = $team['link_email'];
        $person_image = $team['image'];
        require $template;
    }
    mysqli_close($connection);
?>