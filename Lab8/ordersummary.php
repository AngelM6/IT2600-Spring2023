<!DOCTYPE html>
<html>

<head>
<?php
// tax amount is 7%
define("TAX", 0.07);

// 1. Add 3 properties to the Book class: $title, $author, and $price. 
class Book {
    public $title;
    public $author;
    public $price;

    // 2. Fill-in the following constructor method, so that it assigns values to the properties $title, $author, and $price
    function __construct($title, $author, $price) {
    $this->$title = $title;
    $this->author = $author;
    $this->price = $price;
    }

    // 3. Create a method called display(), which outputs a line for the current book with title, author, and price
function display(){
echo "Title: $this->title,<br> Author: $this->author,<br>Price:$this->price
<br><br>";
}
}

// 4. Create a function called get_tax() that calculates the tax using the constant TAX defined above. Return the price * tax amount.
function get_tax($price) {
    return $price*TAX;
}


$book1 = new Book($_POST['book1title'], $_POST['book1author'], $_POST['book1price']);
$book1->display();

// 5. Create a second object called book2. Use the values posted from index.php to assign values to the properties of the book object. Display it.
$book2 = new Book($_POST['book2title'], $_POST['book2author'], $_POST['book2price']);
$book2->display();
// 6. Create variables for $tax, $cost_with_tax. Calculate and display a total cost before tax (both books), tax cost, and total cost with tax.
$total_cost_before_tax = $book1->price + $book2->price;
$tax = get_tax($total_cost_before_tax);
$cost_with_tax = $total_cost_before_tax + $tax;

echo "Total cost before tax (both books): $total_cost_before_tax 
<br> Tax amount for both books: $tax <br> Total cost for both books after tax: 
$cost_with_tax <br>";
?>
</head>
<body>
</body>
</html>