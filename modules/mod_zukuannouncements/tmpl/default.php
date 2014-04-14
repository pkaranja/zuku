<?php
defined('_JEXEC') or die;
echo '<div class="col-xs-12 no-margin no-padding black text-white" style="padding-bottom:30px;">
    <span class="col-xs-12 semi-title">'.$announcements[0]->title.'</span>
    <div class="col-xs-12 no-margin no-padding">
        <div class="col-xs-4 no-margin">
            <img class="img-responsive" src="'.$announcements[0]->image.'" alt="'.$announcements[0]->title.'"  title="'.$announcements[0]->title.'" />
        </div>
        <div class="col-xs-8 no-margin no-padding">
            <p>'.str_replace(array("<p>","</p>"),"",limit_words($announcements[0]->announcement, 20)).'...</p>
        </div>
    </div>
</div>';

	function limit_words($string, $word_limit){
		$words = explode(" ",$string);
		return implode(" ",array_splice($words,0,$word_limit));
	}
?>
<div class="clearfix vertical-spacer"></div>

