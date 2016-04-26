<?php
$str="<ul class='media-list'>";
$git_base="https://github.com/niksoc/";
$git_projects=["bigbasket-scraper", "expense_tracker","TicRPG-game-java","dual-game-cpp","drop-game-cpp","pacman-game-cpp"];
$i=0;
foreach($git_projects as $git_project){
  $html=file_get_contents($git_base.$git_project) or die("network unreachable");;
  preg_match_all('/<div id="readme"[\s\S]*?<h1>.*?<\/a>([\s\S]*?)<\/h1>([\s\S]*?)(?:<h|<\/article)/',$html,$description);
  print($git_project);
  $mediaalign=($i%2==0)?"left":"right";
  $bracket = strpos($description[1][0],'(');
  if($bracket) $title = substr($description[1][0], 0, $bracket-1);
  else $title = $description[1][0]; 
  $media = strtolower($title); 
  $media = str_replace(' ','_',$media);
  $i++; 
  $str= $str."<li class='media'><div class='media-{$mediaalign} media-middle'><img class='media-object img-responsive' src='images/{$media}_screenshot.jpg' alt='{$title} screenshot'></img></div><div class='media-body'><h2 class='media-heading'>{$description[1][0]}<a href='{$git_base}{$git_project}'><img src='images/fi-social-github.svg' alt='github repo' class='size-24'></img></a></h2>{$description[2][0]}</div></li>"; 
} 
$title=$description[1][0]="vmsf"; 
$mediaalign=($i%2==0)?"left":"right"; 
$description[2][0]="Made in 11th standard, this is an unofficial student forum for my school. Students could post reviews, prose, poetry, advice to other students, form and manage clubs based on their interests. Unfortunately it didn't quite take off :D. The html and css were written by me, comments and javascript functionality were implemented by widgets and code snippets. Admittedly it's not polished, but it was my first foray into usage of computers as a tool to improve the quality of life, either my own or others'.";
$str= $str."<li class='media'><div class='media-{$mediaalign} media-middle'><img class='media-object img-responsive' src='images/{$title}_screenshot.jpg' alt='{$title} screenshot'></img></div><div class='media-body'><h2 class='media-heading'>{$description[1][0]}<a href='http://www.vmsf.comlu.com'><img src='images/fi-link.svg' alt='link to project' class='size-24'></img></a></h2>{$description[2][0]}</div></li>"; 
$str=$str."</ul>";
$projFile=fopen("githubproj.html","w") or die("unable to open file!");
fwrite($projFile,$str);
fclose($projFile);
?>
