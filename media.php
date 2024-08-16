<!DOCTYPE html>
<html>
    <title>Image Board</title>
        <link rel="stylesheet" href="index.css">
    <header>
        <nav class="navbar">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="kwan.html">Kwan</a></li>
                <li><a href="media.php">Media</a></li>
                <li><a href="https://www.pornhub.com">Contact</a></li>
            </ul>
        </nav>
    </header>
    <body>
        <h1>Image Board</h1>
        <div class="wrapper">
            <div class="CMain">
                <h3 class="BH">Send Files</h3>
                <form action="upload.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="file">        
                    <button type="submit" name="submit">submit</button>   
                </form>
                
                
            </div>
        </div>    
        <div class="spacer"></div>
        <div class="wrapper">
            <div class="CMain">
                <?php
                $dir = 'uploads';
                $files = scandir($dir);
                $ext = '';
                foreach ($files as $img) {
                    if ( substr_compare($img, $ext, -strlen($ext), strlen($ext)) === 0 ) {
                        ?>
                            <h2 style="font-family: monospace;"><?=$img?></h2>
                            <div style="text-align: center; margin-bottom: 100px;">
                                <img src="uploads/<?=$img?>">
                            </div>
                        <?
                    }
                }
                ?>

            </div>
        </div>    



    <script class="giscusclass" src="https://giscus.app/client.js"
        data-repo="carlDos/CarlosKarlos"
        data-repo-id="R_kgDOMkT7gg"
        data-category="General"
        data-category-id="DIC_kwDOMkT7gs4Chtp1"
        data-mapping="pathname"
        data-strict="0"
        data-reactions-enabled="1"
        data-emit-metadata="0"
        data-input-position="bottom"
        data-theme="dark"
        data-lang="en"
        crossorigin="anonymous"
        async>
        
    </script>
        
    </body>
   
   
</html>
