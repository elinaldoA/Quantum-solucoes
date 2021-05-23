<?php

  $resultado=mysqli_query($conectar,"SELECT * FROM post ORDER BY id desc");
  $linhas=mysqli_num_rows($resultado);

  while ($linhas = mysqli_fetch_array($resultado)) {
  echo "<section class='blog-details-area ptb-140'>";
  echo "<div class='container'>";
  echo "<div class='row'>";
  echo "<div class='col-md-8 col-xs-12'>";
  echo "<div class='blog-details-wrap'>";
  echo "<div class='blog-details-img'>";
  echo "<img class='img-responsive' src='Admin/Blog/imagens/".$linhas['imagem']."' alt=''>";
  echo "<div class='blog-details-content'><br />";
  echo "<h3>".$linhas['titulo']."</h3>";
  echo "<p>".$linhas['conteudo_completo']."</p>";
  echo "<footer>";
  echo "<span class='entry-author'><i class='fa fa-pencil'></i> " . $linhas['autor'] ." </span>";
  echo "<span class='entry-category'><i class='fa fa-folder-o'></i> " .$linhas['categoria']. "</span>";
  echo "</footer>";
  echo "<p> Postado em ".date('d-m-Y H:i:s', strtotime($linhas['data']))."</p>";
  echo "</div>";
  echo "</div>";
  echo "</div>";
  echo "</section>";
}
?>

