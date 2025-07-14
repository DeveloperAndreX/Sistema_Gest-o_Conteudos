<?php
// criando a rota Controladores:
use Pecee\SimpleRouter\SimpleRouter;
use sistema\Controlador\SiteControlador;
use sistema\Nucleo\Helpers;

// criação do grupo da rota. 
// encontrar os erros dessa rotas: 

/*
try {

    SimpleRouter::setDefaultNamespace('sistema\Controlador');

SimpleRouter::get(URL_SITE, 'SiteControlador@index');
SimpleRouter::get(URL_SITE.'sobre Nós', 'SiteControlador@sobre');
SimpleRouter::get(URL_SITE.'post/{id}', 'SiteControlador@post');
SimpleRouter::get(URL_SITE.'categoria/{id}','SiteControlador@categoria');
SimpleRouter::get(URL_SITE.'buscar', 'SiteControlador@buscar');

SimpleRouter::get(URL_SITE. '404', 'SiteControlador@erro404');

// catch:
}catch (Pecee\SimpleRouter\Exceptions\NotFoundHttpException $ex) {
    if(Helpers::localhost()) {
        // obtem a mensagem com getMessage()  caso else redireciona para pagina de Erro 404
        echo $ex->getMessage();
         }else {

            Helpers::redirecionar();  

         }

}

/* redirecionado no File Helpers: 
      public static function redirecionar(string $url = null): void
    {
        header('HTTP/1.1 302 Found');
        
        $local = ($url ? self::url($url) : self::url());
        
        header("Location: {$local} ");
        exit();
    }
         }

}


?>
