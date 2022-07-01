<?php


class Portfolio{

    private int $id;
    private string $title;
    private string $underTitle;
    private string $image;
    private string $screenshot1;
    private string $screenshot2;
    private string $screenshot3;
    private string $externalLink;
    private string $github;
    private array $techno;
    private string $description;
    


    function __construct(int $id, string $title, string $underTitle, string $image, string $screenshot1, string $screenshot2, string $screenshot3, string $externalLink, string $github, array $techno, string $description){
        $this->id = $id;
        $this->title = $title;
        $this->underTitle = $underTitle;
        $this->image = $image;
        $this->screenshot1 = $screenshot1;
        $this->screenshot2 = $screenshot2;
        $this->screenshot3 = $screenshot3;
        $this->externalLink = $externalLink;
        $this->github = $github;
        $this->techno = $techno;
        $this->description = $description;
    }

    function getId (){
        return $this->id;
    }

    function getTitle (){
        return $this->title;
    }

    function getUnderTitle (){
        return $this->underTitle;
    }

    function getImage (){
        return "images/" . $this->image;
    }

    function getScreenshot1 (){
        return $this->screenshot1;
    }

    function getScreenshot2 (){
        return $this->screenshot2;
    }

    function getScreenshot3 (){
        return $this->screenshot3;
    }

    function getExternalLink (){
        return $this->externalLink;
    }

    function getGithub (){
        return "https://github.com/HeleneGreat/" . $this->github;
    }

    function getTechno (){
        return $this->techno;
    }

    function getDescription (){
        return $this->description;
    }


    function getUrl (): string {
        return "https://helenegreat.alwaysdata.net/portfolio/detail-portfolio.php?id=".$this->getId();
        // return "http://localhost/portfolio/portfolio/detail-portfolio.php?id=".$this->getId();
    }



}
