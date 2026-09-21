 <?php

$products = [
    [
        "name" => "Laptop ASUS Vivobook",
        "price" => 15000000,
        "quantity" => 2
    ],
    [
        "name" => "Điện thoại iphone 13",
        "price" => 8000000,
        "quantity" => 3
    ],
    [
        "name" => "Tai nghe Lenovo",
        "price" => 1000000,
        "quantity" => 5
    ]
];

// Hiển thị thông tin tất cả sản phẩm
foreach ($products as $product) {
    echo "Tên sản phẩm: " . $product["name"] . "<br>";
    echo "Giá: " . $product["price"] . "<br>";
    echo "Số lượng: " . $product["quantity"] . "<br>";
    echo "<hr>";
}

// Hàm tính tổng giá trị tất cả sản phẩm
function totalValue($products) {
    $total = 0;

    foreach ($products as $product) {
        $total += $product["price"] * $product["quantity"];
    }

    return $total;
}

echo "Tổng giá trị tất cả sản phẩm: " . totalValue($products);

?>