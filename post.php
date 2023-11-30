<?php
    include_once("templates/header.php");
    if(isset($_GET['id']))
    {
        $postId = $_GET['id'];
        $currentPost;
        
        foreach($posts as $post)
        {
            if ($post['id'] == $postId)
            {
                $currentPost = $post;
            }
        }
    }
?>
<main id="post-container">
    <div class="contente-container">
        <h1 id="main-title"><?= $currentPost['title']?></h1>
        <p id="post-description"><?= $currentPost['description']?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title']?>">
        </div>
        <p class="post-container">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima sunt adipisci
            deleniti eum mollitia cupiditate nobis perferendis, quos suscipit quae accusantium ex commodi ullam
            assumenda reiciendis, asperiores modi expedita ut.
            Velit tenetur accusantium labore distinctio nemo cumque, sint, voluptates maxime maiores quos porro
            quibusdam corporis qui modi esse debitis doloribus ipsam, doloremque vitae eos iste ipsa voluptate
            consequuntur iure! Natus!
            Praesentium doloribus beatae magnam reiciendis modi, delectus dolorum. Fugit animi cum, pariatur veniam
            optio alias dolorem ut aliquam eius quod, sit possimus, culpa cupiditate perferendis quasi eligendi quas
            deserunt illum!
            Sunt porro veniam reiciendis perferendis. Saepe repellendus consequuntur autem iusto, quae sunt repudiandae
            quos alias quod consectetur optio ipsam minus vero voluptatum quisquam numquam eligendi dicta? A esse quod
            animi!
            Aliquam nihil asperiores dignissimos aut blanditiis, expedita eaque voluptatem, suscipit provident, veniam
            quam ipsam quas et repellat exercitationem nesciunt ex. Possimus, repellat doloremque quis nesciunt unde
            molestiae distinctio nulla totam.</p>
        <p class="post-container">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima sunt adipisci
            deleniti eum mollitia cupiditate nobis perferendis, quos suscipit quae accusantium ex commodi ullam
            assumenda reiciendis, asperiores modi expedita ut.
            Velit tenetur accusantium labore distinctio nemo cumque, sint, voluptates maxime maiores quos porro
            quibusdam corporis qui modi esse debitis doloribus ipsam, doloremque vitae eos iste ipsa voluptate
            consequuntur iure! Natus!
            Praesentium doloribus beatae magnam reiciendis modi, delectus dolorum. Fugit animi cum, pariatur veniam
            optio alias dolorem ut aliquam eius quod, sit possimus, culpa cupiditate perferendis quasi eligendi quas
            deserunt illum!
            Sunt porro veniam reiciendis perferendis. Saepe repellendus consequuntur autem iusto, quae sunt repudiandae
            quos alias quod consectetur optio ipsam minus vero voluptatum quisquam numquam eligendi dicta? A esse quod
            animi!
            Aliquam nihil asperiores dignissimos aut blanditiis, expedita eaque voluptatem, suscipit provident, veniam
            quam ipsam quas et repellat exercitationem nesciunt ex. Possimus, repellat doloremque quis nesciunt unde
            molestiae distinctio nulla totam.</p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tags-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
            <li><a href=" #"><?=$tag ?></a></li>
            <?php endforeach;?>
        </ul>
        <br>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
            <li><a href=" #"><?=$category ?></a></li>
            <?php endforeach;?>
        </ul>
    </aside>
</main>

<?php
include_once("templates/footer.php");
?>