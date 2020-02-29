<?php

namespace Bgdnp\FotonHttp;

class Response
{
    public function send($data)
    {
        echo json_encode($data);
    }
}
