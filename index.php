<?php
    // require_once 'session/normal_session.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>{Event name here}</title>
        <link rel="stylesheet" href="main.css">
        <!-- update event name in content -->
        <meta name="description" content="{Event name here}">

        <?php include '../../basics/basic_page_prop.php'?>
        <?php include '../../basics/basic_css.php' ?>
        <?php include '../../basics/basic_js.php' ?>
        <?php include '../../basics/basic_fonts.php' ?>
        <link rel="stylesheet" href="main.css">
        <!-- font -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    </head>

    <body>
        <?php include '../../basics/basic_nav_bar.php'; ?>
        <?php
            $header_img = '../../img/default-bg.jpg';
            $header_head = 'Events';        // Enter titlee
            include '../../basics/basic_header.php';
        ?>
        <!-- Main Content -->
        <!-- replace with poster -->
        <img id="background" src="background.jpg">
        <h1>Event name</h1>
        <h3>Time / Venue</h3><br>
        <!-- use multiple <p> tags for paragraphs -->
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p><br>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p><br>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p><br>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p><br>
        <h2>Links : </h2>
        <a href="#">Add a link here and replace '#' in href</a><br>
        <h2>Participation : </h2>
        <p>metrics here like 100+ projects, 500+ participants etc..</p><br>
        <img class="participation_image" src="background.jpg"><br>
        <h2>Results : </h2>
        <p>write something if text.</p><br>
        <!-- replace with image if screenshot -->
        <img class="result_image" src="background.jpg"><br>

        <!-- Footer -->
        <footer>
            <?php include '../../basics/basic_footer.php'; ?>
        </footer>
    </body>
</html>