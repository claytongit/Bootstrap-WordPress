<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
    <div class="input-group">
        <input type="search" class="form-control" value="<?php echo get_search_query(); ?>" name="s" placeholder="Pesquisar">
        <div class="input-group-append">
            <button class="btn btn-my-color-3" type="submit">Buscar</button>
        </div>
    </div>
</form>


