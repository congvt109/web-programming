<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            font-family: "Helvetica Neue",Helvetica,sans-serif;
            text-align: center;
            background-color: #89635C;
            color: #fff;
        }
    </style>
</head>
<body>
    <?php
        class Page{
            private $title;
            private $year;
            private $content;
            private $copyright;
            private $page;
            
            public function setTitle ($title) {
                $this->title = $title;
            }
            public function setContent ($content) {
                $this->content = $content;
            }
            public function setYear ($year) {
                $this->year = $year;
            }
            public function setCopyright ($copyright) {
                $this->copyright = $copyright;
            }
            public function addHeader () { 
                $this->page = $this->page . "<h1> $this->title </h1>";
            }
            public function addContent () {
                $this->page = $this->page . "<p> $this->content </p>";
            }
            public function addFooter () {
                $this->page = $this->page . "<h3> Release at $this->year by author $this->copyright</h3>";
            }
            public function buildPage () {
                $this->addHeader();
                $this->addContent();
                $this->addFooter();
            }
            public function get () {
                echo $this->page;
            } 
        }
        $page = new Page();
        $page->setTitle("Web-programming lab 05");
        $page->setContent("This page is maked for web-programming subject! Thanks for visting");
        $page->setYear("2022");
        $page->setCopyright("congvt-4496");
        $page->buildPage();
        $page->get();
    ?>
</body>
</html>
