<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        return substr(
            trim($name),
            0,
            1
        );
        // throw new \BadFunctionCallException("Implement the function");
    }

    public function initial(string $name): string
    {
        $initial = strtoupper($this->firstLetter($name));

        return "$initial.";
        // throw new \BadFunctionCallException("Implement the function");
    }

    public function initials(string $name): string
    {
        $name = explode(
            ' ',
            trim($name)
        );

        $first_name = $this->initial($name[0]);
        $last_name  = $this->initial($name[1]);

        return "$first_name $last_name";
        // throw new \BadFunctionCallException("Implement the function");
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $a = $this->initials($sweetheart_a);
        $b = $this->initials($sweetheart_b);

        return <<<ICON
     ******       ******
   **      **   **      **
 **         ** **         **
**            *            **
**                         **
**     $a  +  $b     **
 **                       **
   **                   **
     **               **
       **           **
         **       **
           **   **
             ***
              *
ICON;
        // throw new \BadFunctionCallException("Implement the function");
    }
}
