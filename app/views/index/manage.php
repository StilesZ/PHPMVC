<form  <?php if (isset($item['id'])) { ?>
            action="/index/update/<?php echo $item['id'] ?>"
        <?php } else { ?>
            action="/index/add"
        <?php } ?>
      method="post">

    <?php if (isset($item['id'])): ?>
        <input type="hidden" name="id" value="<?php echo $item['id'] ?>">
    <?php endif; ?>
    <input type="text" name="value" value="<?php echo isset($item['name']) ? $item['name'] : '' ?>">
    <input type="submit" value="提交">
</form>

<a class="big" href="/index/index">返回</a>