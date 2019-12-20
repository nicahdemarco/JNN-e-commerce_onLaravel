<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function add($id, $name = null, $qty = null, $price = null, array $options = [])
    {
        if ($this->isMulti($id)) {
            return array_map(function ($item) {
                return $this->add($item);
            }, $id);
        }

        $cartItem = $this->createCartItem($id, $name, $qty, $price, $options);

        $content = $this->getContent();
        if ($content->has($cartItem->rowId)) {
            $cartItem->qty += $content->get($cartItem->rowId)->qty;
        }
        
        $content->put($cartItem->rowId, $cartItem);
        
        $this->events->fire('cart.added', $cartItem);
        $this->session->put($this->instance, $content);
        return $cartItem;
    }

    public function remove($id)
    {
        $cartItem = $this->get($rowId);
        $content = $this->getContent();
        $content->pull($cartItem->rowId);
        $this->events->fire('cart.removed', $cartItem);
        $this->session->put($this->instance, $content);
    }
    /**
     * Get a cart item from the cart by its rowId.
     *
     * @param string $rowId
     * @return \Gloudemans\Shoppingcart\CartItem
}
