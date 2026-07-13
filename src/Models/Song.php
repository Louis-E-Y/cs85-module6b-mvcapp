<?php

namespace App\Models;

class Song {

    public string $title;
    public string $genre;
    public string $artist;
    public int $duration; // Duration in seconds
    public int $releaseYear;
    public int $rating; // Rating out of 10


        function __construct(string $title, string $genre, string $artist,int $duration, int $releaseYear, int $rating) {
            $this->title = $title;
            $this->genre = $genre;
            $this->artist = $artist;
            $this->duration = $duration;
            $this->releaseYear = $releaseYear;
            $this->rating = $rating;
        }

        public function getTitle(): string {
            return $this->title;
        }

        public function getGenre(): string {
            return $this->genre;
        }

        public function getArtist(): string {
            return $this->artist;
        }

        public function getDuration(): int {
            return $this->duration;
        }

        public function getReleaseYear(): int {
            return $this->releaseYear;
        }

        public function getRating(): int {
            return $this->rating;
        }

        public function setRating(int $rating): void {
            if ($rating < 0 || $rating > 10) {
                throw new InvalidArgumentException("Rating must be between 0 and 10.");
            }
            $this->rating = $rating;
        }

        public function getSongInfo(): string {
            return "Title: {$this->title}, Genre: {$this->genre}, Artist: {$this->artist}, Duration: {$this->duration} seconds, Release Year: {$this->releaseYear}, Rating: {$this->rating}/10";
        }
        //AI FUNCTION

        //My exact prompt was the section of the instructions 
                    /* " AI Code Review and Critique
            Choose 1 function or method
            Use ChatGPT or similar to generate code
            Submit:
            Your prompt
            Raw AI output
            Your critique: what worked, what didn't, any changes"
        


        public function getRatingDescription()
            {
            if ($this->rating >= 8) {
                return "Highly rated song";
            } elseif ($this->rating >= 5) {
                return "Average song";
            } else {
                return "Low rated song";
            }
        }
            */
        //My improved version of this includes small sections about verifying the rating as valid first

                public function getRatingDescription(){
            if ($this->rating < 0 || $this->rating > 10) {
                throw new InvalidArgumentException("Rating must be between 0 and 10.");
            }
            if ($this->rating >= 8) {
                return "Highly rated song";
            } elseif ($this->rating >= 5) {
                return "Average song";
            } else {
                    return "Low rated song";
                }
        }
            //now if the rating is invalid, it will throw an exception instead of 
            // returning a description that doesn't make sense.

    }



?>