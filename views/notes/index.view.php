<?php

require base_path('views/partials/head.php');
require base_path('views/partials/nav.php');
require base_path('views/partials/box-head.php');
foreach ($notes as $note) {
  require base_path('views/partials/note.php');
}
require base_path('views/partials/box-foot.php');
require base_path('views/partials/foot.php');
