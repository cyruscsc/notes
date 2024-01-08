<?php
require base_path('views/partials/head.php');
require base_path('views/partials/nav.php');
require base_path('views/partials/box-head.php');
require base_path('views/partials/note.php');
?>

<div>
  <a href="/note/edit?id=<?= $note['id'] ?>" class="text-sm text-gray-500">Edit</a>
  <form method="POST">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name='id' value="<?= $note['id'] ?>">
    <button type="submit" class="text-sm text-red-500">Delete</button>
  </form>
</div>

<?php
require base_path('views/partials/box-foot.php');
require base_path('views/partials/foot.php');
