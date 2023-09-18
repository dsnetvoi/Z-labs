<?php
  if(isset($_POST['submit'])){ 
  if(isset($_GET['go'])){ 
  if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){ 
  $name=$_POST['name']; 
  $sql="SELECT * FROM Poisk WHERE news headline LIKE '%" . $name .  "%'"; 
  //- Запустить запрос к функции MySQL Query
  $result=mysql_query($sql); 
  //-Создание цикла 
  while($row=mysql_fetch_array($result)){ 
            $News_headline = $row['news_headline'];
            $Short_description = $row['short_description'];
            $News_text = $row['news_text']; 
            $News_img = $row['news_img']; 
            $ID = $row['id']; 
  //-Вывод результата в виде массива 
  echo "<ul>n"; 
  echo "<li>" . "<a  href="search.php?id=$ID">"   .$FirstName . " " . $LastName .  "</a></li>n"; 
  echo "</ul>"; 
  } 
  } 
  else{ 
  echo  "<p> Пожалуйста, введите поисковый запрос </p>"; 
  } 
  } 
  } 
?>
