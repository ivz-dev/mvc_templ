<?php
$page_num = floor($count/12);
?>
<div class="clearfix"> </div>

<?php if($category!='all'): ?>
    <?php $category_url = str_replace(" ", '-', $category) ?>
<div class="blog-pagenat-wthree">
    <ul>


            <?php if($number-1>0): ?>
                <li><a class="frist" href="/category/<?=$category_url?>/<?=$number-1?>">Prev</a></li>
            <?php endif; ?>

            <?php
            if($page_num-$number>=2 && $number-2>0)
            {
                for($i=$number-2; $i<=$number+2; $i++)
                {
                        echo "<li><a href=/category/{$category_url}/{$i}>$i</a></li>";
                }
            }
            else if($number-2<=0)
            {
                for ($i=1; $i<=5; $i++)
                {
                    echo "<li><a href=/category/{$category_url}/{$i}>$i</a></li>";
                }
            }

            else if($page_num-$number<=2)
            {
                for ($i=$page_num-5; $i<=$page_num; $i++)
                {
                    echo "<li><a href=/category/{$category_url}/{$i}>$i</a></li>";
                }
            }
            ?>
            <?php if($number+1<$page_num): ?>
                <li><a class="last" href="/category/<?=$category_url?>/<?=$number+1?>">Next</a></li>
            <?php endif; ?>

        </ul>
</div>
<?php endif; ?>