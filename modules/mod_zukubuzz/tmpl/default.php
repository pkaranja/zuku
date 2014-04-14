<?php
defined('_JEXEC') or die;

$db=JFactory::getDBO();
$articleID=$params->get("featured_article");

echo '<div class="col-xs-12 no-padding no-margin">
<h3 class="no-padding no-margin">ZUKU BUZZ</h3>';
foreach ($articles as $article):
	if( $article->id == $params->get("featured_article")):
			echo '<a href="entertainment/zuku-buzz/'.$article->id.'?view=article">
					<img class="img-responsive" src="'.$article->image.'" title="'.$article->title.'" alt="'.$article->title.'"/>
				</a>
				<h5>'.$article->title.'</h5>
				'.limit_words_buzz($article->subtitle, 15).'
				<a href="entertainment/zuku-buzz/'.$article->id.'?view=article">
				<span class="clearfix"></span>
				<span>Find out more...</span></a>';
		break;
	endif;
endforeach;

echo '</div>';

function limit_words_buzz($string, $word_limit){
	$words = explode(" ",$string);
	return implode(" ",array_splice($words,0,$word_limit));
}