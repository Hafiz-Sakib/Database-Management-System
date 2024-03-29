<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone_no = $_POST['phone_no'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $sql = "INSERT INTO `customers` (customer_name,phone_no,email,address,password) values ('$name','$phone_no','$email','$address','$password')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="main">
        <section class="h-96 lg:h-screen font-poppins ">
            <div class="relative z-10 flex justify-center h-screen py-7 lg:py-16 dark:bg-gray-800 2xl:py-44">
                <div class="absolute top-0 bottom-0 left-0 w-full h-full bg-gray-50 dark:bg-gray-900 lg:bottom-0 lg:h-auto lg:w-full">
                    <div class="absolute inset-0 lg:bg-[#00000066] "></div>
                    <img src="https://images.pexels.com/photos/7321/sea-water-ocean-horizon.jpg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="" class="hidden object-cover w-full h-full lg:block">
                </div>
                <div class="flex items-center justify-center">
                    <div class="relative max-w-6xl px-4 mx-auto">
                        <div class="max-w-xl mx-auto lg:max-w-5xl">
                            <div class="flex flex-wrap items-center -mx-4">
                                <div class="hidden w-full px-6 mb-16 lg:w-3/5 lg:mb-0 lg:block">
                                    <h2 class="text-4xl font-bold leading-loose text-left text-gray-100 dark:text-gray-300 mb-9 lg:text-6xl ">
                                        Welcome and join our community</h2>
                                    <p class="text-lg text-left text-gray-200 dark:text-gray-300 ">You are welcome here!</p>
                                </div>
                                <div class="w-full px-4 lg:w-2/5">
                                    <div class="p-6 shadow-md lg:p-9 bg-gray-50 dark:bg-gray-900 ">
                                        <h2 class="mb-4 text-xl font-bold lg:mb-8 lg:text-3xl dark:text-gray-400">
                                            Join Us Using This Form</h2>
                                        <form action="" method="post" class="p-0 m-0">
                                            <div class="">
                                                <label for="" class="text-lg font-medium text-gray-700 dark:text-gray-400">Name :</label>
                                                <input type="text" class="w-full px-4 py-3 mt-3 bg-gray-200 rounded-lg dark:text-gray-400 dark:bg-gray-800 " name="name" placeholder="Enter your name" autocomplete="off">
                                            </div>
                                            <div class="mt-2">
                                                <label for="" class="text-lg font-medium text-gray-700 dark:text-gray-400">Phone No</label>
                                                <input type="number_format" class="w-full px-4 py-3 mt-3 bg-gray-200 rounded-lg dark:text-gray-400 dark:bg-gray-800 " name="phone_no" placeholder="Enter your phone no" autocomplete="off">
                                            </div>

                                            <div class="mt-2">
                                                <label for="" class="text-lg font-medium text-gray-700 dark:text-gray-400">Email:</label>
                                                <input type="email" class="w-full px-4 py-3 mt-3 bg-gray-200 rounded-lg dark:text-gray-400 dark:bg-gray-800 " name="email" placeholder="Enter your mail" autocomplete="off">
                                            </div>
                                            <div class="mt-2">
                                                <label for="" class="text-lg font-medium text-gray-700 dark:text-gray-400">Address</label>
                                                <input type="text" class="w-full px-4 py-3 mt-3 bg-gray-200 rounded-lg dark:text-gray-400 dark:bg-gray-800 " name="address" placeholder="Enter Address" autocomplete="off">
                                            </div>
                                            <div class="mt-2">
                                                <div>
                                                    <label for="" class="text-lg font-medium text-gray-700 dark:text-gray-400 ">Password:</label>
                                                    <div class="relative flex items-center mt-2">
                                                        <input type="password" class="w-full px-4 py-3 bg-gray-200 rounded-lg dark:text-gray-400 dark:bg-gray-800 " name="password" placeholder="Enter Password">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="absolute right-0 mr-3 dark:text-gray-50" fill="currentColor" class="bi bi-eye-slash" viewBox="0 0 16 16">
                                                            <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z" />
                                                            <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z" />
                                                            <path d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="motion-safe:animate-bounce w-full px-4 py-3 mt-5 font-semibold text-gray-200 bg-blue-500 rounded-lg dark:bg-blue-500 hover:text-blue-200 " name="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
</body>

</html>