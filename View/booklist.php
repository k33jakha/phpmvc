<table>
    <tr>
        <td> Title</td>
        <td> Author</td>
        <td> Description</td>
    </tr>
    <?php
    foreach ($books as $book)
    {
        ?>

        
        <tr>
            <td> <a href="index.php?book= <?php echo $book->title; ?>"><?php echo $book->title; ?> </td>
            <td> <?php echo $book->author; ?></td>
            <td> <?php echo $book->description; ?></td>
        </tr>
        <?php
    }
    ?>