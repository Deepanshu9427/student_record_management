<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student Details</title>
    <link rel="stylesheet" href="./src/output.css">
</head>
<body class="flex-col justify-center  w-full  bg-gradient-to-r from-purple-500 to-pink-500 min-h-screen">
    <div class="flex-col justify-center w-full my-4">
        <h1  class="flex justify-center text-2xl font-bold">New Student Details</h1>
        <div class="flex justify-center w-full">
        <div class="flex justify-center item-center w-1/3 border-2 border-white rounded-lg my-3">
            <form action="add.php" method="post" class="flex-col justify-center">
                <div class="flex-col justify-around my-2">        
                    <label >Student_id:</label>
                    <br>
                    <input type="text" id="Student_id" name="stud_id" class="border-2 border-white rounded-lg" required>
                </div>
                <div class="flex-col justify-around my-2">        
                    <label >Name:</label>
                    <br>
                    <input type="text" id="Name" name="name"  class="border-2 border-white rounded-lg" required>
                </div>
                <div class="flex-col justify-around my-2">        
                    <label >Course:</label>
                    <br>
                    <input type="text" id="Course" name="course"  class="border-2 border-white rounded-lg" required>
                </div>
                <div class="flex-col justify-around my-2">        
                    <label >Year:</label>
                    <br>
                    <input type="text" id="Year" name="year"  class="border-2 border-white rounded-lg" required>
                </div>
                <div class="flex-col justify-around my-2">        
                    <label >Phone Number:</label>
                    <br>
                   <input type="text" id="Phone" name="phone_no"  class="border-2 border-white rounded-lg" required >
                </div>
                <div class="flex text-center justify-center border-2 border-white rounded-lg my-6  hover:bg-green-500">
                    <button type="submit"  class="w-full">Add</button>
                </div>
                
        </form>
        </div>   
        </div>
        
    </div>
</body>
</html>
