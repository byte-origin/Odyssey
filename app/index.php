<!DOCTYPE html>
<html lang="en">

<head>
    <title>Odyssey - BYTe</title>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="script-src 'self' 'unsafe-inline';">
    <link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet">
    <link href="./main.css" rel="stylesheet">
    <link href="./assets/css/odyssey-theme.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body class="w3-theme" id="body">
    <div class="w3-sidebar w3-dark-gray" style="width: 15%;">
        <div class="w3-margin w3-container">
            <img src="./assets/images/Lunar.png"
                class="w3-image w3-circle w3-black" alt="userLogo">
            <hr style="border:1.5px solid black">
        </div>
        <a href="#" class="w3-block w3-left-align w3-button">Friends</a>
        <button class="w3-button w3-block w3-left-align" onclick="dropDown('privateMessages')">Private Messages</button>
        <div class="w3-bar-block w3-hide" id="privateMessages">
            <div class="byte-dropdown"></div>
            <div id="privateUsers">
                <?php
                $Username = "Test";
                echo '<a href="#" class="w3-bar-item w3-button" style="background: #aaaaaa;" id="user-{$Username}">{$Username}</a>';
                ?>
            </div>
        </div>
        <button class="w3-button w3-block w3-left-align" onclick="dropDown('servers')">Servers</button>
        <div id="servers" class="w3-bar-block w3-hide">
            <div class="byte-dropdown"></div>
            <a href="#" class="w3-bar-item w3-button" style="background: #aaaaaa;">BYTe</a>
            <a href="#" class="w3-bar-item w3-button" style="background: #aaaaaa;">ForSaken Borders</a>
        </div>
        <a href="#" class="w3-block w3-left-align w3-button">Settings</a>
    </div>
    <div style="margin-left: 15%;">
        <div class="w3-row w3-header w3-theme-d5 w3-block w3-padding w3-hover" id="roles">
            <i class="material-icons" onclick="dropDown('members')">arrow_drop_down_circle</i> Lorem ipsum dolor sit
            amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
            enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
            laborum.
        </div>
        <div id="members" class="w3-bar-block w3-hide w3-theme-d5 byte-dropdown-height">Lorem ipsum dolor sit amet,
            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
            occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
        <div class="w3-margin-left w3-row w3-margin-top" id="message-container">
            <div class="w3-twothird w3-container byte-small-lines byte-border">
                <img src="./assets/images/Nocturno.png"
                    class="byte-pfp w3-circle w3-border w3-border-black w3-right">
                <h5>Nocturno</h5>
                <h5 class="byte-small-text">Roles: <b>Owner, Adminstrator, Moderator</b></h5>
                <p>Hey, you done with Odyssey yet?</p>
            </div>
            <div class="w3-twothird w3-container byte-small-lines byte-border">
                <img src="./assets/images/Lunar.png"
                    class="byte-pfp w3-circle w3-border w3-border-black w3-right">
                <h5>Lunar</h5>
                <h5 class="byte-small-text">Roles: <b>Adminstrator, Moderator</b></h5>
                <p>Getting close. I just finished the theme, now I'm about to work on the actual client.</p>
            </div>
            <div class="w3-twothird w3-container byte-small-lines byte-border">
                <img src="./assets/images/Nocturno.png"
                    class="byte-pfp w3-circle w3-border w3-border-black w3-right">
                <h5>Nocturno</h5>
                <h5 class="byte-small-text">Roles: <b>Owner, Adminstrator, Moderator</b></h5>
                <p>Okay. Just let me know when it's ready.</p>
            </div>
            <div class="w3-twothird w3-container byte-small-lines byte-border">
                <img src="./assets/images/Lunar.png"
                    class="byte-pfp w3-circle w3-border w3-border-black w3-right">
                <h5>Lunar</h5>
                <h5 class="byte-small-text">Roles: <b>Adminstrator, Moderator</b></h5>
                <p>What? Why would I do that? I'm just going to hold onto it and refine everything until it's so old
                    that something else beat me to it.</p>
            </div>
            <div class="w3-twothird w3-container byte-small-lines byte-border">
                <img src="./assets/images/Lunar.png"
                    class="byte-pfp w3-circle w3-border w3-border-black w3-right">
                <h5>Lunar</h5>
                <h5 class="byte-small-text">Roles: <b>Adminstrator, Moderator</b></h5>
                <p>What? Why would I do that? I'm just going to hold onto it and refine everything until it's so old
                    that something else beat me to it.</p>
            </div>
            <div class="w3-twothird w3-container byte-small-lines byte-border">
                <img src="./assets/images/Lunar.png"
                    class="byte-pfp w3-circle w3-border w3-border-black w3-right">
                <h5>Lunar</h5>
                <h5 class="byte-small-text">Roles: <b>Adminstrator, Moderator</b></h5>
                <p>What? Why would I do that? I'm just going to hold onto it and refine everything until it's so old
                    that something else beat me to it.</p>
            </div>
            <div class="w3-twothird w3-container byte-small-lines byte-border">
                <img src="./assets/images/Lunar.png"
                    class="byte-pfp w3-circle w3-border w3-border-black w3-right">
                <h5>Lunar</h5>
                <h5 class="byte-small-text">Roles: <b>Adminstrator, Moderator</b></h5>
                <p>What? Why would I do that? I'm just going to hold onto it and refine everything until it's so old
                    that something else beat me to it.</p>
            </div>
            <div class="w3-twothird w3-container byte-small-lines byte-border">
                <img src="./assets/images/Lunar.png"
                    class="byte-pfp w3-circle w3-border w3-border-black w3-right">
                <h5>Lunar</h5>
                <h5 class="byte-small-text">Roles: <b>Adminstrator, Moderator</b></h5>
                <p>What? Why would I do that? I'm just going to hold onto it and refine everything until it's so old
                    that something else beat me to it.</p>
            </div>
        </div>
        <footer class="w3-theme-d3 w3-padding byte-bottom w3-footer w3-margin-top">
            <input type="text" class="w3-input">
        </footer>
    </div>
</body>
<script>
    function dropDown(id) {
        var x = document.getElementById(id);
        if(x.className.indexOf("w3-show") === -1) {
            x.className += " w3-show";
            x.previousElementSibling.className += " w3-light-gray";
        } else {
            x.className = x.className.replace(" w3-show", "");
            x.previousElementSibling.className =
                x.previousElementSibling.className.replace(" w3-light-gray", "");
        }
    }
</script>

</html>