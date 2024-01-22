<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student CRUD</title>
    <!-- Add Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-200">

    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4">Student Information</h1>

        <!-- Form to Add Student -->
        <form action="process.php" method="POST" class="mb-8">
            <input type="hidden" name="action" value="add">
            <div class="grid grid-cols-2 gap-4">
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
                    <input type="text" name="name" id="name" class="mt-1 p-2 w-full border rounded-md">
                </div>
                <div class="mb-4">
                    <label for="section" class="block text-sm font-medium text-gray-600">Section</label>
                    <input type="text" name="section" id="section" class="mt-1 p-2 w-full border rounded-md">
                </div>
                <div class="mb-4">
                    <label for="department" class="block text-sm font-medium text-gray-600">Department</label>
                    <input type="text" name="department" id="department" class="mt-1 p-2 w-full border rounded-md">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                    <input type="email" name="email" id="email" class="mt-1 p-2 w-full border rounded-md">
                </div>
                <div class="mb-4">
                    <label for="phone_no" class="block text-sm font-medium text-gray-600">Phone Number</label>
                    <input type="tel" name="phone_no" id="phone_no" class="mt-1 p-2 w-full border rounded-md">
                </div>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Add Student</button>
        </form>

        <!-- Display Student List -->
        <h2 class="text-xl font-bold mb-4">Student List</h2>
        <?php include 'display.php'; ?>

    </div>

</body>

</html>
