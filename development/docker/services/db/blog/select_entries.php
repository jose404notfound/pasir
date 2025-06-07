<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/services/db/auth/auth_functions.php';
secure_session_start();
require_auth();  // Ensure the user is authenticated

// CSRF verification
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    die(json_encode(["status" => "error", "message" => "Method not allowed."]));
}

if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    http_response_code(403);
    die(json_encode(["status" => "error", "message" => "Invalid CSRF token."]));
}

$config = include($_SERVER['DOCUMENT_ROOT'].'/services/db/config.php');

// Create database connection using the configuration for blog_db
$conn_blog = new mysqli($config['blog']['host'], $config['blog']['username'], $config['blog']['password'], $config['blog']['dbname']);

if ($conn_blog->connect_error) {
    http_response_code(500);
    echo "Database connection error.";
    exit;
}

// Fetch blog entries
$sql = "SELECT id, title, content, created_at, author_username FROM blog_entries ORDER BY created_at DESC";
$result = $conn_blog->query($sql);

if ($result->num_rows > 0) {
   // Start table structure
    $output = '<table class="blog-entries-table">';
    $output .= '<thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Created At</th>
                        <th>Author</th>
                    </tr>
                </thead>
                <tbody>';

    // Generate the rows for each blog entry
    while ($row = $result->fetch_assoc()) {
        $output .= '<tr>';
        $output .= '<td>' . htmlspecialchars($row['id']) . '</td>';
        $output .= '<td>' . htmlspecialchars($row['title']) . '</td>';
        $output .= '<td>' . nl2br(htmlspecialchars($row['content'])) . '</td>';
        $output .= '<td>' . htmlspecialchars($row['created_at']) . '</td>';
        $output .= '<td>' . htmlspecialchars($row['author_username']) . '</td>';
        $output .= '</tr>';
    }

    $output .= '</tbody></table>';
    
    echo $output;
} else {
    echo '<p>No blog entries found.</p>';
}

$conn_blog->close();
?>
