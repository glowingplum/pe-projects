<?php

include('articles-data.php');

foreach ($articlesData as $article) {?>
	
					<a href="#" class="article-card">
						
						<h3><?=$article["title"]?></h3>

						<p class="summary"><?=$article["summary"]?></p>

						<p class="article-action"><?=$article["action"]?></p>						

					</a>

<?php } ?>