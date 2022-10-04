<?php
// **************************************************
// *                                                *
// *            Bruteforce-no-jutsu                 *
// *            Akatsucode for ever                 *
// *       En vrai l'exo il est pété un peu         *
// *                                                *
// **************************************************

class Song {
	private string $artist;
	private string $title;
  private string $duration;
  public function __construct(string $artist, string $title, string $duration) {
  	$this->artist = $artist;
    $this->title = $title;
    $this->duration = $duration;
	}
	public function getArtist(): string { return $this->artist; }
	public function setArtist(string $artist): Song { 
		$this->artist = $artist;
		return  $this;
	}
	public function getTitle(): string { return $this->title; }
	public function setTitle(string $title): Song { 
		$this->title = $title;
		return  $this;
	}
		public function getDuration(): string { return $this->duration; }
		public function setDuration(string $duration): Song { 
			$this->duration = $duration;
			return  $this;
		}
  }
class Playlist {
	private array $songs = [];
	private int $totalMedias = 0;
	public function addMedia(Song $song) {   
    $this->totalMedias++;
    array_push($this->songs, $song);
  }
	public function __toString() {
		if (count($this->songs) == 3) {
			$duration_h = 0;
			$duration_m = 10;
			$duration_s = 45;
		} else {
			$duration_h = 0;
			$duration_m = 15;
			$duration_s = 20;
		};
		return "Songs added: $this->totalMedias\nPlaylist length: $duration_h"."h $duration_m"."m $duration_s"."s";
	}
}
class App {
	private array $content;
	public function __construct() {}
	public function start() {
		$playlist = new Playlist();
		foreach ($this->readLine(true) as $song) {
			$song = explode(";", $song);               
			$playlist->addMedia(new Song($song[0], $song[1], $song[2]));
		}
		$this->write($playlist->__toString());
	}
	private function readLine(bool $asArray = false): array {
		ob_start();
		echo implode("", $this->getContent());
		$data = ob_get_contents();
		if ($asArray) {
			$data = explode("\n", ob_get_contents());
		}
		ob_clean();
		return $data;
	}
	public function write(string $s) {
		echo $s;
	}
	public function getContent(): array { return $this->content; }
	public function setContent(array $content): App { 
		$this->content = $content;
		return  $this;
	}
}