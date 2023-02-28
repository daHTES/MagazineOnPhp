<?php //$parent = isset($category['childs']); ?>
<li>
    <a href="category/<?=$category['alias'];?>"><?=$category['title'];?></a>
    <?php if(isset($category['childs'])): ?>
        <u>
            <?= $this->getMenuHtml($category['childs']);?>
        </u>
        <?php endif; ?>
</li>