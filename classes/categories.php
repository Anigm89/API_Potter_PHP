<?php

declare(strict_types=1);

class Characters
{
    private string $fullName;
    private string $nickname;
    private string $hogwartsHouse;
    private string $image;
    private string $birthdate;

    public function __construct(
        string $fullName,
        string $nickname,
        string $hogwartsHouse,
        string $image,
        string $birthdate,

    ) {
        $this->fullName  = $fullName;
        $this->nickname = $nickname;
        $this->hogwartsHouse = $hogwartsHouse;
        $this->image = $image;
        $this->birthdate = $birthdate;
    }
    public static function fetch_and_get(string $api_url): array
    {
        $result = file_get_contents($api_url);
        if ($result === false) {
            echo "Error: No se pudo obtener datos de la URL.";
            return [];
        }
        $data = json_decode($result, true);
        if ($data === null) {
            echo "Error: No se pudo decodificar el JSON.";
            return [];
        }
        $characters = [];
        foreach ($data as $CharacterData) {
            $characters[] = new self(
                $CharacterData['fullName'],
                $CharacterData['nickname'],
                $CharacterData['hogwartsHouse'],
                $CharacterData['image'],
                $CharacterData['birthdate'],
            );
        }
        return $characters;
    }

    public function get_data(): array
    {
        return get_object_vars($this);
    }
}

class Books
{
    public function __construct(
        private string $title,
        private int $number,
        private string $description,
        private string $cover,
        private int $pages,
    ) {}

    static function fetch_books(string $url): array
    {
        $result = file_get_contents($url);
        $data = json_decode($result, true);
        $books = [];
        foreach ($data as $bookData) {
            $books[] = new self(
                $bookData['title'],
                $bookData['number'],
                $bookData['description'],
                $bookData['cover'],
                $bookData['pages'],
            );
        }
        return $books;
    }
    public function get_data(): array
    {
        return get_object_vars($this);
    }
}