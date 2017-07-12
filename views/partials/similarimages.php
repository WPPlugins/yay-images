<?php
foreach ($data['similarimages']->images as $image) {
    ?> 

    <div class="yi-more-images-thumb yay_imagedetails" style="background-image:url('<?php echo $image->thumbnailUrl;?>')" relid="<?php echo $image->id;?>">
        <?php if ($image->category == "celebrity") {?>
            <span class="yay-celebrity-icon"></span>
        <?php }?>
        <script class="imageData" id="imageData_<?php echo $image->id;?>" type="application/json">
            <?php echo json_encode($image,JSON_HEX_APOS | JSON_HEX_QUOT);?>
        </script>
    </div>

<?php }?>

<input type="hidden" id="yi-similar-offset" value="<?php echo $data['offset']?>"/>    
<input type="hidden" id="yi-similar-limit" value="<?php echo $data['limit']?>"/>    
<input type="hidden" id="yi-similar-total" value="<?php echo $data['total']?>"/>   