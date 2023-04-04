<?php
// Connect to the database
$host = "localhost"; // replace your database host
$username = "root"; // replace your database username
$password = ""; // replace your database password
$database = "ostad"; // replace your database name
$conn = mysqli_connect($host, $username, $password, $database);

$post_id = $_GET['id']; 
$sql = "SELECT * FROM posts WHERE id = $post_id";
$result = mysqli_query($conn, $sql);
$post = mysqli_fetch_assoc($result);
?>

<?php include('header.php') ?>
    <main class="container mx-auto py-8 sm:px-6 lg:px-8">
        <article class="max-w-4xl mx-auto bg-white rounded-lg shadow-md">
            <h1 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-4 px-6 py-4 border-b-4 border-blue-600">
                <?php echo $post['title']; ?>
            </h1>
            <img src="<?php echo $post['image']; ?>" alt="Blog Post Image" class="w-full rounded-t-lg">
            <div class="px-6 py-4">
                <p class="text-gray-700 text-lg mb-4">
                    <?php echo $post['content']; ?>
                </p>
                <p class="text-gray-600 text-sm mb-4">
                    Written by <a href="#" class="text-blue-600 font-medium">Author Name</a>.
                </p>
                <div class="flex flex-wrap justify-center sm:justify-start space-x-0 sm:space-x-4 space-y-4 sm:space-y-0">
                    <a href="#"
                       class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-full transition duration-300 ease-in-out flex-shrink-0">
                        <i class="fab fa-facebook-f mr-2"></i> Facebook
                    </a>
                    <a href="#"
                       class="bg-blue-400 hover:bg-blue-500 text-white py-2 px-4 rounded-full transition duration-300 ease-in-out flex-shrink-0">
                        <i class="fab fa-twitter mr-2"></i> Twitter
                    </a>
                    <a href="#"
                       class="bg-gray-700 hover:bg-gray-800 text-white py-2 px-4 rounded-full transition duration-300 ease-in-out flex-shrink-0">
                        <i class="fab fa-linkedin-in mr-2"></i> LinkedIn
                    </a>
                </div>
            </div>
        </article>
    </main>

<?php include('footer.php') ?>