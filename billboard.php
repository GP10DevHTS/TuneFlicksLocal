<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <p>Hello</p>
    <div class="grid grid-cols-12 gap-0 m-6">
        <div class="col-span-1">Number</div>
        <div class="col-span-6">Song</div>
        <div class="col-span-1">Award</div>
        <div class="col-span-1">Last Week</div>
        <div class="col-span-1">PEAK POS</div>
        <div class="col-span-1">Weeks on Chart</div>
        <div class="col-span-1">Weeks on Chart</div>

        <!-- songs -->
        <?php
        $audioExtensions = ['mp3', 'wav', 'ogg'];
        $videoExtensions = ['mp4', 'webm', 'ogg'];

        $files = array_diff(scandir(__DIR__), array('.', '..'));

        foreach ($files as $file) {
            $fileExt = strtolower(pathinfo($file, PATHINFO_EXTENSION));

            if (in_array($fileExt, $audioExtensions)) {
        ?>

        <div class="col-span-1">Number</div>
        <div class="col-span-6">
            <div class="grid grid-cols-12 gap-0">
                <div class="col-span-2">
                    img here
                </div>
                <div class="col-span-2">
                    ==>
                </div>
                <div class="col-span-6">
                    Name of the song and teh artist
                </div>
                <div class="col-span-2">
                    +
                </div>
            </div>
        </div>
        <div class="col-span-1">Award</div>
        <div class="col-span-1">Last Week</div>
        <div class="col-span-1">PEAK POS</div>
        <div class="col-span-1">Weeks on Chart</div>
        <div class="col-span-1">Weeks on Chart</div>

        <?php
            }
        }
        ?>
    </div>
</body>

</html>