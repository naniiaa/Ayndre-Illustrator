
<!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Anton|Abel&display=swap" rel="stylesheet">
    <link href="../CSS/aboutPage.css?v=<?=time();?>" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/nav.css">
    <link rel="stylesheet" href="../CSS/blogPage.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Ayndre Illustrator - Blog</title>
</head>
<body>
    <?php include './Views/nav.php'; ?>
<div class="container">
        <h1>Ayndre's Blog</h1>
        <div class="blog-grid">
            <?php
                include_once './Models/Blog.php';
                $blogModel = new Blog();
                $posts = $blogModel->getAllPosts();
                foreach ($posts as $post) {
                    echo '<div class="blog-post" data-id="' . $post['blogID'] . '">';
                    echo '<h2>' . htmlspecialchars($post['blogTitle']) . '</h2>';
                    echo '<p>' . htmlspecialchars(substr($post['content'], 0, 100)) . '...</p>';
                    echo '<small>' . htmlspecialchars($post['datePosted']) . '</small>';
                    echo '</div>';
                }
            ?>
        </div>
        <!-- Modal for viewing individual blog post -->
        <div class="blog-modal" id="blogModal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2 id="modalTitle"></h2>
                <p id="modalDate"></p>
                <p id="modalContent"></p>
            </div>
        </div>
    </div>
        <script>
            $(document).ready(function() 
            {
                $('.blog-post').click(function() 
                {
                    const blogID = $(this).data('id');
                    $.ajax(
                    {
                        url: 'Controllers/BlogController.php',
                        type: 'POST',
                        data: { blogID: blogID },
                        success: function(data) 
                        {
                            const post = JSON.parse(data);
                            $('#modalTitle').text(post.blogTitle);
                            $('#modalDate').text(post.datePosted);
                            $('#modalContent').text(post.content);
                            $('#blogModal').show();
                        }
                    });
                });
                $('.close').click(function() 
                {
                    $('#blogModal').hide();
                });
            });
        </script>
    </body>
</html>