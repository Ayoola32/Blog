<div class="col-lg-4 my-3">
    <div class="blog-aside ml-lg-3">
        <!-- Author -->
        <div class="widget widget-author">
            <div class="widget-title">
                <h3>Author</h3>
            </div>

            <div class="widget-body">
                <div class="media align-items-center">
                    <div class="avatar">
                        <img src="./images/55.webp" title="" alt="">
                    </div>
                    <div class="media-body">
                        <h6>Hello, I'm<br /> T.O Agboola</h6>
                    </div>
                </div>
                <p>I'm a creative and analytical data scientist with a strong sense of teamwork. I also enjoy producing content to share my knowledge with other scientist and researchers.</p>
                <br>
                <div class="btn-bar">
                    <a class="px-btn px-btn-theme" href="">
                        Contact Me
                    </a>
                </div>
            </div>
        </div>
        <!-- End Author -->

        <!-- widget Tags -->
        <div class="widget widget-tags">
            <div class="widget-title">
                <h3>Categories</h3>
            </div>
            <div class="widget-body">
                <div class="nav tag-cloud">
                    <?php
                    $query = "SELECT * FROM category_header LIMIT 3";
                    $query_result = mysqli_query($connection, $query);
                    if (!$query_result) {
                        die("Query Failed " . mysqli_error($connection));
                    }

                    while ($row = mysqli_fetch_assoc($query_result)) {
                        $cat_id = $row['cat_id'];
                        $cat_title = $row['cat_title'];

                        echo "<a href=''>$cat_title</a>";
                    };
                    
                    ?>
                </div>
            </div>
        </div>
        <!-- End widget Tags -->
    </div>                
</div>