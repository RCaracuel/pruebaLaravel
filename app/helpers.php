<?php

    function setActive($nombreRuta){
        request()->routeIs($nombreRuta) ? 'active' : '';
    }

?>