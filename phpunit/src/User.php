<?php

namespace App;

class User
{
    public string $first_name ;
    public string $last_name;

    public function getFullName(): string
    {
        if (strpos($this->first_name, "A") === 0) {
            $this->first_name = "Alpha";
        } else if (strpos($this->first_name, "B") === 0) {
            $this->first_name = "BRAVO";
        } else if (strpos($this->first_name, "C") === 0) {
            $this->first_name = "CHARLIE";
        } else if (strpos($this->first_name, "D") === 0) {
            $this->first_name = "DELTA";
        } else if (strpos($this->first_name, "E") === 0) {
            $this->first_name = "ECHO";
        } else if (strpos($this->first_name, "F") === 0) {
            $this->first_name = "FOXTROT";
        } else if (strpos($this->first_name, "G") === 0) {
            $this->first_name = "GOLF";
        } else if (strpos($this->first_name, "T") === 0) {
            $this->first_name = "Teresa";
        }
        return trim("$this->first_name $this->last_name");
    }
}
