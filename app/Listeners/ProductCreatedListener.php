<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use PhpAmqpLib\Message\AMQPMessage;

class ProductCreatedListener implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle(AMQPMessage $message)
    {
        $data = json_decode($message->getBody(), true);

        if ($data['type'] === 'product_created') {
            $product = $data['data'];
            \Log::info("Product created: {$product['name']} (ID: {$product['id']})");
        }
    }
}
