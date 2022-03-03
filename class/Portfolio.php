<?php


class Portfolio{

    private int $id;
    private string $title;
    private string $underTitle;
    private string $image;
    private array $screenshots;
    private string $externalLink;
    private string $github;
    private array $techno;


    function __construct(int $id, string $title, string $underTitle, string $image, array $screenshots, string $externalLink, string $github, array $techno){
        $this->id = $id;
        $this->title = $title;
        $this->underTitle = $underTitle;
        $this->image = $image;
        $this->screenshots = $screenshots;
        $this->externalLink = $externalLink;
        $this->github = $github;
        $this->techno = $techno;
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

    function getScreenshots (){
        return $this->screenshots;
    }

    function getExternalLink (){
        return $this->externalLink;
    }

    function getGithub (){
        return $this->github;
    }

    function getTechno (){
        return $this->techno;
    }


    function getUrl (): string {
        // return "https://helenegreat.alwaysdata.net/detail-portfolio.php?id=".$this->getId();
        return "http://localhost/portfolio/detail-portfolio.php?id=".$this->getId();
    }



}
