<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                <?php 
 
    $editQuery = "SELECT * FROM portfolios ORDER BY RAND() LIMIT 6";
    $editResult = mysqli_query($con, $editQuery);

    while($row = mysqli_fetch_assoc($editResult)){
      $id = $row['id'];
      $title = $row['title'];
      $image = $row['image'];
      $content = $row['content'];
      $date = $row['date'];
      $status = $row['status'];
      $categories = $row['categories'];
      // update();
    

?>

                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal<?= $id ?>">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img style="height: 300px; width:100%; object-fit:contain" class="img-fluid img-thumbnail" src="img/portfolio/<?= $image ?>" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?= $title ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?= $categories ?></div>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Modals-->
                    <div class="portfolio-modal modal fade" id="portfolioModal<?= $id ?>" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="modal-body">
                                                <!-- Project Details Go Here-->
                                                <h2 class="text-uppercase"><?= $title ?></h2>
                                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                                <img class="img-fluid d-block mx-auto" src="img/portfolio/<?= $image ?>" alt="" />
                                                <p><?= $content ?></p>
                                                <ul class="list-inline">
                                                    <li><?= $date ?></li>
                                                    <li>Client: Threads</li>
                                                    <li>Category: <?= $categories ?></li>
                                                </ul>
                                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                                    <i class="fas fa-times mr-1"></i>
                                                    Close Project
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- End of Portfolio Modals-->
                    <?php } ?>

                </div>
            </div>
        </section>

        
        <!-- Modal 1-->
        

        <!-- Modal 2-->
       