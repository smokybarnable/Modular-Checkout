<div class="col-sm-<?php echo $content_width; ?> cm-cc-comments">

  <hr>

  <h2><?php echo '<strong>' . MODULE_CONTENT_CHECKOUT_CONFIRMATION_COMMENTS_HEADING . '</strong>' . tep_draw_button(TEXT_EDIT, 'fa fa-edit', tep_href_link('checkout_payment.php', '', 'SSL'), NULL, NULL, 'pull-right btn-info btn-xs' ); ?></h2>

  <blockquote>
    <?php echo nl2br(tep_output_string_protected($order->info['comments'])) . tep_draw_hidden_field('comments', $order->info['comments']); ?>
  </blockquote>
  
</div>