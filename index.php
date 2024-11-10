<?php
// TuneFlicks - index.php

$audioExtensions = ['mp3', 'wav', 'ogg'];
$videoExtensions = ['mp4', 'webm', 'ogg'];

$files = array_diff(scandir(__DIR__), array('.', '..'));

echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>TuneFlicks</title>";
echo "<style>
        /* General Reset */
        * { box-sizing: border-box; margin: 0; padding: 0; }

        /* Body and Container Styles */
        body { font-family: Arial, sans-serif; background-color: #121212; color: #fff; padding: 20px; display: flex; flex-direction: column; align-items: center; }
        
        /* Title */
        h1 { text-align: center; margin-bottom: 30px; color: #ffdd57; }

        /* Main Media Grid */
        .media-container { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; max-width: 1200px; width: 100%; }

        /* Media Item Styles */
        .media-item { background-color: #1e1e1e; padding: 15px; border-radius: 8px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5); transition: transform 0.3s ease; }
        .media-item:hover { transform: translateY(-5px); }
        .media-item h3 { font-size: 16px; text-align: center; color: #ffdd57; margin-bottom: 10px; }

        /* Audio and Video Players */
        audio, video { width: 100%; border-radius: 6px; }
        
        /* Footer */
        footer { margin-top: 40px; text-align: center; color: #666; font-size: 14px; width: 100%; }
      </style>";
echo "</head>";
echo "<body>";
echo "<h1>🎶 TuneFlicks 🎥</h1>";
echo "<div class='media-container'>";

foreach ($files as $file) {
    $fileExt = strtolower(pathinfo($file, PATHINFO_EXTENSION));

    if (in_array($fileExt, $audioExtensions)) {
        echo "<div class='media-item'>";
        echo "<h3>" . htmlspecialchars($file) . "</h3>";
        echo "<audio controls>";
        echo "<source src='$file' type='audio/$fileExt'>";
        echo "Your browser does not support the audio element.";
        echo "</audio>";
        echo "</div>";
    } elseif (in_array($fileExt, $videoExtensions)) {
        echo "<div class='media-item'>";
        echo "<h3>" . htmlspecialchars($file) . "</h3>";
        echo "<video controls>";
        echo "<source src='$file' type='video/$fileExt'>";
        echo "Your browser does not support the video element.";
        echo "</video>";
        echo "</div>";
    }
}

echo "</div>";
echo "<footer>&copy; " . date("Y") . " TuneFlicks. All rights reserved.</footer>";
echo "</body>";
echo "</html>";
?>

