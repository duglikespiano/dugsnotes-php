<?php
interface ContentInterface
{
  public function display();
  public function edit();
}
class Article implements ContentInterface
{
  private $title;
  private $content;
  public function __construct($title, $content)
  {
    $this->title = $title;
    $this->content = $content;
  }
  public function display()
  {
    echo "<h2>{$this->title}</h2>";
    echo "<p>{$this->content}</p>";
  }
  public function edit()
  {
    echo "Editing the article '{$this->title}'";
  }
}

class Video implements ContentInterface
{
  private $title;
  private $url;
  public function __construct($title, $url)
  {
    $this->title = $title;
    $this->url = $url;
  }
  public function display()
  {
    echo "<h2>{$this->title}</h2>";
    echo "<iframe src='{$this->url}'></iframe>";
  }
  public function edit()
  {
    echo "Editing the video '{$this->title}'";
  }
}

$article = new Article('Introduction to PHP', 'PHP is a versatile scripting language');
$video = new Video('PHP for Beginners', 'https://www.youtube.com/embed/cgYWzZ5FTgc?si=X5nFFQ98p-oP-MSG');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?= $article->display() ?>
  <?= $video->display() ?>

</body>

</html>