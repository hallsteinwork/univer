<?php
// Підключення до бази даних
include('db.php');

// Отримання ID лабораторної роботи з параметрів URL
$id = $_GET['id'];

// Отримання конкретної лабораторної роботи з бази даних
$lab = $db->query("SELECT * FROM labs WHERE id = $id")->fetch_assoc();

if ($lab) {
?>
    <div class="lab-code">
        <h2>Код лабораторної роботи: <?php echo $lab['title']; ?></h2>
        <pre><code><?php echo htmlspecialchars($lab['code']); ?></code></pre>
    </div>
<?php
} else {
    echo "Лабораторна робота не знайдена.";
}
?>
