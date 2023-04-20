<?php 
    include_once ("templates/header.php");

    if(isset($_GET['id'])) {
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {

            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    }

?>
    <main class="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title']?></h1>
            <p id="post-description"><?= $currentPost['description']?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img']?>" alt="">
            </div>
            <p class="post-content">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus id voluptates quia impedit culpa? Est dolore fugit nulla! Laboriosam rerum alias in amet molestias quasi laudantium delectus sequi, pariatur ducimus.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore porro vitae nam doloribus in, pariatur quod accusamus! Officia, odio unde itaque dolor modi possimus error ratione. Aperiam quasi aut aliquid.
            </p>
            <p class="post-content">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus id voluptates quia impedit culpa? Est dolore fugit nulla! Laboriosam rerum alias in amet molestias quasi laudantium delectus sequi, pariatur ducimus.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore porro vitae nam doloribus in, pariatur quod accusamus! Officia, odio unde itaque dolor modi possimus error ratione. Aperiam quasi aut aliquid.
            </p>
        </div>

        <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul class="tags-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
    </main>

<?php 
    include_once ("templates/footer.php");
?>