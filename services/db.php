
<?php

    function get_data($query) {
        $CONFIG = json_decode(file_get_contents('../config.json'), true);
        
        $mysqli = new mysqli($CONFIG["DB_HOST"], $CONFIG["DB_USER"], $CONFIG["DB_PASSWORD"], $CONFIG["DB_NAME"]);

        // Check connection
        if ($mysqli -> connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();
        }

        // Perform query
        $data = NULL;
        if ($result = $mysqli -> query($query)) {
            $data = $result -> fetch_all();
            // Free result set
            $result -> free_result();
        }

        $mysqli -> close();

        return $data;
    }

?> 