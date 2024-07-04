<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$books = [
    ['id' => 1, 'title' => 'Harry Potter', 'author' => 'J.K. Rowling', 'image' => 'Harry_potter_deathly_hallows_US.jpg'],
    ['id' => 2, 'title' => 'To Kill a Mockingbird', 'author' => 'Harper Lee', 'image' => '1200px-To_Kill_a_Mockingbird_(first_edition_cover).jpg'],
    ['id' => 3, 'title' => '1984', 'author' => 'George Orwell', 'image' => '3744438.jpg'],
    ['id' => 4, 'title' => '2005', 'author' => 'Andrea Hirata', 'image' => 'Laskar_pelangi_sampul.jpg'],
    ['id' => 5, 'title' => '2016', 'author' => 'Tere Liye', 'image' => '9786020324784_Hujan-Cover-Baru-2018.jpg'],
    // Tambahkan buku lainnya di sini
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Buku - Book Haven</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Book Haven</h1>
        <nav>
            <ul>
                <li><a href="index.html">Beranda</a></li>
                <li><a href="books.php">Katalog Buku</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Katalog Buku</h2>
        <div class="book-list">
            <?php foreach ($books as $book): ?>
                <div class="book">
                    <img src="<?php echo $book['image']; ?>" alt="<?php echo $book['title']; ?>">
                    <h3><?php echo $book['title']; ?></h3>
                    <p>Penulis: <?php echo $book['author']; ?></p>
                    <form action="process_order.php" method="POST">
                        <input type="hidden" name="book_id" value="<?php echo $book['id']; ?>">
                        <input type="hidden" name="book_title" value="<?php echo $book['title']; ?>">
                        <button type="submit" onclick="showOrderConfirmation('<?php echo $book['title']; ?>')">Pesan</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Book Haven. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>