<!-- notes.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Notes Page</title>
    
</head>
<body>
    <?php include 'navbar.php'; ?>

    <section>
        <h1>Create Note</h1>
        <form action="index.php?page=notes" method="POST">
            <label for="title">Title:</label><br>
            <input type="text" name="title" id="title" required><br>
            <br>
            <label for="content">Content:</label><br>
            <textarea name="content" id="content" rows="5" cols="40" required></textarea><br>
            <br>
            <input type="submit" name="submit" value="Save Note">
        </form>
    </section>

    <section>
        <h1>View Notes</h1>
        <?php foreach ($notes as $note) : ?>
            <div>
                <h3><?php echo $note['title']; ?></h3>
                <p><?php echo $note['content']; ?></p>
            </div>
            <hr>
        <?php endforeach; ?>
    </section>

    
</body>
</html>


