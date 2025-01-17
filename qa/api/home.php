<?php
include '../db_connection.php';
header("Content-Type: application/json; charset=UTF-8");

// Fetch items where item = 'home'
$item = "home";
$sql = "SELECT * FROM events WHERE item = :home";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':home', $item);
$stmt->execute();
$resultHome = $stmt->fetchAll(PDO::FETCH_ASSOC);

$homeItems = [];
foreach ($resultHome as $row) {
    $homeItems[] = [
        "id" => null,
        "type" => "featured",
        "tag" => null,
        "object" => [
            "event_id" => null,
            "url" => '/' . $row["url"],
            "image" => [
                "en" => $row["image"],
                "ar" => $row["image"]
            ],
            "image_square" => [
                "en" => $row["image"],
                "ar" => $row["image"]
            ]
        ],
        "options" => new stdClass()
    ];
}

// Base JSON structure
$jsonData = [
    [
        "id" => 1,
        "staff_only" => false,
        "type" => "swipe",
        "options" => [
            "swiper" => [
                "loop" => true,
                "autoplay" => [
                    "delay" => 3500
                ],
                "breakpoints" => null,
                "spaceBetween" => 0,
                "slidesPerView" => 1
            ],
            "line_class" => "container mb-4",
            "swiper_item_wrapper_class" => "px-5 xl:px-0"
        ],
        "items" => $homeItems
    ],
    [
        "id" => 15,
        "staff_only" => false,
        "type" => "search",
        "options" => null,
        "items" => [
            [
                "id" => 106,
                "type" => "html",
                "tag" => null,
                "object" => new stdClass(),
                "options" => new stdClass()
            ]
        ]
    ]
];

try {
    // Fetch items where item != 'home'
    $sql = "SELECT * FROM events WHERE item != 'home' ORDER BY item";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $current_category = "";
    $category_items = [];
    foreach ($result as $row) {
        if ($current_category != $row["item"]) {
            if ($current_category != "") {
                $jsonData[] = [
                    "id" => 9,
                    "staff_only" => false,
                    "type" => "swipe",
                    "options" => [
                        "title" => [
                            "ar" => $current_category,
                            "en" => $current_category
                        ]
                    ],
                    "items" => $category_items
                ];
                $category_items = [];
            }
            $current_category = $row["item"];
        }

        $category_items[] = [
            "id" => null,
            "type" => "event",
            "tag" => "18",
            "object" => [
                "id" => 18,
                "name" => [
                    "ar" => $row["name"]
                ],
                "slug" => $row["url"],
                "image" => $row["image"],
                "image_hash" => "LGE|xDt80wV=xvW=ROni1FRi#Xoh"
            ],
            "options" => new stdClass()
        ];
    }

    // Add the last category items
    if (!empty($category_items)) {
        $jsonData[] = [
            "id" => 9,
            "staff_only" => false,
            "type" => "swipe",
            "options" => [
                "title" => [
                    "ar" => $current_category,
                    "en" => $current_category
                ]
            ],
            "items" => $category_items
        ];
    }

    // Output JSON
    echo json_encode($jsonData, JSON_UNESCAPED_UNICODE);

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close connection
$conn = null;
?>
