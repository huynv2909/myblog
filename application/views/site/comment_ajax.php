<?php foreach ($comments as $comment): ?>
   <div class="comment" id="cmt-<?php echo $comment->id; ?>">
      <div class="avatar col-xs-2">

         <?php if ($comment->ad): ?>
            <i class="icon-check text-center" style="color: <?php echo $comment->audience; ?>; font-weight: bold;"></i>
         <?php else: ?>
            <i class="icon-user text-center" style="color: <?php echo $comment->audience; ?>;"></i>
         <?php endif ?>
      </div>
      <div class="cmt-body col-xs-10">
         <p class="cmt-content"><?php echo $comment->content; ?></p>
         <p class="cmt-date"><?php echo $comment->created; ?></p>
      </div>
      <div class="clearfix"></div>
   </div>
<?php endforeach ?>