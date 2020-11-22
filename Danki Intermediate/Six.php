
<?php

//$content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a arcu in erat fringilla vestibulum sed id turpis. Morbi in ligula molestie, sagittis augue sagittis, sagittis justo. Praesent interdum justo in mi vestibulum, semper bibendum odio rutrum. Integer id pretium felis. Quisque nisl eros, euismod quis finibus a, maximus eget ipsum. Mauris hendrerit tellus metus. Morbi ut leo rhoncus turpis hendrerit gravida. Vestibulum blandit vel ligula in sagittis. Fusce nunc nulla, malesuada eget lacus eu, feugiat vulputate lacus. Sed eget nisi sit amet tellus convallis placerat quis sed leo. Vestibulum imperdiet diam at tortor tempor tincidunt. Mauris interdum, tellus ut consequat dapibus, augue justo tempus erat, quis ornare ipsum nulla et odio. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.';

//Cuts a string. 3rd V. is the amount of characters.
//echo substr($content,0,20);

$name = 'Lucas Faustino Axelson';

//Breaks up each word into an array.
// [0]Lucas => [1]Faustino => [2]Axelson
$names = explode(' ',$name);

//print_r($names);

//Joins an array with a delimiter. In this case, the space.
//"LucasFaustinoAxelson
$names = implode('',$names);

//echo $names;

$content = '<h1>Lucas</h1>Else';

echo $content;

//Removes all html code.
echo strip_tags ($content);

htmlentities()
//Shows html code on screen
?>