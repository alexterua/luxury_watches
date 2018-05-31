<h1>Hello, World</h1>
<p><?=$name; ?></p>
<p><?=$age; ?></p>
<p><?=debug($names); ?></p>
<?php foreach ($posts as $post): ?>
    <h3><?=$post->title; ?></h3>
<?php endforeach; ?>