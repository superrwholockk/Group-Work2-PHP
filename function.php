
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

<!--HOSPITAL TREATMENT -->
<?php

function hospitalTreatment($variable) {
    ?>
    <div class="col-md-6 col-lg-3">
            <div class="box ">
                <div class="img-box">
                    <img src="<?php echo $variable['image'] ?>" alt="">
                </div>
                <div class="detail-box">
                    <h4><?php echo $variable['title'] ?></h4>
                    <p><?php echo $variable['text'] ?></p>
                    <a href="">
                    <?php echo $variable['LinkText'] ?>
                    </a>
                </div>
            </div>
  </div>
<?php
}
?>

<!--Our Doctors-->

<?php

function ourDoctorsCarousel($ourDoctors, $active=false) {
?>
    <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="<?php echo $ourDoctors['image'] ?>" alt="" />
              </div>
              <div class="detail-box">
                <h5><?php echo $ourDoctors['name'] ?></h5>
                <h6><?php echo $ourDoctors['text'] ?></h6>
                <div class="social_box">
                  <a href="<?php echo $ourDoctors['facebookLink'] ?>">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a href="<?php echo $ourDoctors['twitterLink'] ?>">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a href="<?php echo $ourDoctors['linkedinLink'] ?>">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                  </a>
                  <a href="<?php echo $ourDoctors['instagramLink'] ?>">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
<?php
}
?>       