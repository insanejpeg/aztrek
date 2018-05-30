<article>
    
    <a href="sejour.php?id=<?php echo $sejour["id"]; ?>"><h2><?php echo $sejour["title"]; ?></h2></a>
    <p><?php echo $sejour["description"]; ?></p>
    <img class="niveau" src="./upload/<?php echo $sejour["niveau_picto"]; ?>" alt="glyph-niveau" height="35px" width="35px">
      <a href="sejour.php?id=<?php echo $sejour["id"]; ?>"><img src="./upload/<?php echo $sejour["picture"]; ?>" alt="picture"></a>
</article>

