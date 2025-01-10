<?php
/**
 * This is articles content for index.php
 */
?>

<?php
    /**TODO: сделать изменяемыми через wordpress */
    /** VARIABLES */

    $articles_main_title = 'Articles & News';
    $articles_main_text = 'It is a long established fact that a reader will be distracted by the of readable content of a
                        page
                        when lookings at its
                        layouts the points of using.';

    $articles = array(
        array(
            'thumb' => get_site_url().'/kitchan-design',
            'title' => 'Let’s Get Solution For Building Construction Work',
            'date' => '28 February, 2021',
            'tag' => 'Kitchan design',
            'link' => '#'
        ),
        array(
            'thumb' => get_site_url().'/living-design',
            'title' => 'Low Cost Latest Invented Interior Designing Ideas.',
            'date' => '28 February, 2021',
            'tag' => 'Living design',
            'link' => '#'
        ),
        array(
            'thumb' => get_site_url().'/interior-design',
            'title' => 'Best For Any Office & Business Interior Solution.',
            'date' => '28 February, 2021',
            'tag' => 'Interior Design',
            'link' => '#'
        )
    );
?>



<div class="articles">
    <header class="articles__header">
        <h2 class="h2"><?php echo $articles_main_title?></h2>
        <p><?php echo $articles_main_text?></p>
    </header>
    <main class="articles__items">
        <?php foreach ($articles as $article) :?>
            <article class="article">
                <div class="article__thumb">
                    <img class="article__img" alt="<?php echo $article['tag']?>" src="<?php echo $article['thumb']?>" />
                    <span class="article_tag"><?php echo $article['tag']?></span>
                </div>
                <h3 class="article__title">
                    <a class="link" href="<?php echo $article['link']?>"><?php echo $article['title']?></a>
                </h3>
                <div class="article__info">
                    <span class="article__date"><?php echo $article['date']?></span>
                    <a class="link article__link" href="<?php echo $article['link']?>"></a>
                </div>
            </article>
        <?php endforeach;?>
    </main>
</div>