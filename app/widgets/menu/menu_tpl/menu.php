<li>
    <a href="?id=<?=$id;?>"><?=$category['title'];?></a>
    <?php if(isset($category['childs'])): ?>
        <u>
            <?= $this->getMenuHtml($category['childs']);?>
        </u>
        <?php endif; ?>
</li>