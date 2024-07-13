<div class="page-heading" style="background-color: white;    margin-bottom: 10px;">
    <nav aria-label="Page navigation example">
    <ul class="pagination">
    <?php
    if ($current_page > 3) { 
        $first_page = 1;
        ?>
       <li class="page-item"> <a class="page-item" href="?per_page=<?= $item_per_page ?>&page=<?= $first_page ?>">First</a></li>
        <?php
    }
    if ($current_page > 1) {
        $prev_page = $current_page - 1;
        ?>
       <li class="page-item"> <a class="page-item" href="?per_page=<?= $item_per_page ?>&page=<?= $prev_page ?>">Prev</a></li>
    <?php }
    ?>
    <?php for ($num = 1; $num <= $totalPages; $num++) { ?>
        <?php if ($num != $current_page) { ?>
            <?php if ($num > $current_page - 3 && $num < $current_page + 3) { ?>
               <li class="page-item"> <a class="page-item" href="?per_page=<?= $item_per_page ?>&page=<?= $num ?>"><?= $num ?></a></li>
            <?php } ?>
        <?php } else { ?>
            <li class="page-item"> <a><strong class="current-page page-item"><?= $num ?></strong></a></li>
        <?php } ?>
    <?php } ?>
    <?php
    if ($current_page < $totalPages - 1) {
        $next_page = $current_page + 1;
        ?>
       <li class="page-item"> <a class="page-item" href="?per_page=<?= $item_per_page ?>&page=<?= $next_page ?>">Next</a></li>
    <?php
    }
    if ($current_page < $totalPages - 3) {
        $end_page = $totalPages;
        ?>
       <li class="page-item"> <a class="page-item" href="?per_page=<?= $item_per_page ?>&page=<?= $end_page ?>">Last</a> </li>
        <?php
    }
    ?>
     </ul>
    </nav>
</div>