<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marksheet</title>
    <style>
        body {
            margin: 0;
            padding: 10px;
            font-family: Arial, sans-serif;
            background-color: #fff;
        }

        .container {
            width: 60%;
            margin: 0 auto;
            text-align: center;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #000;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        td {
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Marksheet</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Marks</th>
                <th>Grade</th>
            </tr>
            <?php
            class Marksheet {
                public $name, $marks ,$grade;

                function __construct($name, $marks, $grade) {
                    $this->studentName = $name;
                    $this->marks = $marks;
                    $this->grade= $grade;
                }
                function marksheet() {
                    echo "<tr>";
                    echo "<td>" . $this->studentName . "</td>";
                    echo "<td>" . $this->marks . "</td>";
                    echo "<td>" . $this->grade . "</td>";
                    echo "</tr>";
                }
            }

            $student1 = new Marksheet("Rayyan", 90 ,"A+");
            $student1->marksheet();
            $student2 = new Marksheet("Aziz", 75 ,"A");
            $student2->marksheet();
            $student3 = new Marksheet("Zain", 60 ,"B");
            $student3->marksheet();
            ?>
        </table>
    </div>
</body>
</html>
