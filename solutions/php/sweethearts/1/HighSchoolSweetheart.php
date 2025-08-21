<?php

class HighSchoolSweetheart
{
    // 1. First letter (trim whitespace, take only first char)
    public function firstLetter(string $name): string
    {
        return substr(trim($name), 0,1);
    }

    // 2. Initial
    public function initial(string $name): string
    {
        return strtoupper($this->firstLetter($name)) . ".";
    }

    // 3. Initials (first + last name)
    public function initials(string $name): string
    {
        $parts = explode(" ", trim($name));
        return $this->initial($parts[0]) . " " . $this->initial($parts[1]);
    }

    // 4. Pair (ASCII heart with initials inside)
    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $initA = $this->initials($sweetheart_a);
        $initB = $this->initials($sweetheart_b);
        $line  = "**     $initA  +  $initB     **";

        return <<<HEART
     ******       ******
   **      **   **      **
 **         ** **         **
**            *            **
**                         **
$line
 **                       **
   **                   **
     **               **
       **           **
         **       **
           **   **
             ***
              *
HEART;
    }
}
