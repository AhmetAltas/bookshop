
<div class="ind">

<h2>Boeken</h2>
 
<table>
    <tr>
        <td><strong>Boek</strong></td>
        <td><strong>Beschrijving</strong></td>
        <td><strong>Opties</strong></td>
    </tr>
<?php foreach ($books as $book): ?>
        <tr>
            <td><?php echo $book['title']; ?></td>
            <td><?php echo $book['description']; ?></td>
            <td>
                <a href="<?php echo site_url('books/'.$book['slug']); ?>">View</a> | 
                <a href="<?php echo site_url('books/edit/'.$book['id']); ?>">Edit</a> | 
                <a href="<?php echo site_url('books/delete/'.$book['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>

</div>