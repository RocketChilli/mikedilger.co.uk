<?php include_once(__DIR__ . "/../script/functions.php");
foreach ($tweets as $tweet): ?>

<div class="tweet" data-id="<?= $tweet["id"] ?>">
	<h2><?= addLinks(escape($tweet["text"])) ?></h2>
	<a class="time" href="<?= $tweet["url"] ?>" title="View on twitter.com"><?= date("l j F Y", (int)$tweet["time"]) ?> (<?= friendlyAge($tweet["time"]) ?> ago)</a>
</div>

<?php endforeach ?>