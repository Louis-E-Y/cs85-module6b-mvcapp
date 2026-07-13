<?php

class SongController {

    public function showSong() {

        //get hypothetical data from a form submission in a real life application
        $rating = $_POST['rating'];

        $title = htmlspecialchars($_POST['title']);
        $genre = htmlspecialchars($_POST['genre']);
        $artist = htmlspecialchars($_POST['artist']);
        $duration = (int)$_POST['duration'];
        $releaseYear = (int)$_POST['releaseYear'];



        if ($rating < 0 || $rating > 10) {
            throw new InvalidArgumentException("Rating must be between 0 and 10.");
        }

        // 1. Create/load the model
        $song = new Song($title, $genre, $artist, $duration, $releaseYear, $rating);

        // 2. Send the data to the view
        include "../views/song.php";
    }
}