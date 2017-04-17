
<div class="row">
    <div class="col-sm-8">


        <?php


        use App\Table\Article;
        use App\Table\Categorie;

        foreach (Article::getLast() as $post):?>



            <h2><a href="<?= $post->url ?>"><?=$post->titre; ?></a></h2>
            <h1><?=$post->categorie ; ?></h1>
            <p><?=  $post->extrait; ?></p>



        <?php endforeach;?>






    </div>
    <div class="col-sm-4">
        <ul>
        <?php foreach (Categorie::all() as $categorie): ?>

            <li><a href="<?= $categorie->url; ?>"><?=$categorie->titre; ?></a></li>
        <?php endforeach;?>

        </ul>

    </div>

</div>
