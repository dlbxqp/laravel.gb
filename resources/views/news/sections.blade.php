<h1>Разделы новостей</h1>

<div id="sections">
<?foreach($sections as $section):?>
 <a class="section" href="<?= route('news.section', ['id' => $section['id']])?>">
  <h3><?= $section['title']?></h3>
  <div><?= $section['description']?></div>
 </a>
<?endforeach;?>
</div>
