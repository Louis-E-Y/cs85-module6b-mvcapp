<!DOCTYPE html>
<html>
<head>
    <title>Song Information</title>
</head>

<body>

<h1>Song Details</h1>

<p>Title: <?php echo $song->title; ?></p>
<p>Genre: <?php echo $song->genre; ?></p>
<p>Artist: <?php echo $song->artist; ?></p>
<p>Duration: <?php echo $song->duration; ?> seconds</p>
<p>Release Year: <?php echo $song->releaseYear; ?></p>
<p>Rating: <?php echo $song->rating; ?>/10</p>

</body>
</html>