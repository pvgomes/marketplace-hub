<?php

namespace AppBundle\Infrastructure\Core;

use AppBundle\Domain\Core\Market as CoreMarket;

class Market extends CoreMarket
{

    // @TODO: THINK ABOUT GOOD STRATEGY FOR THIS CONFIGURATION GETS
    public function getConfiguration()
    {
        $json =  '{"api_key":"123123","id_seller":"78","base_url":"http:\/\/marketplace-hub_mockServer_1","uri_create_order":"\/tricae\/order","uri_confirm_order":"\/tricae\/order\/confirm","uri_cancel_order":"\/tricae\/order\/cancel"}';
        return json_decode($json, true);
    }

}
