<?php

class Film {
    //atribut
    private string $id;
    private string $judul;
    private string $genre;
    private int $durasi;
    private string $pathGambar;

    //constructor
    public function __construct(string $id, string $judul, string $genre, int $durasi, string $pathGambar) {
        $this->id = $id;
        $this->judul = $judul;
        $this->genre = $genre;
        $this->durasi = $durasi;
        $this->pathGambar = $pathGambar;
    }

    //getter
    public function getId(): string {
        return $this->id;
    }
    public function getJudul(): string {
        return $this->judul;
    }
    public function getGenre(): string {
        return $this->genre;
    }
    public function getDurasi(): int {
        return $this->durasi;
    }
    public function getPathGambar(): string {
        return $this->pathGambar;
    }

    //setter
    public function setId(string $id): void {
        $this->id = $id;
    }
    public function setJudul(string $judul): void {
        $this->judul = $judul;
    }
    public function setGenre(string $genre): void {
        $this->genre = $genre;
    }
    public function setDurasi(int $durasi): void {
        $this->durasi = $durasi;
    }
    public function setPathGambar(string $pathGambar): void {
        $this->pathGambar = $pathGambar;
    }
}
?>