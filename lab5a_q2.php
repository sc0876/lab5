<?php
    $students = [
        [
            'name' => "Alice",
            "program" => "BIP",
            "age" => 21
        ],

        [
            'name' => "Bob",
            "program" => "BIS",
            "age" => 20
        ],

        [
            'name' => "Raju",
            "program" => "BIT",
            "age" => 22
        ]
    ];
?>
<html>
    <head>
        <title>Lab 5a - Q2</title>
    </head>

    <body>
        <table>
            <tr>
                <th>Name</th>
                <th>Program</th>
                <th>Age</th>
            </tr>

        <?php foreach($students as $student) { ?>
            <tr>
                <?php foreach($student as $key => $value) { ?>
                <td><?php echo $value;}}?></td>
            </tr>
        </table>
    </body>
</html>