<?foreach($allNews as $news):?>
<a class="oneNews" href="<?= route('news.oneNews', ['id' => $news['id']])?>">
 <h3><?= $news['title']?></h3>
 <p><?= $news['author']?></p>
 <div><?= $news['description']?></div>
</a>
<?endforeach;?>
