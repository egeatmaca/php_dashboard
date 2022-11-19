<div class='table-wrapper'>
    <?php
        if (in_array('table_id', array_keys($table_data))) {
            $table_id = $table_data['table_id'];
            echo "<table id=$table_id class='fl-table'>";
        } else {
            echo "<table class='fl-table'>";
        }
    ?>
        <thead>
            <tr>
                <?php
                    foreach ($table_data['table_headers'] as $header) {
                        echo "<th>$header</th>";
                    }
                ?>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($table_data['data'] as $row) {
                echo "<tr>";
                for ($i = 0; $i < count($row); $i++) {
                    $value = $row[$i];
                    echo "<td col=$i>$value</td>";
                }
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>
</div>