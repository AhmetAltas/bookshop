
<div class="ind">
<h2>Boek toevoegen</h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('books/create'); ?>    
    <table>
        <tr>
            <td><label for="title">Title</label></td>
            <td><input type="input" name="title" size="50" /></td>
        </tr>
        <tr>
            <td><label for="author">Author</label></td>
            <td><textarea name="author" rows="1" cols="40"></textarea></td>
        </tr>
        <tr>
            <td><label for="year">Year</label></td>
            <td><textarea name="year" rows="1" cols="40"></textarea></td>
        </tr>
        <tr>
            <td><label for="genre">Genre</label></td>
            <td><textarea name="genre" rows="1" cols="40"></textarea></td>
        </tr>
        <tr>
            <td><label for="Description">Description</label></td>
            <td><textarea name="description" rows="5" cols="40"></textarea></td>
        </tr>
            <td></td>
            <td><input type="submit" name="submit" value="Create books item" /></td>
        </tr>
    </table>    
</form>
</div>