<body>
<style>@font-face{font-family:mono;src:url('mono.ttf');}</style>
<pre style="font-family:mono;font-size:20px;">
<?php 
for($i=1;$i<= 4;$i++){
  for($j=2;$j<= $i;$j++){
  echo  "  ";
  }
echo $i;
echo $i;
  for($j=3;$j>=($i);$j--){
    echo "**";
  }
 echo $i;
echo $i;
  echo "\n";
}
?></pre></body>
