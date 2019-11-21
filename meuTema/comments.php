<?php if ( is_single() || is_page() ) : ?>

    <div class="blog-comments">
        <?php if( have_comments() && comments_open() ) : ?>

            <h5 id="comments" class="mb-3">
                <?php comments_number( __('comentarios'), __('1 comentario'), '%' . __(' comentarios') ); ?>
            </h5>

            <div class="list-unlysted">
                <?php wp_list_comments(array(
                    'style' => 'div',
                    'type' => 'comment',
                    'callback' => 'format_comment',
                )); ?>
            </div>

            <?php $comments_arg = array(
                'title_reply' => 'Escreva sua Resposta',
                'title_reply_before' => '<h6 id="reply-title" class="comment-reply-title mt-4">',
                'title_reply_after' => '</h6>',
                'class_submit' => 'btn btn-my-color-3',
                'comments_notes_before' => '<p>Seu email não sera publicado</p>',
                'fields' => apply_filters('comments_form_default_fields', array(
                    'author' => '<div class="row"><div class="col-md-6 col-sm-12"><div class="form-group">' .
                    '<label class="control-label" for="author">' . __('Seu nome') . '</label>' .
                    ( $req ? '<span>*</span>' : '' ) .
                    '<input id="author" class="form-control" name="author" type="text" value="' . 
                    esc_attr( $commenter['comment_author'] ) . '" ' . $aria_req . '/></div></div>',
                    'email' => '
                    <div class="col-md-6 col-sm-12">
                    <div class="form-group">',
                    '<label class="control-label" for="email">'.__('Seu email').'</label>'.( $req ? '<span>*</span>' : '').
                    '<input class="form-control" id="email" name="email" type="text" value="'.esc_attr( $commenter['
                        comment_author_email
                    '] ).'" '.$aria_req.'/></div></div></div>',
                ) ),
                'comment_field' => '<p>'. '<textarea id="comment" class="form-control" placeholder="Sua Mensagem..."
                name="comment" rows="3" aria-required="true"></textarea>' . '</p>',
                'comment_notes_after' => '',
            ); 
                comment_form($comments_arg);
            ?>

        <?php else: if(comments_opne()) :  ?>

            <?php $comments_arg = array(
                'title_reply' => 'Escreva sua Resposta',
                'title_reply_before' => '<h6 id="reply-title" class="comment-reply-title mt-4">',
                'title_reply_after' => '</h6>',
                'class_submit' => 'btn btn-my-color-3',
                'comments_notes_before' => '<p>Seu email não sera publicado</p>',
                'fields' => apply_filters('comments_form_default_fields', array(
                    'author' => '<div class="row"><div class="col-md-6 col-sm-12"><div class="form-group">' .
                    '<label class="control-label" for="author">' . __('Seu nome') . '</label>' .
                    ( $req ? '<span>*</span>' : '' ) .
                    '<input id="author" class="form-control" name="author" type="text" value="' . 
                    esc_attr( $commenter['comment_author'] ) . '" ' . $aria_req . '/></div></div>',
                    'email' => '
                    <div class="col-md-6 col-sm-12">
                    <div class="form-group">',
                    '<label class="control-label" for="email">'.__('Seu email').'</label>'.( $req ? '<span>*</span>' : '').
                    '<input class="form-control" id="email" name="email" type="text" value="'.esc_attr( $commenter['
                        comment_author_email
                    '] ).'" '.$aria_req.'/></div></div></div>',
                ) ),
                'comment_field' => '<p>'. '<textarea id="comment" class="form-control" placeholder="Sua Mensagem..."
                name="comment" rows="3" aria-required="true"></textarea>' . '</p>',
                'comment_notes_after' => '',
            ); 
                comment_form($comments_arg);
            ?>
        
        <?php endif; endif; ?>
    </div>

<?php endif; ?>