<h2>Boek bewerken</h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('books/edit/'.$books_item['id']); ?>
    <table>
        <tr>
            <td><label for="title">Title</label></td>
            <td><input type="input" name="title" size="50" value="<?php echo $books_item['title'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="author">Author</label></td>
            <td><textarea name="author" rows="1" cols="40"><?php echo $books_item['author'] ?></textarea></td>
        </tr>
        <tr>
             <td><label for="year">Year</label></td>
            <td><textarea name="year" rows="1" cols="40"><?php echo $books_item['year'] ?></textarea></td>
        </tr>
        <tr>
             <td><label for="genre">Genres</label></td>
            <td><textarea name="genre" rows="1" cols="40"><?php echo $books_item['genre'] ?></textarea></td>
        </tr>
        <tr>
             <td><label for="description">Description</label></td>
            <td><textarea name="description" rows="5" cols="40"><?php echo $books_item['description'] ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit book item" /></td>
        </tr>
    </table>
</form>