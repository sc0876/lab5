<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php 
        $name = "LIM";
        $matric = "AI220267";
        $Course = "Web Development";
        $year = 2024;
        $address = "UTHM";
    ?>

    <table>
        <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td> 
        </tr>

        <tr>
            <td>Matric number</td>
            <td><?php echo "$matric"; ?></td> 
        </tr>

        <tr>
            <td>Course</td>
            <td><?php echo "$Course"; ?></td> 
        </tr>

        <tr>
            <td>Year of study</td>
            <td><?php echo "$year"; ?></td> 
        </tr>

        <tr>
            <td>Address</td>
            <td><?php echo "$address"; ?></td> 
        </tr>
    </table>
    
</body>
</html>
