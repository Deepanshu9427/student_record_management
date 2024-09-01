<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="./src/output.css">
</head>
<body class="flex-col justify-center items-center w-full bg-gradient-to-r from-purple-500 to-pink-500 min-h-screen">
    <div class="flex-row justify-between   my-6">
    <a href="#" class="w-8 text-center text-l font-bold mx-3 text-white " >Home</a>
    <a href="#" class="w-8 text-center text-l font-bold mx-3 text-white">About</a>
    <a href="#" class="w-8 text-center text-l font-bold mx-3 text-white">Services</a>
    <a href="#" class="w-8 text-center text-l font-bold mx-3 text-white">Contact</a>
    </div>
    <div class="flex justify-center w-full">
    <div class="flex-col  items-center w-11/12 border-2 border-white rounded-lg">
        <h1 class="flex justify-center  text-4xl font-bold">Student Management System</h1>
        <table class="flex justify-center my-4 ">
            <tr class="">
                <th class=" border-2 rounded-lg  border-white w-48 text-center ">ID</th>
                <th class=" border-2 rounded-lg  border-white w-48 text-center ">Name</th>
                <th class=" border-2 rounded-lg  border-white w-48 text-center">Course</th>
                <th class=" border-2 rounded-lg  border-white w-48 text-center">Year</th>
                <th class=" border-2 rounded-lg  border-white w-48 text-center">Phone_No.</th>
            </tr>
            <?php
            include 'config.php';
            $sql = "SELECT student_id, name, course, year, phone_no FROM course";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                    <td class=\"border-2 border-white w-48 text-center\">" . $row["student_id"] . "</td>
                    <td class=\"border-2 border-white w-48 text-center\">" . $row["name"] . "</td>
                    <td class=\"border-2 border-white w-48 text-center\">" . $row["course"] . "</td>
                    <td class=\"border-2 border-white w-48 text-center\">" . $row["year"] . "</td>
                    <td class=\"border-2 border-white w-48 text-center\">" . $row["phone_no"] . "</td>  
                    <td class=\"w-32\">
                        <div class=\"flex justify-center w-1/2 bg-blue-500 rounded-m text-white rounded-md text-center text-sm border-2 border-white hover:opacity-35\">
                            <a href='edit.php?id=" . $row["student_id"] . "' >Edit</a> 
                        </div>
                        <div class=\"flex justify-center w-1/2 bg-red-500 rounded-m text-white rounded-md text-center text-sm border-2 border-white hover:opacity-35\">
                            <a href='delete.php?id=" . $row["student_id"] . "' >Delete</a> 
                        </div>
                    </td>
                          
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No records found</td></tr>";
            }
            $conn->close();
            ?>
        </table>
        <div class="flex justify-center w-full my-3">
            <a href="create.php" class="bg-green-500 hover:opacity-35 text-white w-32 text-center rounded-md border-2 border-white  text-sm">Add New Student</a>
        </div>
        
    </div>
    </div>
   
</body>
</html>
