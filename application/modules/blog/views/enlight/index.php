<style>
    .button-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 10px;
        /* Add some margin to separate the span and the button */
    }
</style>

<!-- <section class="probootstrap-section" style="padding-top: 0px; padding-bottom: 0px;">
    <div class="container">
        <div style="text-align: center;">
            <h2>Blogs</h2>
            <h1 style="color: #EC2125; font-family: Monstreat;">Lorem Ipsum</h1>
        </div>
        <?php if (count($data) > 0) : ?>
            <div class="row">
                <?php foreach ($data as $item) : ?>
                    <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
                        <a href="<?php echo base_url('blog/' . $item->link) ?>" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media">
                                <img src="<?php echo base_url($item->cover) ?>" alt="<?php echo $item->title ?>" class="img-responsive" style="width: 100%; height: 250px; object-fit: cover;">
                            </figure>
                            <div class="probootstrap-text">
                                <div style="height: 50px; overflow: hidden;">
                                    <h3 style="text-overflow: ellipsis; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;" title="<?php echo $item->title ?>">
                                        <?php echo $item->title ?>
                                    </h3>
                                </div>
                                <div style="height: 90px; overflow: hidden;">
                                    <p style="text-overflow: ellipsis; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;"><?php echo $item->snippet ?></p>
                                </div>
                                <div class="probootstrap-date" style="font-size: 13px;">
                                    <i class="icon-calendar"></i><?php echo date("d M Y", strtotime($item->created_at)) ?>
                                    <?php if ($item->is_comment == 1) : ?>
                                        <div style="float: right;">
                                            <i class="zmdi zmdi-comments"></i> <?php echo number_format((int)$item->comment_count) ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else : ?>
            <div class="nothing-found">
                <div>No data found</div>
            </div>
        <?php endif; ?>

        <div class="text-center probootstrap-animate">
            <?php echo $pagination ?>
        </div>
</section> -->

<!-- <section class="probootstrap-section" style="padding-top: 0px; padding-bottom: 0px;">
    <div class="container">
        <div style="text-align: center;">
            <h2>Blogs</h2>
            <h1 style="color: #EC2125; font-family: Monstreat;">Lorem Ipsum</h1>
        </div>
        <?php if (count($data) > 0) : ?>
            <div class="row">
                <?php foreach ($data as $item) : ?>
                    <a href="<?php echo base_url('blog/' . $item->link) ?>">

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="panel panel-default card-panel" style="border-radius: 20px;">
                                <div class="panel-heading ">
                                    <img src="<?php echo base_url($item->cover) ?>" alt="<?php echo $item->title ?>" class="card-image" style="border-radius: 20px;">

                                </div>
                                <div class="panel-body" style="text-align:start;">
                                    <h3 class="panel-title"><?php echo $item->title ?></h3>
                                    <hr>
                                    <p>This is the content of the card with an image. It can be short or long, and the card width will adjust based on the content length.</p>
                                    <div class="button-container">
                                        <i class="icon-calendar">
                                            <?php echo date("d M Y", strtotime($item->created_at)) ?>
                                        </i>
                                        <i class="zmdi zmdi-comments">
                                            <?php echo number_format((int)$item->comment_count) ?>
                                        </i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php else : ?>
            <div class="nothing-found">
                <div>No data found</div>
            </div>
        <?php endif; ?>

        <div class="text-center probootstrap-animate">
            <?php if ($pagination['prev_page']) : ?>
                <a href="<?php echo $pagination['prev_page_url']; ?>" class="btn btn-primary">Previous</a>
            <?php endif; ?>

            <?php echo $pagination['page_links']; // Display page numbers 
            ?>

            <?php if ($pagination['next_page']) : ?>
                <a href="<?php echo $pagination['next_page_url']; ?>" class="btn btn-primary">Next</a>
            <?php endif; ?>
        </div>
</section> -->

<section class="probootstrap-section" style="padding-top: 0px; padding-bottom: 0px;">
    <div class="container">
        <div style="text-align: center;">
            <h2>Blogs</h2>
            <h1 style="color: #EC2125; font-family: Monstreat;">Lorem Ipsum</h1>
        </div>

        <?php
        // Define the number of items per page and get the current page number
        $itemsPerPage = 9; // Change this to your desired number of items per page
        if (isset($_GET['page'])) {
            $currentPage = $_GET['page'];
        } else {
            $currentPage = 1;
        }

        // Calculate the offset for the database query
        $offset = ($currentPage - 1) * $itemsPerPage;

        // Assuming you have a database connection, retrieve the blog data with pagination
        // Replace this with your database query logic
        $pdo = new PDO("mysql:host=localhost;dbname=cpsmi", "root", "");

        // Query for blog data
        $sql = "SELECT * FROM blog LIMIT $itemsPerPage OFFSET $offset";
        $stmt = $pdo->query($sql);
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Get the total number of items (blogs) from your database
        $totalItems = 10; // Replace with the actual count of your blog items

        // Calculate the total number of pages
        $totalPages = ceil($totalItems / $itemsPerPage);

        // Generate pagination links
        $pagination = '';
        if ($totalPages > 1) {
            $pagination .= '<ul class="pagination">';
            if ($currentPage > 1) {
                $prevPage = $currentPage - 1;
                $pagination .= '<li><a href="?page=' . $prevPage . '">Previous</a></li>';
            }
            for ($i = 1; $i <= $totalPages; $i++) {
                if ($i == $currentPage) {
                    $pagination .= '<li class="active"><span>' . $i . '</span></li>';
                } else {
                    $pagination .= '<li><a href="?page=' . $i . '">' . $i . '</a></li>';
                }
            }
            if ($currentPage < $totalPages) {
                $nextPage = $currentPage + 1;
                $pagination .= '<li><a href="?page=' . $nextPage . '">Next</a></li>';
            }
            $pagination .= '</ul>';
        }
        ?>

        <?php if (count($data) > 0) : ?>
            <div class="row">
                <?php foreach ($data as $item) : ?>
                    <a href="<?php echo base_url('blog/' . $item['link']) ?>">
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="panel panel-default card-panel" style="border-radius: 20px;">
                                <div class="panel-heading ">
                                    <img src="<?php echo base_url($item['cover']) ?>" alt="<?php echo $item['title'] ?>" class="card-image" style="border-radius: 20px;">
                                </div>
                                <div class="panel-body" style="text-align:start;">
                                    <h3 class="panel-title"><?php echo $item['title'] ?></h3>
                                    <hr>
                                    <p>This is the content of the card with an image. It can be short or long, and the card width will adjust based on the content length.</p>
                                    <div class="button-container">
                                        <i class="icon-calendar">
                                            <?php echo date("d M Y", strtotime($item['created_at'])) ?>
                                        </i>
                                        <i class="zmdi zmdi-comments">
                                            <!-- <?php echo number_format((int)$item['blog_id']) ?> -->
                                        </i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php else : ?>
            <div class="nothing-found">
                <div>No data found</div>
            </div>
        <?php endif; ?>

        <!-- Display pagination links -->
        <div class="text-center probootstrap-animate">
            <?php echo $pagination; ?>
        </div>
    </div>
</section>