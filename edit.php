<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student Details</title>
  
    <link rel="stylesheet" href="./src/output.css">
</head>
<body class="flex-col justify-center  w-full  bg-gradient-to-r from-purple-500 to-pink-500 min-h-screen">
    <div class="flex-col justify-center my-4">
        <h1 class="flex justify-center text-2xl font-bold">Edit Student Details</h1>
        <?php
        include 'config.php';
        $id = $_GET['id'];
        $sql = "SELECT * FROM course WHERE student_id='$id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            ?>
            <div class=" flex justify-center w-full">
            <div class="flex justify-center my-3 border-2 border-white w-1/3 rounded-lg items-center">
                <form action="update.php" method="post" class="flex-col justify-center">
                    <input type="hidden" name="id" value="<?php echo $row['student_id']; ?>">
                    <div class="flex-col justify-around my-3">        
                        <label for="editName" class="mx-2">Name:</label>
                        <br>
                        <input type="text" id="editName" name="name" value="<?php echo $row['name']; ?>" class="border-2 border-white rounded-lg">
                    </div>
                    <div class="flex-col justify-around my-3">        
                        <label for="editCourse" class="mx-2">Course:</label>
                        <br>
                    <input type="text" id="editCourse" name="course" value="<?php echo $row['course']; ?>" class="border-2 border-white rounded-lg">
                    </div>
                    <div class="flex-col justify-around my-3">        
                        <label for="editYear" class="mx-2">Year:</label>
                        <br>
                        <input type="text" id="editYear" name="year" value="<?php echo $row['year']; ?>" class="border-2 border-white rounded-lg">
                    </div>
                    <div class="flex-col justify-around my-3">        
                       
                    <label for="editPhone" class="mx-2">Phone Number:</label>
                    <br>
                    <input type="text" id="editPhone" name="phone_no" value="<?php echo $row['phone_no']; ?>" class="border-2 border-white rounded-lg">
                    </div>
                    <div class="flex text-center justify-center border-2 border-white rounded-lg my-6  hover:bg-green-500">
                        <button type="submit"  class="w-full">Update</button>
                    </div>
                    
                </form>
            </div>
            <?php
        } else {
            echo "Student not found";
        }
        $conn->close();
        ?>
    </div>
            </div>
            
</body>
</html>
