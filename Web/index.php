<div class="announcement">
    <h3><?php echo htmlspecialchars($row['title']); ?></h3>
    <p><?php echo nl2br(htmlspecialchars($row['description'])); ?></p>
    <small>Posted on: <?php echo $row['created_at']; ?></small>
</div>