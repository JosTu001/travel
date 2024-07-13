<div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
<span class="flex items-center col-span-3">

 Trang
</span>
<span class="col-span-2"></span>
<!-- Pagination -->
<span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
  <nav aria-label="Table navigation">
    <ul class="inline-flex items-center">
      
      <!-- <li>
        <button class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple" aria-label="Previous">
          <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
            <path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
          </svg>
        </button>
      </li> -->

      <?php
      if ($current_page > 3) { 
          $first_page = 1;
          ?>
      <li>
        <a  href="?per_page=<?= $item_per_page ?>&page=<?= $first_page ?>" class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
          First
        </a>
      </li>
      <?php
        }
        if ($current_page > 1) {
            $prev_page = $current_page - 1;
            ?>
      <li>
        <a href="?per_page=<?= $item_per_page ?>&page=<?= $prev_page ?>" class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
        Prev
        </a>
      </li>
      <?php }
        ?>
        <?php for ($num = 1; $num <= $totalPages; $num++) { ?>
            <?php if ($num != $current_page) { ?>
                <?php if ($num > $current_page - 3 && $num < $current_page + 3) { ?>
      <li>
        <a href="?per_page=<?= $item_per_page ?>&page=<?= $num ?>" class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple">
        <?= $num ?>
       </a>
      </li>
      <?php } ?>
       <?php } else { ?>
      <li>
        <a class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
        <?= $num ?>
        </a>
      </li>
      <?php } ?>
      <?php } ?>
      <?php
      if ($current_page < $totalPages - 1) {
          $next_page = $current_page + 1;
          ?>
      <li>
        <a href="?per_page=<?= $item_per_page ?>&page=<?= $next_page ?>" class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
        Next
        </a>
      </li>
      <?php
        }
        if ($current_page < $totalPages - 3) {
            $end_page = $totalPages;
            ?>
      <li>
        <a href="?per_page=<?= $item_per_page ?>&page=<?= $end_page ?>" class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
        Last
        </a>
      </li>
      <?php
      }
      ?>
     
      <!-- <li>
        <button class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple" aria-label="Next">
          <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
            <path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
          </svg>
        </button>
      </li> -->
    </ul>

 


  </nav>
</span>
</div>