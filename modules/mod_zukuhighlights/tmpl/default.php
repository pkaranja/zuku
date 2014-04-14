<?php
defined('_JEXEC') or die;
?>
<div class="col-xs-12 no-padding no-margin">
    <h3 class="no-padding no-margin">HIGHLIGHTS</h3>
</div>
<div class="col-xs-12 grey">
<?php
foreach ($articles as $article):
	if ( $params->get("featured_article1") == $article->id OR $params->get("featured_article2") == $article->id ):
		echo '<div class="row">
				<div class="col-xs-5 no-margin no-padding">
			        <a href="entertainment/'.$article->id.'?view=highlight/" title="'.$article->title.'">
			        	<img class="img-responsive" src="'.$article->thumbnail.'"  title="'.$article->title.'" alt="'.$article->title.'">
			        </a>
			    </div>
		        <div class="col-xs-7">
		            <h5>'.$article->title.'</h5>
		            <a href="entertainment/'.$article->id.'?view=highlight/" title="'.$article->title.'">More</a>
		        </div>
	    	</div> <br />';
	endif;
endforeach;
?>
</div>