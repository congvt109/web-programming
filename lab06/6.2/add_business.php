<html>

<head>
    <title>
        <?php
        $doc_title = 'Business Listings';
        echo "$doc_title\n";
        ?>
    </title>
</head>

<body>
    <h1>
        <?= $doc_title ?>
    </h1>
    <?php
    // establish the database connection
    require('db_login.php');
    $pick_message = 'Click on a category to find business listings:';
    ?>
    <table border=0>
        <tr>
            <td valign="top">
                <table border=5>
                    <tr>
                        <td class="picklist"><strong><?= $pick_message ?></strong></td>
                    </tr>
                    <p>
                        <?php
                        $cat_id = 0;
                        // build the scrolling pick list for the categories
                        $sql = "SELECT * FROM categories";
                        $result = $conn->query($sql);
                        $str = $_SERVER["PHP_SELF"];
                        while ($row = mysqli_fetch_row($result)) {
                            echo '<tr><td class="formlabel">';
                            echo "<a href=\"$str?cat_id=$row[0]\">";
                            echo "$row[1]</a></td></tr>\n";
                        }
                        ?>
                </table>
            </td>
            <td valign="top" style=" padding-left: 40px;">
                <table border=1>
                    <?php
                    if (isset($_GET['cat_id'])) {
                        $cat_id = $_GET['cat_id'];
                    }
                    if ($cat_id) {

                        $sql = "SELECT * FROM business b, biz_categories bc where";
                        $sql .= " b.BusinessID = bc.BusinessID";
                        $sql .= " and bc.CategoryID = '$cat_id'";
                        $result = $conn->query($sql);

                        while ($row = mysqli_fetch_row($result)) {

                            echo "<tr>\n";
                            for ($i = 0; $i < count($row); $i++) {
                                echo "<td >$row[$i]</td>\n";
                            }
                            echo "</tr>\n";
                        }
                    }
                    ?>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>