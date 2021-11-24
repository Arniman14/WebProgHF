<?php

class CartItem {

    private Product $product;
    private int $quantity;

    function __construct(Product $product, int $quantity) {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    function getProduct(): Product {
        return $this->product;
    }

    function getQuantity(): int {
        return $this->quantity;
    }

    function setProduct(Product $product): void {
        $this->product = $product;
    }

    function setQuantity(int $quantity): void {
        $this->quantity = $quantity;
    }

    public function increaseQuantity() {

        if ($this->quantity < $this->product->getAvailableQuantity()) {
            $this->quantity++;
        }
    }

    public function decreaseQuantity() {
        if ($this->quantity > 1) {
            $this->quantity--;
        }
    }

}
