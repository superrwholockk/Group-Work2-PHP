
<!--Slider -->

<?php

function render_carousel($row, $active=false) {
?>
    <div class="carousel-item <?php echo $active  ? 'active' : '';?>">
        <div class="container ">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail-box">
                        <?php if ($row["video_icon"]): ?>
                        <div class="play_btn">
                            <button>
                                <i class="fa fa-play" aria-hidden="true"></i>
                            </button>
                        </div>
                        <?php endif;?>
                        <h1><?php echo $row['title'];?> <br>
                            <span><?php echo $row['title span']; ?></span>
                        </h1>
                        <p><?php echo $row['text']; ?></p>
                        <a href=' <?php echo $row['buttonLink']; ?>'>
                        <?php echo $row['button']; ?>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="<?php echo $row['image'] ; ?> " alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>

