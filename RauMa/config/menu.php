<?php
return[
    
    [
        'label'=>'Product Manager',
        'route'=>'product.index',
        'icon'=>'fa-shopping-cart',
        'item'=>[
            [
            'lable'=>'All Product',
            'route'=>'product.index'
        ],
        [
            'label'=>'Add Product',
            'route'=>'product.create',
        ]
    ]
        ],
    [
        'label'=>'Category Manager',
        'route'=>'category.index',
        'icon'=>'fa-shopping-cart',
        'item'=>[
        [
            'label'=>'All category',
            'route'=>'category.index',
        ],
        [
            'label'=>'Add Category',
            'route'=>'category.create',
        ]
        ]
    ],
    

]
?>