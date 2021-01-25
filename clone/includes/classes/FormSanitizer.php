<?php
class FormSanitizer {

    // **** GENERIC FUNCTION **** //
    // *** static: won't create instance of this function ***
    public static function sanitizeFormString($inputText) {
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ", "", $inputText);
        // $input = trim($inputText);  *** Delete space except middle of the text ***
        $inputText = strtolower($inputText);
        $inputText = ucfirst($inputText); // *** lowercase all of the letter and capitalize the first letter
        return $inputText;
    }

    // **** SPECIFIC FUNCTION **** //
    public static function sanitizeFormUsername($inputText) {
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ", "", $inputText);
        return $inputText;
    }

    // **** SPECIFIC FUNCTION **** //
    public static function sanitizeFormPassword($inputText) {
        $inputText = strip_tags($inputText);
        return $inputText;
    }

    // **** SPECIFIC FUNCTION **** //
    public static function sanitizeFormEmail($inputText) {
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ", "", $inputText);
        return $inputText;
    }
}
?>