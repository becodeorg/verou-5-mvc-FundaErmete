<?php

declare(strict_types=1);

class Article
{
    public string $title;
    public ?string $description;
    public ?string $publishDate;

    public function __construct(string $title, ?string $description, ?string $publishDate)
    {
        $this->title = $title;
        $this->description = $description;
        $this->publishDate = $publishDate;
    }

    public function displayDetails() {
        echo "Title: {$this->title}\n";
        echo "Description: {$this->description}\n";
        echo "Publish Date: {$this->publish_date}\n";
    }
    
    public function formatPublishDate($format = 'DD-MM-YYYY')
    {
        // TODO: return the date in the required format
    }
}