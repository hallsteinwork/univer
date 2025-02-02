<?php
get_header(); 

$lab_number = isset($_GET['lab']) ? intval($_GET['lab']) : 1;
if ($lab_number < 1 || $lab_number > 10) {
    echo "Лабораторна робота не знайдена.";
    return;
}

$available_files = [];
$file_types = ['php', 'html', 'js', 'css', 'txt'];
foreach ($file_types as $type) {
    $file_path = "index_lb_{$lab_number}.{$type}";
    if (file_exists($file_path)) {
        $available_files[$type] = $file_path;
    }
}
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторні роботи</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <script>
        function toggleContent(id) {
            var content = document.getElementById(id);
            if (content.style.display === 'none') {
                content.style.display = 'block';
            } else {
                content.style.display = 'none';
            }
        }
    </script>
</head>

<body>
<nav>
    <h2>Навігація по лабораторних роботах</h2>
    <ul>
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <li><a href="?lab=<?php echo $i; ?>">Лабораторна робота №<?php echo $i; ?></a></li>
        <?php endfor; ?>
    </ul>
</nav>

<main>
    <h2>Звіт</h2>
    <p>про лабораторну роботу №<?php echo $lab_number; ?> з курсу «Програмна інженерія розподілених інтернет-застосувань»</p>
    <p>студента групи ІПЗ-22-2<br> Абрамова Нікіти Сергійовича</p>
    <hr>

    <?php foreach ($available_files as $type => $file_path): ?>
        <button onclick="toggleContent('<?php echo $type; ?>')">Показати <?php echo strtoupper($type); ?></button>
        <div id="<?php echo $type; ?>" style="display: none; margin-top: 10px;">
            <h3>Файл <?php echo strtoupper($type); ?>:</h3>
            <pre><?php echo htmlspecialchars(file_get_contents($file_path)); ?></pre>
        </div>
    <?php endforeach; ?>
</main>
</body>
</html>

<?php get_footer(); ?>
