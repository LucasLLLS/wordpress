<?php get_header(); ?>
    <div id="conteudo">
        <div id="artigos">
        	<!--FORMA MAIS SIMPLIFICADA DE PUXAR OS POSTS -->
             <!--<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="artigo">
                    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <p>Postado por <?php the_author() ?> em <?php the_time('d/M/Y') ?> - <?php comments_popup_link('Sem Comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?> <?php edit_post_link('(Editar)'); ?></p>
                    <p><?php the_content(); ?></p>
                </div>            
            <?php endwhile?>
                 
            <?php else: ?>
                 
            <?php endif; ?>-->
			<!--FORMA MAIS COMUM DE PUXAR OS POSTS -->
            <?php if(have_posts()){ // verifica se tem posts
	        	while(have_posts()){
	        		the_post();
	        ?>

	        <div class="artigo">
	        	
	        	<h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
	        	<p>Postado por <? the_author()?> em <?php the_time('d/M/Y')?></p> - <?php comments_popup_link('Sem Comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?> <?php edit_post_link('(Editar)'); ?></p>
	          	<p><?php the_content(); ?></p>
	        </div>

	        <?php
	        	}
	        ?>
			<div class="navegacao">
			    <div class="recentes"><?php next_posts_link('&laquo; Artigos Anteriores') ?></div>
			    <div class="anteriores"><?php previous_posts_link('Artigos Recentes &raquo;') ?></div>
			</div>
	        <?php
	        }else{ // se não tiver posts mostra a mensagem abaixo
	        	?>
	        	<div class="artigo">
				    <h2>Nada Encontrado</h2>
				    <p>Erro 404</p>
				    <p>Lamentamos mas não foram encontrados artigos.</p>
				</div>
			<?php 
	        }
	        ?>
        </div>

        
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>