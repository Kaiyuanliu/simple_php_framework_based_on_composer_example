<?php
/**
 * home page
 */

if (isset($article)) {
    echo '<h1>'.$article['title'].'</h1>';
    echo '<h1>'.$article['content'].'</h1>';
}
