<?php
include_once __DIR__ . '/product.php';
include_once __DIR__ . '/shipping.php';

class Shelter extends Product {
    use shipping;
	public function __construct(
		int $id,
		string $name,
		string $description,
		int $price, // il prezzo in centesimi
		Category $category,
		string $image,
		protected int $height, 
		protected int $width, 
		protected int $length, 
        int $weight,
	) {
		parent::__construct($id, $name, $description, $price, $category, $image);
	    $this->setWeight($weight);
    }

	public function printCard() {
		// ritorna il codice html della card da mostrare in pagina
		$type = get_class($this);
		return "
			<div class=\"col\">
				<div class=\"card h-100\">
					<img src=\"{$this->image}\" class=\"card-img-top\" alt=\"{$this->name}\">
					<div class=\"card-body\">
						<h5 class=\"card-title\">{$this->name}</h5>
						<p class=\"card-text\">{$this->description}</p>
					</div>
					<ul class=\"list-group list-group-flush\">
						<li class=\"list-group-item\">Type: {$type}</li>
						<li class=\"list-group-item\">Category: {$this->category->getName()}</li>
						<li class=\"list-group-item\">Dimensioni: {$this->width} x {$this->length} x {$this->height} mm</li>
						<li class=\"list-group-item\">Prezzo: {$this->getFormattedPrice()}</li>
                        <li class=\"list-group-item\">Peso: {$this->weight}</li>
					</ul>
					<div class=\"card-body\">
						<a href=\"#\" class=\"card-link\">Details</a>
					</div>
				</div>
			</div>
		";
	}
}