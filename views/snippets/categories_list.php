
    <div class="content-sidebar">
        <h4><img src="/images/fi.png" alt="">Categories</h4>
        <ul>

            <?php foreach ($cat_list as $catItem): ?>
                <li><a href="/category/<?=str_replace(' ', '-' ,$catItem->category)?>"><?=ucfirst($catItem->category)?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
